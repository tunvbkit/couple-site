@extends('main')
@section('title')
{{$vendor->name}}
@endsection
@section('nav-bar')

<!-- Navigation -->
<div class="row bg-menu-top">
	<div class="navbar">
	  	<div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	      	</button>
	  	</div>
	  	<div class="navbar-collapse collapse navbar-responsive-collapse">
		    <ul class="nav navbar-nav">
		      	<li>
		      		<a href="{{URL::route('index')}}" title="Trang chủ">
		      			Trang chủ
 		      		</a>
		      	</li>

		      	<li class="dropdown active">
			        <a href="#" class="dropdown-toggle main_menu" data-toggle="dropdown" title="Nhà cung cấp dich vụ">
						Nhà cung cấp dịch vụ
			        </a>
			        <ul class="dropdown-menu oneUl-vendor" role="menu">
			          	<li role="presentation" class="dropdown-header">
				            <div class="row">
				              <div class="col-xs-6">
				                <ul class="list-unstyled">
				                	@foreach(Category::get() as $key=>$category)
			                		@if($key <7)
					                  <li class="images_li" style="background-image:url('{{Asset("icon/cat/{$category->images}")}}')">
					                  	<a href="{{URL::route('category', array($category->slug))}}">
					                  		{{$category->name}}
					                  	</a>
					                  </li>
				                  	@endif() 
					         		@endforeach()	
				                </ul>
				              </div>
				              <div class="col-xs-6">
				                <ul class="list-unstyled">
					                @foreach(Category::get() as $key=>$category)
			                		@if($key >=7)
					                  <li class="images_li" style="background-image:url('{{Asset("icon/cat/{$category->images}")}}')">
					                  	<a href="{{URL::route('category', array($category->slug))}}">
					                  		{{$category->name}}
					                  	</a>
					                  </li>
				                  	@endif() 
					         		@endforeach()				                  
				                </ul>
				              </div>
				            </div>
			          	</li>
			        </ul>
		      	</li> <!--/music-->

		      	@if(Session::has('email'))
		      	<li><a href="{{URL::to('website')}}" title="Website cưới">
		        		Website cưới
		        	</a>
		        </li>
		        @else
		        <li><a href="{{URL::to('website-introduce')}}" title="Website cưới">
		        		Website cưới
		        	</a>
		        </li>
		        @endif
		      	@if(Session::has('email'))
			      	<li  class="dropdown">
			    		<a href="#" class="dropdown-toggle main_menu" data-toggle="dropdown" title="Công cụ">
							Công cụ kế hoạch
				        </a>
				        <ul class="dropdown-menu oneUl-tool" role="menu">
					      	<li><a href="{{URL::route('user-checklist')}}" title="Danh sách công việc">
					      			<span class="fa fa-file-text-o"></span>Danh sách công việc
			 		      		</a>
					      	</li>
					      	<li><a href="{{URL::route('guest-list')}}" title="Danh sách khác mời">
					      			<span class="fa fa-group"></span>Danh sách khách mời
			 		      		</a>
					      	</li>
					      	<li><a href="{{URL::route('budget')}}" title="Quăn lí ngân sách">
					      			<span class="fa fa-dollar"></span>Quản lí ngân sách
			 		      		</a>
					      	</li>
				        </ul>
			    	</li>
		      	@else
			      	<li><a href="{{URL::to('planning-tool')}}" title="Công cụ lập kế hoạnh">
			      			Công cụ lập kế hoạch
	 		      		</a>
			      	</li>
		      	@endif
		      	<li class="dropdown">
			        <a href="#" class="dropdown-toggle main_menu" data-toggle="dropdown" title="Âm nhạc">
						Âm nhạc
			        </a>
			        <ul class="dropdown-menu oneUl" role="menu">
			          	<li role="presentation" class="dropdown-header"><span>Nghi lễ</span>
				            <div class="row">
				              <div class="col-xs-6">
				                <ul class="list-unstyled">
				                  <li><a href="{{URL::route('songs', array('mo-dau'))}}">Mở đầu</a></li>
				                  <li><a href="{{URL::route('songs', array('doan-ruoc'))}}">Đoàn rước</a></li>
				                </ul>
				              </div>
				              <div class="col-xs-6">
				                <ul class="list-unstyled">
				                  <li><a href="{{URL::route('songs', array('nghi-thuc'))}}">Nghi thức</a></li>
				                  <li><a href="{{URL::route('songs', array('ket-thuc'))}}">Kết thúc</a></li>
				                </ul>
				              </div>
				            </div>
			          	</li>
			          	<li role="presentation" class="dropdown-header"><span>Đãi tiệc</span>
				            <div class="row">
				              <div class="col-xs-6">
				                <ul class="list-unstyled">
				                  <li><a href="{{URL::route('songs', array('khai-tiec'))}}">Khai tiệc</a></li>
				                  <li><a href="{{URL::route('songs', array('phat-bieu'))}}">Phát biểu</a></li>
				                  <li><a href="{{URL::route('songs', array('cat-banh'))}}">Cắt bánh</a></li>
				                </ul>
				              </div>
				              <div class="col-xs-6">
				                <ul class="list-unstyled">
				                  <li><a href="{{URL::route('songs', array('vao-tiec'))}}">Vào tiệc</a></li>
				                  <li><a href="{{URL::route('songs', array('chuc-mung'))}}">Chúc mừng</a></li>
				                  <li><a href="{{URL::route('songs', array('cuoi-tiec'))}}">Cuối tiệc</a></li>
				                </ul>
				              </div>
				            </div>
			          	</li>
			        </ul>
		      	</li> <!--/music-->

		      	<li><a href="{{URL::action('FortuneController@getIndex')}}" title="Xem ngày cưới">
		      			Xem ngày cưới
		      		</a>
		      	</li>
		    
		    </ul>
	  	</div>
	</div><!--/.nav-->
