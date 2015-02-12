<?php

class BusinessController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	// public function _construct(){
	// 	$this->beforeFilter(function(){
			
	// 	});
	// }

	public function index()
	{
		//
		$msg = Session::get('msg');
		$location = BusinessController::getLocation();
		$categories = BusinessController::getCategory();
		$id_user = $this->getUser();
		$vendor = Vendor::where('user',$id_user)->get();
		return View::make('business.edit')->with('vendor',$vendor)
												->with('categories',$categories)
												->with('location',$location)
												->with('msg',$msg);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public static function getUser(){
		$id_user = User::where( 'email', Session::get('business') )->get()->first()->id;
		return $id_user;
	}
	public static function getVendor(){
		$id_user = BusinessController::getUser();
		return Vendor::where('user',$id_user)->get()->first();
	}
	public static function getNameCategory($id){
		return Category::where('id',$id)->get()->first()->name;
	}
	public function postVendor(){
		$rules = array(
			'company'=>'required|min:2',
			'address'=>'required|min:5',
			'phone'=>'required|min:10',
			'email'=>'required|email',
			'password'=>'required',
			'cf_password'=>'required'
			);
		$validator = Validator::make(Input::all(),$rules);
		if ($validator->fails()) {
			$errors = $validator->messages();
			return Redirect::route('b_register')->with('errors',$errors);
		} else {
			$user = new User();
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('cf_password'));
			$user->role_id =3;	
			$user->save();
			
			$vendor = new Vendor();
			$vendor->name = Input::get('company');
			$vendor->category = Input::get('category');
			$vendor->location = Input::get('location');
			$vendor->address = Input::get('address');
			$vendor->phone = Input::get('phone');		
			$vendor->website = Input::get('website');
			$vendor->slug = Str::slug(Input::get('company'));
			$vendor->avatar = 'images/default.jpg';
			$vendor->user = User::where('email',Input::get('email'))->get()->first()->id;
			$vendor->save();
			Session::put('business',Input::get('email'));
			return Redirect::to('business/dashboard');
		}
		
	}
	public function dashboard(){
		$vendor = $this->getVendor();
		return View::make('business.dashboard')->with('vendor',$vendor);
	}
	public function checkEmailCompany(){
		return (User::where('email',Input::get('email'))->count() == 0 ? 'true':'false');
	}
	public static function getCategory(){
		return Category::get();
	}
	public static function getLocation(){
		return Location::get();
	}
	public function register(){
		$location = BusinessController::getLocation();
		$categories = BusinessController::getCategory();
		return View::make('business.register')->with('categories',$categories)
												->with('location',$location);
	}
	public function login(){
		return View::make('business.login');
	}
	public function postLogin(){
		try {

			($remember=Input::has('remember')) ? true: false;
			$auth=Auth::attempt(array(
					"email"=> Input::get('name-login'),
					"password"=> Input::get('password'),
					"role_id"=> 3
					),$remember);
				
				if($auth)
				{
					Session::put("business",Input::get('name-login'));

					// go to view request
					return Redirect::to('business/dashboard');

				}else{
					return View::make("business.login")->with("messages","Email hoặc mật khẩu không đúng!");
				}

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	public function logout(){
		Session::forget('business');	
		$view = View::make('business.index');
		return Response::make($view);
	}
	public function updateProfile(){
		$rules = array(
			'company'=>'required|min:2',
			'address'=>'required|min:5',
			'phone'=>'required|min:10'
			);
		$validator = Validator::make(Input::all(),$rules);
		if ($validator->fails()) {
			$errors = $validator->messages();
			return Redirect::route('b_update_profile')->with('errors',$errors);
		} else {
			Vendor::where('user',$this->getUser())->update(
				array('name'=>Input::get('company'),
						'category'=>Input::get('category'),
						'location'=>Input::get('location'),
						'address'=>Input::get('address'),
						'phone'=>Input::get('phone'),
						'website'=>Input::get('website'),
						'about'=>Input::get('about'))
				);
				$msg = "Cập nhật thông tin thành công";
			return Redirect::route('business.index')->with('msg',$msg);
		}
	}
	public static function getRating($id_vendor){
		return	Rating::where('vendor',$id_vendor)->get()->first();
	}
	public static function getSlide($id_vendor){
		return PhotoSlide::where('vendor',$id_vendor)->get();
	}
	public static function checkHasAvatar(){
		return Vendor::where('user',BusinessController::getUser())->get()->first()->avatar;
	}
	public function bUploadAvatar(){
		$file = Input::file('file');
		$id_user = $this->getUser();
		$year=date("Y");
		$month=date('m');
		if (Input::hasFile('file')) {
			if (!empty($this->checkHasAvatar()))
			 {
				$path_delete=base_path( $this->checkHasAvatar() );
				File::delete($path_delete);
			} 
				File::makeDirectory(base_path('images/avatar/'.$year.'/'.$month),$mode = 0775,true,true);
				$filename = $id_user.'vendor' .str_random(10).'.' .$file->getClientOriginalExtension();
				$pathsave = 'images/avatar/'.$year.'/'.$month.'/'.$filename;
				$path = base_path('images/avatar/'.$year.'/'.$month.'/'.$filename);
				Image::make($file->getRealPath())->resize(300, 300)->save($path);
				Vendor::where('user',$id_user)->update(
						array('avatar'=>$pathsave)					
						);
		}
	}
	public function bUploadSlide(){
		$file = Input::file('file');
		$id_user = $this->getUser();
		$vendor = $this->getVendor()->id;
	 	 if(Input::hasFile('file')){
			$slide = new PhotoSlide();
			$years = date("Y");
			$months = date('m');	
			File::makeDirectory(base_path('images/slide/'.$years.'/'.$months),$mode = 0775,true,true);
		  	$filename1 = $vendor.str_random(10) . '.' .$file->getClientOriginalExtension();
		  	$filename2 = $vendor.str_random(10) . '.' .$file->getClientOriginalExtension();
			$path1 = base_path('images/slide/'.$years.'/'.$months.'/'.$filename1);
			$path2 = base_path('images/slide/'.$years.'/'.$months.'/'.$filename2);
			$pathsave1 = 'images/slide/'.$years.'/'.$months.'/'.$filename1;
			$pathsave2 = 'images/slide/'.$years.'/'.$months.'/'.$filename2;
			Image::make($file->getRealPath())->resize(700, 450)->save($path1);
			Image::make($file->getRealPath())->resize(80, 80)->save($path2);
			$slide->vendor = $vendor;
			$slide->bigpic = $pathsave1;
			$slide->smallpic = $pathsave2;
			$slide->save();   	
   		 }
	}
	public function bLoadAvatar(){
		$id_user = $this->getUser();
		$vendor = Vendor::where('user',$id_user)->get()->first();			
 		$image = asset('../'.$vendor->avatar);
 		return Response::json(array('image'=>$image));
	}
	public function bLoadSlide(){
		$vendor	= 	$this->getVendor()->id;
		$slide 	=	PhotoSlide::where('vendor',$vendor)->get();		
		return View::make('business.my-slide')->with('slide', $slide);
	}
	public function bUploadVideo(){
		$link = Input::get('link-video');
		Vendor::where('user',$this->getUser())->update(array('video'=>$link));
		return Redirect::route('business.index');
	}
	public function bUploadMap(){
		$map = Input::get('link-map');
		Vendor::where('user',$this->getUser())->update(array('map'=>$map));
		return Redirect::route('business.index');
	}
	public function bDeleteSlide(){
		$id_slide = Input::get('id_slide');
		$name = PhotoSlide::where('id',$id_slide)->get()->first()->bigpic;
		$name2 = PhotoSlide::where('id',$id_slide)->get()->first()->smallpic;
		$path_delete1 = base_path($name1);
		$path_delete2 = base_path($name2);
		File::delete($path_delete1);
		File::delete($path_delete2);
		PhotoSlide::where('id',$id_slide)->delete();
	}

}
