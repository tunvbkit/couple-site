<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 phara-temp about-template text-center r-title{{$tabWeb->id}}" >
			
	<div class="inline-title text-center">
        <h3 class="text-center title-tab section-title section-title-about" style="font-familly: {{$website_item->font}}; color: #{{$website_item->color2}}" id = "nameTitle{{$tabWeb->id}}">
            {{$tabWeb->title}}
        </h3>
	    <span onclick="sendTitle({{$tabWeb->id}},{{$tabWeb->visiable}})" class="glyphicon glyphicon-edit" data-toggle="modal" data-target='#modal-edit-menu'></span>
	</div>
	<div class="image-couple">
		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 content-broom">
		<span id="prev_output222">
			<a href="#">
				@if(!empty($website_item->avatar_groom))
				<img src="{{Asset("$website_item->avatar_groom")}}" class="img-responsive" alt="Image">							
			@else
				<img src="{{Asset('images/website/themes7/groom.jpg')}}" class="img-responsive" alt="Image">		
			@endif
			</a>
			<div class="text-center"><button onclick="send_id(0,222)" class="btn btn-primary" data-toggle="modal" data-target='#modal-changeimage' style="background: #19b5bc; border:none;">Đổi Ảnh</button></div>
		</span>		
			
			<div class="about_grooms show-content ">
				<span class="about-groom">{{$website_item->about_groom}}</span>
			</div>
			<div class="text-center icon-infor"><a onclick="editInforGroom()" data-toggle="modal" data-target="#edit-infor-groom" data-backdrop="static" class="glyphicon glyphicon-edit" href="javascript:void(0);"></a></div>
		</div>	
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 content-bride">
			<span id="prev_output111">
			<a href="#">
					@if(!empty($website_item->avatar_bride))
					<img src="{{Asset("$website_item->avatar_bride")}}" class="img-responsive" alt="Image">							
				@else
					<img src="{{Asset('images/website/themes7/bride.jpg')}}" class="img-responsive" alt="Image">		
				@endif
			</a>
			<div class="text-center"><button onclick="send_id(0,111)" class="btn btn-primary" data-toggle="modal" data-target='#modal-changeimage' style="background: #19b5bc; border:none;">Đổi Ảnh</button></div>
		</span>		
			<div class="about_bride show-content ">
				<span class="about-bride">{{$website_item->about_bride}}</span>
			</div>
			<div class="text-center icon-infor"><a onclick="editInforBride()" data-toggle="modal" data-target="#edit-infor-bride" data-backdrop="static" class="glyphicon glyphicon-edit" href="javascript:void(0);"></a></div>
		</div>
		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		</div>				
	</div>		
</div>