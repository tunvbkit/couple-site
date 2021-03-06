<?php

class GuestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		return View::make('guest.guest');
	}

	/**====================================
	* return id_user to view
	*
	*/ 
	public static function checkIfUrl($url)
	{
		if ( (Session::has('email')) || ($url==NULL) ) {
			$id_user = GuestController::id_user();
		} else {
			$id_user = GuestController::id_user_url($url);
		}

		return $id_user;
		
	}

	/**=====================================
	* @return when call url of user
	*
	*/ 
	private static function id_user_url($url) {	
		$id_user = WeddingWebsite::where( 'url', $url )->get()->first()->user;
		return $id_user;
	}

	/**=====================================
	* @return when call id of user
	*
	*/ 
	public static function id_user() {	
		$id_user = User::where( 'email', Session::get('email') )->get()->first()->id;
		return $id_user;
	}

	public function get_guest(){
		$id_user 		= GuestController::id_user();
		$id_guest 		= Input::get('id');
		$guest 			= Guests::where('user',$id_user)->where('id',$id_guest)->get()->first();
		$fullname 		= $guest->fullname;
		echo json_encode(array('fullname'=>$fullname));
		exit();
	}
	
	public function delete()
		{
			$id 				= Input::get('id');
			$guest 				= Guests::find($id);
			$id_group 			= $guest->group;			
			$guest->delete();
			$total_guest 		= Guests::where('user',GuestController::id_user())->get()->sum('attending');
			$total_invited 		= Guests::where('user',GuestController::id_user())->where('invited',true)->sum('attending');
			$total_noinvited 	= Guests::where('user',GuestController::id_user())->where('invited',false)->sum('attending');
			$total_group_guest  = Guests::where('user',GuestController::id_user())->where('group',$id_group)->sum('attending');
			echo json_encode(array('id_group'=>$id_group,'total_group_guest'=>$total_group_guest,'total_guest'=>$total_guest,'total_invited'=>$total_invited,'total_noinvited'=>$total_noinvited));
			exit();
		}
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	
	public function create()
	{
		$id_user 		= GuestController::id_user();
		$id_group 		= Input::get('id_group');
		
		$count 			= Guests::where('user',$id_user)->where('group',$id_group)->get()->count();
		if ($count) {
			$guest_last = Guests::where('user',$id_user)->where('group',$id_group)->get()->last()->id;
		} else {
			$guest_last = 0;
               
		}
		$guest 				= new Guests();
		$guest->fullname 	= "Họ và tên";
		$guest->email 		= "Email";
		$guest->address 	= str_random(4);
		$guest->phone 		= "Số điện thoại";
		$guest->attending 	= "1";		
		$guest->group 		= $id_group;
		$guest->user 		= $id_user;
        $guest->invited 	= false;
        $guest->confirm 	= false;
		$guest->save(); 
		$total_guest 		= Guests::where('user',GuestController::id_user())->sum('attending');
		$total_invited 		= Guests::where('user',GuestController::id_user())->where('invited',true)->sum('attending');
		$total_noinvited 	= Guests::where('user',GuestController::id_user())->where('invited',false)->sum('attending');
		$total_group_guest	= Guests::where('user',GuestController::id_user())->where('group',$id_group)->sum('attending');
		$guest_add 			= Guests::where('user',$id_user)->where('group',$id_group)->get()->last();
		$html = '';
		$html .='<tr class="guest_list'.$guest_add->id.'" id="guest_list_item_cat'.$guest_add->id.'">
			 	
	 			<td style="width:18%;text-align: left;">
	 				<div>
					 <a onclick="name_click('.$guest_add->id.')" class="'.$guest_add->id.'show_name">
					 	'.$guest_add->fullname.'
					 </a> 										 	
					    <input onblur="name_change('.$guest_add->id.')" ondblclick="name_dblclick('.$guest_add->id.')" type="text" class="'.$guest_add->id.'name form-control input-edit-guest" name="fullname" value="'.$guest_add->fullname.'">   
						<input type="hidden" name="'.$guest_add->id.'" value="'.$guest_add->id.'">
						 <p style="display:none;color:red;" class="name_error'.$guest_add->id.'">Nhập tên khách mời</p>
					 </div>			 
	 			</td>
	 			<td style="width:18%; text-align: left;">
					<div class="text-center"> 
						<a class="span-id-guest" title="Tìm hiểu thêm" data-toggle="modal" data-target="#alert-id-guest" data-backdrop="static">
							'.$guest_add->address.'
						</a> 										 	
					</div>				
				</td>
		 		<td style="width:14%;">
	 				<div >
					 <a onclick="phone_click('.$guest_add->id.')" class="'.$guest_add->id.'show_phone">'.$guest_add->phone.'</a> 										 	
					    <input onkeyup="key_phone(event,'.$guest_add->id.')" onblur="phone_change('.$guest_add->id.')" ondblclick="phone_dblclick('.$guest_add->id.')" type="text" class="'.$guest_add->id.'phone form-control input-edit-guest" name="phone" value="'.$guest_add->phone.'">   
						<input type="hidden" name="'.$guest_add->id.'" value="'.$guest_add->id.'">
					 </div>	
					  <p style="display:none;color:red;" class="phone_error'.$guest_add->id.'">phone không đúng</p>				 
		 		</td>
		 		<td style="width:18%;">
	 				<div> 
						<a onclick="email_click('.$guest_add->id.')" class="'.$guest_add->id.'show_email">'.$guest_add->email.'</a> 										 	
					    <input onblur="email_change('.$guest_add->id.')"  type="text" class="'.$guest_add->id.'email form-control input-edit-guest" name="email" value="'.$guest_add->email.'">   
						<input type="hidden" name="'.$guest_add->id.'" value="'.$guest_add->id.'">
					</div>
					<p style="display:none;color:red;" class="email_format'.$guest_add->id.'">email không đúng</p>
 				</td><!-- pay -->
	 			<td style="width:10%;">
	 				<div>
		 				<a onclick="attend_click('.$guest_add->id.')" class="'.$guest_add->id.'show_attend">'.$guest_add->attending.'</a> 										 	
					    <input onblur="attend_change('.$guest_add->id.')" ondblclick="attend_dblclick('.$guest_add->id.')" onchange="sum_attending('.$guest_add->id.')"type="text" class="'.$guest_add->id.'attend form-control input-edit-guest" name="attending" value="'.$guest_add->attending.'">   
						<input type="hidden" name="'.$guest_add->id.'" value="'.$guest_add->id.'">
	 				</div>
	 			</td><!-- Due -->
	 			<td style="width:10%;">
                     
	 				<input onclick="invited1_click('.$guest_add->id.')" type="submit" name="invited1" id="invited1'.$guest_add->id.'" class="form-control invited1" value="Chưa mời" required="required" title="">
	 				<input type="hidden" name="'.$guest_add->id.'" value="'.$guest_add->id.'">
	 				<input onclick="invited2_click('.$guest_add->id.')"  type="submit" name="invited2" style="display:none" id="invited2'.$guest_add->id.'" class="form-control invited2" value="Đã mời" required="required" title="">
	 				<input type="hidden" name="'.$guest_add->id.'" value="'.$guest_add->id.'">
	 			</td>
	 			<td style="width:10%;">	 				
	 				<a onclick="get_guest('.$guest_add->id.')" href="javascript:void(0)" data-toggle="modal" data-target="#modalDeleteGuest" class="guest_list_icon_trash guest_del'.$guest_add->id.'">
	 					<i class="glyphicon glyphicon-trash"></i>
	 				</a>
	 				<input type="hidden"  name="'.$guest_add->id.'" value="'.$guest_add->id.'" >
	 			</td>								
	 		</tr>';
	 		echo json_encode(array('total_group_guest'=>$total_group_guest,'total_guest'=>$total_guest,'total_invited'=>$total_invited,'total_noinvited'=>$total_noinvited,'guest_last'=>$guest_last,'html'=>$html));
	 		exit();
	}
