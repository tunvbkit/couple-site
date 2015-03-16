@extends('main')
@section('title')
So sánh dịch vụ
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
			          	<li role="presentation" class="dropdown-header"><span style="font-weight: bold;">Nghi lễ</span>
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
			          	<li role="presentation" class="dropdown-header"><span style="font-weight: bold;">Đãi tiệc</span>
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

<div class="row" style="margin-bottom:20px;">
	<div class="col-xs-1"></div>
	<div class="col-xs-10">
		<div class="row">
			<div class="col-xs-6">
				<h3>So sánh dịch vụ nhà cung cấp</h3>
			</div>
			
		</div>
	</div>
	<div class="col-xs-1"></div>
</div>
<div class="row">
	<div class="col-xs-1"></div>
	<div class="col-xs-10"  id="compare_main">
		<div class="compare_title">
			<div class="compare_tr1">
				
			</div>
			<div class="compare_tr2">
				<p class="compare_tr_content"><b>Địa chỉ</b></p>
			</div>
			<div class="compare_tr3">
				<p class="compare_tr_content"><b>Số điện thoại</b></p>
			</div>
			<div class="compare_tr4">
				<p class="compare_tr_content"><b> Đánh giá</b></p>
			</div>
			<div class="compare_tr5">
				<p class="compare_tr_content"><b> Gói dịch vụ</b></p>
			</div>
			<div class="compare_tr6">
				<p class="compare_tr_content"><b> Nhà cung cấp</b></p>
			</div>
		</div>

		<!-- container data vendor -->
		<?php $i=0; ?>
		@if( !empty($compares) )
		<?php $arCompares = array_unique($compares); ?>
			@foreach ($arCompares as $key=>$compare)
				@foreach (Vendor::get() as $vendor)
					@if($vendor->id==$compare)
						<?php $i++; ?>
			
							<div class="compare_vendor_show{{$i}}" id="del_compare{{$key}}">
								<div class="compare_vendor_img-name">
									<div class="btn_del_vendor_compare">
										<button class="btn btn-default" id="btn_del_compare{{$key}}">
											<img src="{{Asset('icon/delete.png')}}" class="img-icon">
										</button>
										<script type="text/javascript">
											$('#btn_del_compare{{$key}}').click(function(){

												$.ajax({
													type: "post",
													url: "{{URL::route('remove_vendor_compare', array($key))}}"

												});

												$('#del_compare{{$key}}').remove();
											});
										</script>
									</div>
									<div class="compare_add_vendor_show">
										<a href="{{URL::route('vendor',array(Category::where('id',Vendor::where('id',$vendor->id)->get()->first()->category)->get()->first()->slug,$vendor->slug))}}">
											
											@if(empty($vendor->avatar))
				                        	<img class="img-responsive img-thumbnail" src="{{Asset('../images/avatar/default.jpg')}}">
				                        	@else
				                        	<img class="img-responsive img-thumbnail" src="{{Asset("../{$vendor->avatar}")}}">
				                        	@endif()

										</a>
										<a href="{{URL::route('vendor',array(Category::where('id',Vendor::where('id',$vendor->id)->get()->first()->category)->get()->first()->slug,$vendor->slug))}}">{{$vendor->name}}</a>
									</div>
								</div>
								<div class="compare_tr22">
									{{$vendor->address}}
								</div>
								<div class="compare_tr32">
									{{$vendor->phone}}
								</div>
								<div class="compare_tr42">
									@if(Rating::where('vendor',$vendor->id)->get()->count()>0)
				                                	@if(round(Rating::where('vendor',$vendor->id)->avg('rating'),1)==0)
							  							<img src="{{Asset('images/star/0.jpg')}}" class="img-responsive agv-rating " alt="">
							  						@else
								  						@if(round(Rating::where('vendor',$vendor->id)->avg('rating'),1) > 0 & round(Rating::where('vendor',$vendor->id)->avg('rating'),1) < 1)
								  							<img src="{{Asset('images/star/0.5.jpg')}}" class="img-responsive agv-rating" alt="">
								  						@endif
								  						@if(round(Rating::where('vendor',$vendor->id)->avg('rating'),1) == 1)
								  							<img src="{{Asset('images/star/1.jpg')}}" class="img-responsive agv-rating" alt="">
								  						@endif
								  						@if(round(Rating::where('vendor',$vendor->id)->avg('rating'),1) > 1 & round(Rating::where('vendor',$vendor->id)->avg('rating'),1) < 2)
								  							<img src="{{Asset('images/star/1.5.jpg')}}" class="img-responsive agv-rating" alt="">
								  						@endif
								  						@if(round(Rating::where('vendor',$vendor->id)->avg('rating'),1) == 2)
								  							<img src="{{Asset('images/star/2.jpg')}}" class="img-responsive agv-rating" alt="">
								  						@endif
								  						@if(round(Rating::where('vendor',$vendor->id)->avg('rating'),1) > 2 & round(Rating::where('vendor',$vendor->id)->avg('rating'),1) < 3)
								  							<img src="{{Asset('images/star/2.5.jpg')}}" class="img-responsive agv-rating" alt="">
								  						@endif
								  						@if(round(Rating::where('vendor',$vendor->id)->avg('rating'),1) == 3)
								  							<img src="{{Asset('images/star/3.jpg')}}" class="img-responsive agv-rating" alt="">
								  						@endif
								  						@if(round(Rating::where('vendor',$vendor->id)->avg('rating'),1) > 3 & round(Rating::where('vendor',$vendor->id)->avg('rating'),1) < 4)
								  							<img src="{{Asset('images/star/3.5.jpg')}}" class="img-responsive agv-rating" alt="">
								  						@endif
								  						@if(round(Rating::where('vendor',$vendor->id)->avg('rating'),1) == 4)
								  							<img src="{{Asset('images/star/4.jpg')}}" class="img-responsive agv-rating" alt="">
								  						@endif
								  						@if(round(Rating::where('vendor',$vendor->id)->avg('rating'),1) > 4 & round(Rating::where('vendor',$vendor->id)->avg('rating'),1) < 5)
								  							<img src="{{Asset('images/star/4.5.jpg')}}" class="img-responsive agv-rating" alt="">
								  						@endif
								  						@if(round(Rating::where('vendor',$vendor->id)->avg('rating'),1) == 5)
								  							<img src="{{Asset('images/star/5.jpg')}}" class="img-responsive agv-rating" alt="">
								  						@endif
							  						@endif
				                                	@else
				                                		<img src="{{Asset('images/star/0.jpg')}}" class="img-responsive agv-rating " alt="">
				                                @endif
				                      
								</div>
								<div class="compare_tr52">
									{{Vendor::find($vendor->id)->category()->get()->first()->name}}
								</div>
								<div class="compare_tr62">
									<span style="color: #ff924c"><i class="glyphicon glyphicon-ok"></i></span>
									<div><button type="button" class="btn btn-skin btn-theme btn-lg"><i class="glyphicon glyphicon-heart-empty"></i> Lưu lại</button></div>
								</div>
							</div>
					@endif
				@endforeach
			@endforeach
		@endif
		<!-- vendor 1 -->
		<div class="compare_vendor" id="del_compare">
				<div class="compare_vendor_img-name">
					<div class="btn_del_vendor_compare">
						<button class="btn btn-default" id="btn_del_compare">
							<img src="{{Asset('icon/delete.png')}}" class="img-icon">
						</button>
					</div>
					<div class="compare_add_vendor">
						<a href="javascript:;" onclick="back_to_page();" ><i class="glyphicon glyphicon-plus"></i></a>
					</div>
				</div>
				<div class="compare_tr22"></div>
				<div class="compare_tr32"></div>
				<div class="compare_tr42"></div>
				<div class="compare_tr52"></div>
				<div class="compare_tr62"></div>
		</div>

		<!-- vendor 2 -->
		<div class="compare_vendor" id="del_compare">
				<div class="compare_vendor_img-name">
					<div class="btn_del_vendor_compare">
						<button class="btn btn-default" id="btn_del_compare">
							<img src="{{Asset('icon/delete.png')}}" class="img-icon">
						</button>
					</div>
					<div class="compare_add_vendor">
						<a href="javascript:;" onclick="back_to_page();" ><i class="glyphicon glyphicon-plus"></i></a>
					</div>
					
				</div>
				<div class="compare_tr22"></div>
				<div class="compare_tr32"></div>
				<div class="compare_tr42"></div>
				<div class="compare_tr52"></div>
				<div class="compare_tr62"></div>
		</div>

		<!-- vendor 3 -->
		<div class="compare_vendor" id="del_compare">
				<div class="compare_vendor_img-name">
					<div class="btn_del_vendor_compare">
						<button class="btn btn-default" id="btn_del_compare">
							<img src="{{Asset('icon/delete.png')}}" class="img-icon">
						</button>
					</div>
					<div class="compare_add_vendor">
						<a href="javascript:;" onclick="back_to_page();" ><i class="glyphicon glyphicon-plus"></i></a>
					</div>
					
				</div>
				<div class="compare_tr22"></div>
				<div class="compare_tr32"></div>
				<div class="compare_tr42"></div>
				<div class="compare_tr52"></div>
				<div class="compare_tr62"></div>
		</div>

		<!-- vendor 4 -->
		<div class="compare_vendor" id="del_compare">
				<div class="compare_vendor_img-name">
					<div class="btn_del_vendor_compare">
						<button class="btn btn-default" id="btn_del_compare">
							<img src="{{Asset('icon/delete.png')}}" class="img-icon">
						</button>
					</div>
					<div class="compare_add_vendor">
						<a href="javascript:;" onclick="back_to_page();" ><i class="glyphicon glyphicon-plus"></i></a>
					</div>
					
				</div>
				<div class="compare_tr22"></div>
				<div class="compare_tr32"></div>
				<div class="compare_tr42"></div>
				<div class="compare_tr52"></div>
				<div class="compare_tr62"></div>
		</div>

		<!-- vendor 5 -->
		<div class="compare_vendor" id="del_compare">
				<div class="compare_vendor_img-name">
					<div class="btn_del_vendor_compare">
						<button class="btn btn-default" id="btn_del_compare">
							<img src="{{Asset('icon/delete.png')}}" class="img-icon">
						</button>
					</div>
					<div class="compare_add_vendor">
						<a href="javascript:;" onclick="back_to_page();"><i class="glyphicon glyphicon-plus"></i></a>
					</div>
					
				</div>
				<div class="compare_tr22"></div>
				<div class="compare_tr32"></div>
				<div class="compare_tr42"></div>
				<div class="compare_tr52"></div>
				<div class="compare_tr62"></div>
		</div>

		<script type="text/javascript" >
			// ------- back to page list-vendor
			function back_to_page(){
				location.replace(document.referrer);
			}
		</script>

	</div>
	<div class="col-xs-1"></div>
</div>
@endsection