</div><!--/.bg-menu-top-->
<!-- <div class="row lr-bottom-menu"></div> -->

@endsection
@section('content')
		<div class="row" id="infor-vendor">
			<div class="container body-detailvendor">
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9" id="body-left">
				<div class="row" id="top-left">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" id="left-infor">
							<a href="" onclick="history.go(-1);return false" id="left-infor title-infor">{{Vendor::find($vendor->id)->category()->get()->first()->name}} tại {{Vendor::find($vendor->id)->location()->get()->first()->name}}:</a>
							<div id="left-infor avata-vendor" >
								@if(empty($vendor->avatar))
	                        	<img class="img-responsive img-thumbnail" src="{{Asset('../images/avatar/default.jpg')}}">
	                        	@else
	                        	<img class="img-responsive img-thumbnail" src="{{Asset("../{$vendor->avatar}")}}">
	                        	@endif()
								<div class="fb-like" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
						</div>
							</div>
							<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));
								</script>
								
						<div calss="col-xs-12 col-sm-7 col-md-7 col-lg-7" id="right-infor">
							<h3 id="right-infor name">{{$vendor->name}}</h3>
							<p id="right-infor address">{{$vendor->address}}<a href="#map" data-toggle="tab" class="outside-link" id="show_map_detail" onclick="show_map_detail()"> |Map.</a></p>
							<p id="right-infor address"><b>Điện thoại:</b> {{$vendor->phone}}</p>
							<p id="right-infor web"><b>Website      </b>:<a href="{{$vendor->website}}" id="right-infor link" target="_blank"> Ghé thăm Website của tôi</a></p>
							<p id="right-infor service"><b>Dịch vụ</b>:
								{{Vendor::find($vendor->id)->category()->get()->first()->name}}
							</p>
							
						</div>

					</div><!-- -End infor vendor -->
					<div class="tab-content">
					
						<div class="tab-menu"  id="tabs">
											
								<!-- Nav tabs -->
							<ul  class="nav nav-tabs" id="vendor-menu" role="tablist"  >
								  <li class="active"><a data-toggle="tab" href="#aboutme">Hồ sơ</a></li>
								  <li class="boder-style"><a data-toggle="tab" href="#review" >{{Lang::get('messages.Review')}}</a></li>
								  <li class="boder-style"><a data-toggle="tab" href="#photos" >{{Lang::get('messages.Photo')}}</a></li>
								  <li class="boder-style"><a data-toggle="tab" href="#video" >Video</a></li>
								  <li class="boder-style"><a data-toggle="tab" href="#FAQ">FAQ</a></li>
								  <li class="boder-style"><a data-toggle="tab" href="#map">{{Lang::get('messages.Map')}}</a></li>
							</ul>

							
						<div class="tab-content">
						  <div class="tab-pane active" id="aboutme">
						  		<div id="content-vendor">
									<h4> Đôi nét về chúng tôi</h4>
									<p>{{$vendor->about}}.</p>
								</div>
								<div id="content-photo">
									<h4>Ảnh</h4>
										@if($check_photoslide>0)	
										<ul id="thumbs-main">											
												@foreach($photoslides as $index => $photoslide)
												<li  rel="{{$index+1}}"><a href="#photos" class="image-outside-link" data-toggle="tab">
													<img class="img-responsive" src="{{Asset("../{$photoslide->smallpic}")}}">
												</a></li>
												@endforeach											   
										</ul>
											<a style="margin-left:2%;" href="#photos" class="outside-link"data-toggle="tab">Xem thêm</a>
										@else
												
										@endif	
								</div>
								<div style="clear:both"></div>

								<div id="content-video">
									<h4> Video</h4>
									{{$vendor->video}}
								</div>
						  	</div>
						  	<div class="tab-pane" id="review">
						  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 review-star">
						  			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="border-right:solid 1px #ddd;">
						  				@if($check_rating_avg)
						  				<div class="text-center"><h5 style="margin-bottom:0px;">Đánh giá trung bình</h5></div>
						  				<div class="text-center" style="margin: 6%">
						  					<span class="avg-show-rating" style="font-size: 30px;font-weight: bold; color: red;"> 
						  						{{round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1)}}/5
						  					</span>
						  				</div>
						  				<div class="star-avg-rating text-center">
						  					@if($avg_rating==0)
						  						<img src="{{Asset('images/star/0.jpg')}}" class="img-responsive agv-rating " alt="">
						  					@else
						  						@if($avg_rating > 0 & $avg_rating < 1)
						  						<img src="{{Asset('images/star/0.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($avg_rating == 1)
						  						<img src="{{Asset('images/star/1.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($avg_rating > 1 & $avg_rating < 2)
						  						<img src="{{Asset('images/star/1.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($avg_rating == 2)
						  						<img src="{{Asset('images/star/2.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($avg_rating > 2 & $avg_rating < 3)
						  						<img src="{{Asset('images/star/2.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($avg_rating == 3)
						  						<img src="{{Asset('images/star/3.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($avg_rating > 3 & $avg_rating < 4)
						  						<img src="{{Asset('images/star/3.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($avg_rating == 4)
						  						<img src="{{Asset('images/star/4.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($avg_rating > 4 & $avg_rating < 5)
						  						<img src="{{Asset('images/star/4.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($avg_rating == 5)
						  						<img src="{{Asset('images/star/5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  					@endif
						  				</div>		
							  			@else
							  				<div class="text-center"><h5 style="margin-bottom:0px;">Đánh giá trung bình</h5></div>
							  				<div class="text-center" style="margin: 6%">
							  					<span class="avg-show-rating" style="font-size: 30px;font-weight: bold; color: red;"> 
							  						0/5
							  					</span>
							  				</div>
							  				<div class="star-avg-rating text-center">
							  					<img src="{{Asset('images/star/0.jpg')}}" class="img-responsive agv-rating" alt="">
							  				</div>
							  			@endif
							  			<div class="text-center" style="margin: 6%">
							  				@if(!empty(VendorComment::where('vendor',$vendor->id)->get()->count()))
							  				{{VendorComment::where('vendor',$vendor->id)->get()->count()}} nhận xét
							  				@else
							  					0 nhận xét
							  				@endif
							  				
							  			</div>
						  			</div>
						  			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 start-inline">
						  				<div class="text-center">
						  					5 sao <img src="{{Asset('images/star/5.jpg')}}" class="img-responsive" alt="">
							  				@if(!empty(VendorComment::where('vendor',$vendor->id)->where('rating',5)->get()->count()))
						  						{{VendorComment::where('vendor',$vendor->id)->where('rating',5)->get()->count()}}
							  				@else
						  						0
					  						@endif
						  				</div>
						  				<div class="text-center">
						  					4 sao <img src="{{Asset('images/star/4.jpg')}}" class="img-responsive" alt="">
							  				@if(!empty(VendorComment::where('vendor',$vendor->id)->where('rating',4)->get()->count()))
						  						{{VendorComment::where('vendor',$vendor->id)->where('rating',4)->get()->count()}}
							  				@else
						  						0
						  					@endif
						  				</div>
						  				<div class="text-center">
						  					3 sao <img src="{{Asset('images/star/3.jpg')}}" class="img-responsive" alt="">
							  				@if(!empty(VendorComment::where('vendor',$vendor->id)->where('rating',3)->get()->count()))
						  						{{VendorComment::where('vendor',$vendor->id)->where('rating',3)->get()->count()}}
							  				@else
						  						0
							  				@endif
						  				</div>
						  				<div class="text-center">
						  					2 sao <img src="{{Asset('images/star/2.jpg')}}" class="img-responsive" alt="">
							  				@if(!empty(VendorComment::where('vendor',$vendor->id)->where('rating',2)->get()->count()))
						  						{{VendorComment::where('vendor',$vendor->id)->where('rating',2)->get()->count()}}
							  				@else
						  						0
							  				@endif
						  				</div>
						  				<div class="text-center">
						  					1 sao <img src="{{Asset('images/star/1.jpg')}}" class="img-responsive" alt="">
							  				@if(!empty(VendorComment::where('vendor',$vendor->id)->where('rating',1)->where('rating',1)->get()->count()))
						  						{{VendorComment::where('vendor',$vendor->id)->get()->count()}}
							  				@else
						  						0
							  				@endif
						  				</div>
						  				<div class="text-center">
						  					0 sao <img src="{{Asset('images/star/0.jpg')}}" class="img-responsive" alt="">
							  				@if(!empty(VendorComment::where('vendor',$vendor->id)->where('rating',0)->get()->count()))
						  						{{VendorComment::where('vendor',$vendor->id)->where('rating',0)->get()->count()}}
							  				@else
						  						0
							  				@endif
						  				</div>
						  			</div>
						  			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						  				<div class="text-center">
						  					<h5 style="margin-bottom:0px;">Chia sẻ nhận xét</h5>
						  				</div>
						  				<div class="text-center btn-review">
						  					<a href="javascript:void(0);" onclick="showReview({{Session::has('email')?'true':'false'}})" class="btn btn-responsive btn-primary btn-write">
						  						Viết nhận xét của bạn
						  					</a>
						  					<a href="javascript:void(0);" class="btn btn-responsive btn-primary btn-close">
						  						Đóng lại
						  					</a>
						  				</div>
						  			</div>
						  		</div>
						  		<script type="text/javascript">
						  			function showReview(check){
						  				var email = check;
						  				if (email) {
						  					$('.div-review').show();
							  				$('.btn-write').hide();
							  				$('.btn-close').show();
						  				} else{
						  					$('.div-hide-review').show();
							  				$('.btn-write').hide();
							  				$('.btn-close').show();
						  				};
						  			};
						  			$('.btn-close').click(function(){
						  				$('.div-review').hide();
						  				$('.div-hide-review').hide();
						  				$('.btn-write').show();
						  				$('.btn-close').hide();
						  			});
						  		</script>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-review">
									<h5>Gửi nhận xét của bạn</h5>
									<form action="{{URL::route('post_content_review')}}" method="POST" role="form" id="send-review">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 send-start">
											<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
												<label for="">1.Đánh giá:</label>
											</div>
											<div class="col-xs-12 col-sm-10 col-md-6 col-lg-10" style="padding-left:0px;">
												<div class="rating" data-rating="">
											   		<div></div><div></div><div></div><div></div><div></div><span style="margin:-3px 5px;">(<span id='info'></span>/5)<br></span> 
													   <input class="id-vendor-rating" type="hidden" value="{{$vendor->id}}" name="id-vendor-rating">
													   <input class="count-rating" type="hidden" value="" name="count_rating">
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 send-content">
											<label for="">2.Viết nhận xét của bạn bên dưới:</label>
											<textarea type="text" class="form-control text-review" name="text_review" style="width:100%;"></textarea>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
											<button type="submit" class="btn btn-primary">Đăng nhận xét</button>
										</div>										
									</form>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center div-hide-review">
									<div>
										<h6>Bạn phải đăng nhập để đăng nhận xét của bạn.</h6>
										<a class="btn btn-responsive btn-primary" href="{{URL::route('register')}}">Đăng kí</a>
										<a class="btn btn-responsive btn-primary" href="{{URL::route('login')}}">Đăng nhập</a>
									</div>
								</div>

						  		@foreach(VendorComment::where('vendor',$vendor->id)->where('active',0)->orderBy('created_at','DESC')->get() as $cmt)
								
								<div class="vendor_comment">
									<div class="vendor_avatar">
										<?php
										$user_avatar_old = User::where('id', $cmt['user'])->get()->first()->avatar;
										?>
										<img src="{{Asset("{$user_avatar_old}")}}">
									</div>										

									<div class="vendor_content">

										<span style="color: #428bca;">{{$cmt['user_name']}}</span> nhận xét:<br />
										<span>

						  					@if($cmt->rating == 0)
						  						<img src="{{Asset('images/star/0.jpg')}}" class="img-responsive agv-rating " alt="">
						  					@else
						  						@if($cmt->rating > 0 & $cmt->rating < 1)
						  						<img src="{{Asset('images/star/0.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($cmt->rating == 1)
						  						<img src="{{Asset('images/star/1.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($cmt->rating > 1 & $cmt->rating < 2)
						  						<img src="{{Asset('images/star/1.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($cmt->rating == 2)
						  						<img src="{{Asset('images/star/2.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($cmt->rating > 2 & $cmt->rating < 3)
						  						<img src="{{Asset('images/star/2.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($cmt->rating == 3)
						  						<img src="{{Asset('images/star/3.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($cmt->rating > 3 & $cmt->rating < 4)
						  						<img src="{{Asset('images/star/3.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($cmt->rating == 4)
						  						<img src="{{Asset('images/star/4.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($cmt->rating > 4 & $cmt->rating < 5)
						  						<img src="{{Asset('images/star/4.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if($cmt->rating == 5)
						  						<img src="{{Asset('images/star/5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  					@endif
										</span>
										
										{{$cmt['content']}}
									</div>
								</div>
								@endforeach
							<div id="your_cmt"></div> <!-- add comment -->
						  	</div>
						  	<div class=" tab-pane" id="photos">
						  			<h4>{{Lang::get('messages.Photo')}}</h4>
						  			  <!-- Wrapper for slides -->
								<div  id="bigPic">
									@if(!empty($photoslides))
										@foreach($photoslides as $index => $photoslide)
												<img style="margin:0 auto;" class="img-responsive" src="{{Asset("../{$photoslide->bigpic}")}}">
										@endforeach
									@endif			    
								</div>
								<ul  id="thumbs" style="margin-left:7.5%;">
										@if(!empty($photoslides))
											@foreach($photoslides as $index => $photoslide)
												<li rel="{{$index+1}}">
													<img class="img-responsive" src="{{Asset("../{$photoslide->smallpic}")}}">
												</li>
											@endforeach
										@endif			   
								</ul>
						  </div>
						  <div class="tab-pane" id="video">
				  			<h4>Video</h4>
				  			{{$vendor->video}}
				  			
						  </div>
						  <div class="tab-pane" id="FAQ">
						  		@yield('tab-FAQ')
						  		<h4>{{Lang::get('messages.FAQ')}}</h4>
						  </div>
						  <div class="tab-pane" id="map" data-src="{{$vendor->map}}">	  		
						  	<h4>{{Lang::get('messages.Map')}}</h4>
						  	<iframe src="" width="600" height="400" frameborder="0" style="border:0"></iframe>
						  </div>
						</div>
					</div>
				</div>
			
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3" id="right-contact">
					<div class="contact-me">
						<h6> <i class="glyphicon glyphicon-earphone"></i> {{$vendor->phone}} </h6>						
					<div  class="form">
							<form class="form-horizontal" role="form">
							  <div class="form-group">
							    <div class="">
							    	@if(!empty($firstname))
							    	
							    		<input type="text" class="form-control" id="input-firstname"  value="{{$firstname}}">
							    	
							    	@else
							    	
							    		<input type="text" class="form-control" id="input-firstname" placeholder="Họ" value="">
							    	@endif
							      
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="">
							      @if(!empty($lastname))
							    		<input type="text" class="form-control" id="input-lastname"  value="{{$lastname}}">
							    	@else
							    	
							    		<input type="text" class="form-control" id="input-lastname" placeholder="Tên"  value="">
							    	@endif
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="">
							      @if(!empty($firstname))
							    		<input type="text" class="form-control" id="input-email"  value="{{$email}}">
							    	
							    	@else
							    	
							    		<input type="text" class="form-control" id="input-email" placeholder="Email"  value="">
							    	@endif
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="">
							    @if(!empty($weddingdate))
							      	
							      	<input data-format="yyyy-MM-dd" type="text"   id="input-date" class="form-control  " placeholder="" value="{{$weddingdate}}"tabindex="3">
							    	@else
							    	<input data-format="yyyy-MM-dd" type="text"   id="input-date" class="form-control  " placeholder="Ngày cưới" tabindex="3">
						         @endif
							    </div>
							  </div>
							  <div class="form-group">
							    
							      <select class="form-control" id="selection-contact">
									  <option value="1"> Gởi thông tin qua mail cho tôi</option>
									  <option value="2"> Hãy gọi cho tôi </option>
									  <option value="3"> Đặt một câu hỏi</option>
								  </select>
							    </div><br/>
							    <div class="form-group">
							    <ul style="width:100%;" id="options" >
							  		<li style="display:none;list-style:none;list-style-position:inside;margin-top:-12%; ">
							  		</li>
								    <li style="display:none;list-style:none;list-style-position:inside;margin-top:-12%;">
								    	<div class="form-group">											
											<input  style="margin-left: -24px;width:103%;" type="text" class="form-control" id="input-phonenumber" value="" placeholder="Số điện thoại" >
									    </div>
									</li><!-- -endcall-div -->
								    
								    <li style="display:none ; list-style:none; margin-top:-12%;">
							    	 	<div class="form-group">								    	
							    			<textarea class="form-control" id="input-content" style="margin-left: -24px;width:103%;height:100px;resize: none;"></textarea> 
							    		</div>
									</li>
								 </ul>
								 </div>
								    <!-- -script show select -->
								<br>	
						  	<div class="form-group text-center" style="margin-top:-20%;">
							    <a onclick='sendContact({{$vendor->id}})' class="btn btn-primary btn-responsive btn-lg" id="btn-contact">Liên lạc</a>
							</div>
							 <div class="form-group"style="margin-left:72px">
							   <a href="" class="compare-btn">
							        <span class="compare-checkbox checked"><input type="checkbox"></span>
							        <span class="compare-link-text">So Sánh</span>
							    </a>
							  </div>
							</form>
					</div>
					<div class="action">
						<a href="#"><i class="glyphicon glyphicon-star yellow"></i> Viết phản hồi</a><br/>
						<a href="#"><i class="glyphicon glyphicon-heart pink"></i> Lưu nhà cung cấp dịch vụ này</a><br/>
						<img src="{{Asset('icon/icon-fb.jpg')}}"><a href="#"> Tìm tôi trên Facebook</a><br/>
						<img src="{{Asset('icon/twitter.jpg')}}"><a href="#"> Theo dõi tôi trên twitter</a><br/>
						<img src="{{Asset('icon/pin.jpg')}}"><a href="#"> Theo dõi tôi trên Pinterest</a>
					</div>
					
				</div>
			</div>
			</div>
			<script type="text/javascript">
				$('#vendor-menu').click('show', function(e) {  
				    paneID = $(e.target).attr('href');
				    src = $(paneID).attr('data-src');
				    // if the iframe hasn't already been loaded once
				    if($(paneID+" iframe").attr("src")=="")
				    {
				        $(paneID+" iframe").attr("src",src);
				    }
				});
				function show_map_detail()
				{
					
				    src = $('#map').attr('data-src');
				    // if the iframe hasn't already been loaded once
				    if($("#map"+" iframe").attr("src")=="")
				    {
				        $("#map"+" iframe").attr("src",src);
				    }
				};
				function sendContact(id){
					 $.ajax({
			          type:"post",
			          data:{id_vendor:id,
			          		firstname:$('#input-firstname').val(),
			          		lastname:$('#input-lastname').val(),
			          		email:$('#input-email').val(),
			          		weddingdate:$('#input-date').val(),
			          		phone:$('#input-phonenumber').val(),
			          		title:$('#selection-contact').val(),
			          		content:$('#input-content').val()
			          	},
			          url:"{{URL::route('send_contact')}}",
			          success:function(){
			          	$('.form').remove();
			          	$('.contact-me > h6').append('<div style="border :solid 1px #0072ff;margin-top:5%;"><span class="fa fa-check-circle" style="position:absolute;color:0072ff;right:7%;"></span><p style="color:#0072ff;padding:7% 2%;margin:0%;" class="text-center">Yêu cầu của bạn đã được gửi đi</p></div>')
			           
			          }
			          }); 
					}
					$('#vendor_comment').keypress(function(event){
						var keycode = (event.keyCode ? event.keyCode : event.which);
						if(keycode == '13'){
							$('.btn_post_cmt').trigger('click');
						}
					});
					function ShowRating($element, rating){
					    $stars = $element.find('div');
					    $stars.removeClass('selected highlighted');
					    rating = parseInt(rating);
					    if(rating < 1 || rating > $stars.length) return false;

					    $stars.eq(rating-1).addClass('selected')
					        .prevAll().addClass('highlighted');
					    return true;
					}

					$('.rating').each(function(){
					    var $this = $(this);
					    ShowRating($this, $this.data('rating'));
					}).bind({
					    mouseleave: function(){
					        var $this = $(this);
					        ShowRating($this, $this.data('rating'));
					    }
					}).find('div').bind({
					    mouseenter: function(){
					        var $this = $(this);
					        ShowRating($this.parent(), $this.index() + 1);
					    },
					    click: function(){
					        var $this = $(this);
					        var $parent = $this.parent();
					        var idx = $this.index() + 1;
					        if($parent.data('rating') == idx){
					            // Remove rating
					            ShowRating($parent, 0);
					            $parent.data('rating', 0);
					        } else {
					            // Set rating
					            ShowRating($parent, idx);
					            $parent.data('rating', idx);
					        }
					        
					        $('#info').text($parent.data('rating'));
					    }
					});
					$('.rating').click(function(){
						var count = $('#info').text();
						$('.count-rating').val(count);
				});
				
				$(document).ready(function(){
				    $('.btn_post_cmt').attr('disabled',true);

				    $('#vendor_comment').keyup(function(){
				        if($(this).val().length !=0){
				            $('.btn_post_cmt').attr('disabled', false);
				        }
				        else
				        {
				            $('.btn_post_cmt').attr('disabled', true);        
				        }
				    })
				});

				function post_comment (id_user) {
					var cmt = $("#vendor_comment").val(); 
					if(cmt == ""){
						return false;
					}
					else
					{
						
						$("#vendor_comment").val("");

						$.ajax({
							type: "post",
							url: "{{URL::route('vendor_comment', array('id_vendor'=>$vendor['id']))}}",
							data: {
								id_user:id_user,
								cmt:cmt
							},
							success: function(data){
								$('#your_cmt').replaceWith(data);
							}

						});
					}
				}
				var currentImage;
				var currentIndex = -1;
				var interval;
				function showImage(index){
					if(index < $('#bigPic img').length){
						var indexImage = $('#bigPic img')[index]
						if(currentImage){   
							if(currentImage != indexImage ){
								$(currentImage).css('z-index',2);
									clearTimeout(myTimer);
								$(currentImage).fadeIn(250, function() 
								{
									myTimer = setTimeout("showNext()", 3000);
								$(this).css({'display':'none','z-index':1})
							 	});
							}
				  		}
						$(indexImage).css({'display':'block', 'opacity':1});
						currentImage = indexImage;
						currentIndex = index;
						$('#thumbs li').removeClass('active');
						$($('#thumbs li')[index]).addClass('active');
					}
				}
				function showNext(){
					var len = $('#bigPic img').length;
					var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
				 	showImage(next);
				}
				var myTimer;
				$(document).ready(function() {
					myTimer = setTimeout("showNext()", 3000);
					showNext(); //Load first image
					$('#thumbs li').bind('click',function(e){
						var count = $(this).attr('rel');
						showImage(parseInt(count)-1);
					});
				});
				$(function() {
                  $('#input-date').datetimepicker({
                    format: 'd-m-Y',
                    timepicker:false
                  });
                  
				  
                });
                $("#selection-contact").change(function(){
				      var index = $(this).children(":selected").index();
				      $("#options").children().hide().eq(index).show();
				});
				$(".outside-link").click(function() {
				    $(".nav li").removeClass("active");
				    $($(this).attr("data-toggle-tab")).parent("li").addClass("active");
				});
			   $(".image-outside-link").click(function() {
				    $(".nav li").removeClass("active");
				    $($(this).attr("data-toggle-tab")).parent("li").addClass("active");
				});
			    $('#send-review').validate({
			    	ignore: "",
			        rules:{
			            count_rating:{
			              required:true
			            },
			            text_review:{
			            	required:true
			            }
			        },
			        messages:{
			            count_rating:{
			             required:"Bạn phải đánh giá kèm nhận xét"
			            },
			            text_review:{
			            	required:"Bạn chưa nhận xét"
			            }
			        }
			      })
			</script>
		</div>
@endsection