public function update_name()
	{
		//
		$id 		= Input::get('id');
	    $name 		= Input::get('name');
		$guest 		= Guests::find($id);
		$guest->fullname=$name;
		$guest->save();

	}
	public function update_phone()
	{
		//
		$id=Input::get('id');
	    $phone=Input::get('phone');
		$guest=Guests::find($id);
		$guest->phone=$phone;
		$guest->save();

	}
	public function update_address()
	{
		//
		$id=Input::get('id');
	    $address=Input::get('address');
		$guest=Guests::find($id);
		$guest->address=$address;
		$guest->save();

	}
	public function update_email()
	{
		//
		$id=Input::get('id');
	    $email=Input::get('email');
		$guest=Guests::find($id);
		$guest->email=$email;
		$guest->save();

	}
	
	public function update_invited1()
	{
		//
		$id=Input::get('id');
		$attending=Input::get('attending');
		$guest=Guests::find($id);
		$guest->invited=true;
		$guest->attending=$attending;
		$guest->save();
		$total_invited=Guests::where('user',GuestController::id_user())->where('invited',true)->sum('attending');
		$total_noinvited=Guests::where('user',GuestController::id_user())->where('invited',false)->sum('attending');
        echo json_encode(array('total_invited'=>$total_invited,'total_noinvited'=>$total_noinvited));
        exit();


	}
	public function update_invited2()
	{
		//
		$id=Input::get('id');
		$attending=Input::get('attending');
		$guest=Guests::find($id);
		$guest->invited=false;
		$guest->attending=$attending;
		$guest->save();
		$total_invited=Guests::where('user',GuestController::id_user())->where('invited',true)->sum('attending');
		$total_noinvited=Guests::where('user',GuestController::id_user())->where('invited',false)->sum('attending');
        echo json_encode(array('total_invited'=>$total_invited,'total_noinvited'=>$total_noinvited));
        exit();
		

	}

	public function sumAttending()
	{

		$id_user=GuestController::id_user();
		$id_guest=Input::get('id_guest');
		$attending_post=Input::get('attending');
		$guest=Guests::find($id_guest);
		$guest->attending=$attending_post;
		$guest->save();
		$id_group=Guests::where("id",$id_guest)->get()->first()->group;
		$total_guest=Guests::where('user',$id_user)->sum('attending');
		$total_group_guest=Guests::where('user',$id_user)->where('group',$id_group)->sum('attending');
		$total_invited=Guests::where('user',$id_user)->where('invited',true)->sum('attending');
		$total_noinvited=Guests::where('user',$id_user)->where('invited',false)->sum('attending');
		echo json_encode(array('total_guest'=>$total_guest,'total_group_guest'=>$total_group_guest,'id_group'=>$id_group,'total_invited'=>$total_invited,'total_noinvited'=>$total_noinvited));
		exit();
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
	
	public function post_Add_Group(){

			$id_user=GuestController::id_user();

		    $rules=array(
				"name"=>"required"
			);
		    // check then insert to database
			if(!Validator::make(Input::all(),$rules)->fails()){
				$group = new Groups();
				$group->user = $id_user ;
				$group->name = Input::get('name');
				$group->save();
				
				$msg="Đã tạo nhóm thành công!";
				return Redirect::route("guest-list")->with('msg',$msg);
			}else{
				$msg="Thêm nhóm mới không thành công";
				return Redirect::route("guest-list")->with('msg',$msg);
			}

	} // function add group guest

	public function post_edit_Group(){
		$id_group = Input::get('id_group');
	   	$name_group=Input::get('name_group');			
		$group = Groups::find($id_group);
		$group->name =$name_group;
		$group->save();								
		$name_group_new=Groups::where("id",$id_group)->get()->first()->name;
		echo json_encode(array('name_group_new'=>$name_group_new,"id_group"=>"$id_group"));
		exit();

	} // function edit group guest

	public function sentNameGroupEdit()
	{
		$id_group=Input::get('id_group');
		$name_group=Groups::where('id',$id_group)->get()->first()->name;
		echo json_encode(array('name_group'=>$name_group));
		exit();
	}
	public function checkName(){
		$id_user=GuestController::id_user();
		$name_group=Input::get('name_group');
		$counts_name=Groups::where('user',$id_user)->where('name',$name_group)->get()->count();
		if($counts_name!=0)
		{
			$check=true;
		}
		else
		{
			$check=false;
		}
		echo json_encode(array('check'=>$check));
		exit();
	} 
	public function post_delete_Group(){

			$id_user=GuestController::id_user();
			$id_group = Input::get('id_group');
			$check=Guests::where('user',$id_user)->where('group',$id_group)->get()->count();
			if($check!=0)
			{
				Groups::where('id',$id_group)->delete();
				Guests::where('group',$id_group)->delete();	
			}
			else{
				Groups::where('id',$id_group)->delete();		   		
			}			
			
				
		echo json_encode(array("id_group"=>$id_group));
		exit();
			

	} 

	public function sentNameGroup()
	{
		$id_group=Input::get('id_group');
		$name_group=Groups::where('id',$id_group)->get()->first()->name;
		echo json_encode(array("name_group"=>$name_group));
		exit();

	}
	public function post_Add_Guest(){

			$id_user = GuestController::id_user();
	    	$guest = new Guests();
			$guest->user=$id_user;
			$guest->fullname = Input::get('fullname');
			if(Input::get('phone')==""){
				$guest->phone ="Phone";
			}
			else{
				$guest->phone = Input::get('phone');
			}
			if(Input::get('address')=="")
			{
				$guest->address="Address";
			}
			else
			{
				$guest->address = Input::get('address');
			}
			$guest->group=Input::get('group');
			if(Input::get('email')=="")
			{
				$guest->email = "Email";
			}
			else
			{
				$guest->email = Input::get('email');
			}
			
			$guest->attending = Input::get('attending');
			$guest->save();
			
			$msg="Đã thêm khách mời thành công!";
			return Redirect::route("guest-list")->with('msg',$msg);
		



	}
	public function check_guest_email(){
			$id_user = GuestController::id_user();
			return (Guests::where('id',$id_user)->where("email",Input::get('email'))->count()==0? "true": "false");
		}
	public function check_group()
	{
		$id_user = GuestController::id_user();
		$count= Groups::where('user',$id_user)->get()->count();
		if($count)
		{
			$counts=1;
		}
		else
		{
			$counts=0;
		}
		 echo json_encode(array('counts'=>$counts));
        exit();
		
	}


	public function exportfile(){
		$id_user =GuestController::id_user();		
		$datas = Guests::where('user', $id_user)->get();
		$email = User::where('id', $id_user)->get()->first()->email;
		$date_wedding = new DateTime(User::find($id_user)->weddingdate);
		
		// -------------
		$row = array(
			array('Khách hàng', $email, ''),
			array('In danh sách khách mời từ', 'thuna.vn', ''),
		    array('Nhóm','Khách mời','Số điện thoại','Email','Địa chỉ','Tham dự','Tình trạng'),
		);

		foreach($datas as $data){
			$id_group=$data->group;
			$group =Groups::where('id',$id_group)->get()->first()->name;
			$guest=$data->fullname;
			$phone=$data->phone;
			$email=$data->email;
			$address=$data->address;
			$attending=$data->attending;
			$invited=$data->invited;
			if($invited==true){
				$print_invited="Đã mời";
			}else{ $print_invited="Chưa mời"; }
		    
		    $row[] = array( $group, $guest,$phone,$email,$address,$attending, $print_invited );
		}


		Excel::create('Guestslist', function($excel) use($row) {
			
		    $excel->sheet('Guestslist', function($sheet) use($row) {
		    	
		    	$sheet->cells('A3:G3', function($row) {
				    // set color for cell
				    $row->setBackground('#95b3d7');

				});

		    	// cell A1 not null
		        $sheet->fromArray($row, null, 'A1', false, false);
		    });
		})->export('xlsx');

		return View::make('guest-list');
	}

	/**
	* function check attending
	*
	*/
	public function checkAttending()
	{
		$code_check_attending		= Input::get('checkAttendingCode');
		$num_person 				= Input::get('numPerson');
		$id_guest					= Input::get('idGuest');

		$guest 						= new Guests();
		if ( $guest->where('id', $id_guest)->get()->first()->confirm == 1 ) {
			$confirm 				= 0;
		} else {
			$confirm 				= 1;
		}

		if ( $code_check_attending == null ) {
			$msg = "Xác nhận không thành công";
			$tiny = 0;
		} else {
			
			if ( $code_check_attending 	!= ($guest->where('id', $id_guest)->get()->first()->address) ) {
				
				$msg = "Xác nhận không thành công";
				$tiny = 0;

			} else {
				
				$guest->where('id', $id_guest)->update(
						array(
							"attending" 		=> $num_person,
							"confirm"			=> $confirm
						));

				$msg = "Xác nhận thành công";
				$tiny = 1;
			}
		}

		$guest_gh_confirm 	= $guest->where('id', $id_guest)->get()->first()->confirm;
		$guest_gh_id 		= $guest->where('id', $id_guest)->get()->first()->id;

		if ( $guest_gh_confirm == 1 ) {
			$returnCheckAttending = '';
			$returnCheckAttending .= '
				<div class="slideThree">
					<input type="checkbox" checked="checked" value="'.$guest_gh_id.'" id="slideThreeChk'.$guest_gh_id.'" name="checkAttending" />
					<label for="slideThree" class="labelChk'.$guest_gh_id.'"></label>
				</div>
			';
		} else {
			$returnCheckAttending = '';
			$returnCheckAttending .= '
				<div class="slideThree">	
					<input type="checkbox" value="'.$guest_gh_id.'" id="slideThreeChk'.$guest_gh_id.'" name="checkAttending" />
					<label for="slideThree" class="labelChk'.$guest_gh_id.'"></label>
				</div>
			';
		}
		
		

		echo json_encode( array("msg"=>$msg, "tiny"=>$tiny, "replace"=>$returnCheckAttending) );
		exit();

		
	}


	/**
	* count guest invited
	*
	*/
	public static function getGuestInvited()
	{
		$guest 		= new Guests();
		return $guest->where('user', GuestController::id_user())->where('invited', true)->get()->count();
	}

	/**
	* count guest over invited
	*
	*/
	public static function getGuestOverInvited()
	{
		$guest 		= new Guests();
		return $guest->where('user', GuestController::id_user())->where('invited', false)->get()->count();
	}

	/**
	* count guest confirmed
	*
	*/
	public static function getGuestConfirmed()
	{
		$guest 		= new Guests();
		return $guest->where('user', GuestController::id_user())->where('confirm', true)->get()->count();
	}

	/**
	* count guest not confirm
	*
	*/
	public static function getGuestNotConfirm()
	{
		$guest 		= new Guests();
		return $guest->where('user', GuestController::id_user())->where('confirm', false)->get()->count();
	}

	/**
	* count all guest
	*
	*/
	public static function getAllGuest()
	{
		$guest 		= new Guests();
		return $guest->where('user', GuestController::id_user())->get()->count();
	}

	/**
	* count % guest invited
	*
	*/
	public static function getGuestInvitedPercent()
	{
		if (GuestController::getAllGuest()==0) {
			$percent=0;
		} else {
			$percent 	= ( GuestController::getGuestInvited()/GuestController::getAllGuest() )*100;
			$percent 	= round($percent);
		}

		return $percent;
	}

	/**
	* count percent
	*/
	public static function getGuestOverInvitedPercent()
	{
		if (GuestController::getAllGuest()==0) {
			$percent=0;
		} else {
			$percent 	= ( GuestController::getGuestOverInvited()/GuestController::getAllGuest() )*100;
			$percent 	= round($percent);
		}

		return $percent;
	}

	public static function getGuestConfirmPercent()
	{
		if (GuestController::getAllGuest()==0) {
			$percent=0;
		} else {
			$percent 	= ( GuestController::getGuestConfirmed()/GuestController::getAllGuest() )*100;
			$percent 	= round($percent);
		}

		return $percent;
	}

	public static function getGuestNotConfirmPercent()
	{
		if (GuestController::getAllGuest()==0) {
			$percent=0;
		} else {
			$percent 	= ( GuestController::getGuestNotConfirm()/GuestController::getAllGuest() )*100;
			$percent 	= round($percent);
		}

		return $percent;
	}




}
