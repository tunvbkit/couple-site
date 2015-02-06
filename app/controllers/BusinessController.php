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
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
			$vendor->user = User::where('email',Input::get('email'))->get()->first()->id;
			$vendor->save();
			Session::put('email',Input::get('email'));
			return Redirect::to('business/dashboard');
		}
		
	}
	public function dashboard(){
		return View::make('business.dashboard');
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
					Session::put("email",Input::get('name-login'));

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
		Session::forget('email');	
		$view = View::make('business.index');
		return Response::make($view);
	}


}
