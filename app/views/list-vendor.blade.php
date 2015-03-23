@extends('main')
@section('title')
{{$slug_cate}}
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
					      			<span class="fa fa-file-text-o"></span>   Danh sách công việc
			 		      		</a>
					      	</li>
					      	<li><a href="{{URL::route('guest-list')}}" title="Danh sách khác mời">
					      			<span class="fa fa-group"></span>Danh sách khách mời
			 		      		</a>
					      	</li>
					      	<li><a href="{{URL::route('budget')}}" title="Quăn lí ngân sách">
					      			<span class="fa fa-dollar"></span>      Quản lí ngân sách
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
			          	<li role="presentation" class="dropdown-header"><span style="font-weight:bold;">Nghi lễ</span>
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
			          	<li role="presentation" class="dropdown-header"><span style="font-weight:bold;" >Đãi tiệc</span>
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


<div id='container'>
	<div class="panel panel-default">
	  	<div class="panel-body">
		  	<div class="row">
		  		<div class="col-md-1"></div>
		  		<div class="col-md-6">
		  			Kết quả tìm kiếm: 
		  			<span style="color: #e92d91" >
		  				@if( Input::get('name')==true )
			   				{{Input::get('name')}}
			   				<input id="nameGet" type="hidden" value="{{Input::get('name')}}" />
			   			@else
			   				Từ tìm kiếm
			   			@endif
			   		</span> 
			   		- Địa điểm: 
			   		<span style="color: #e92d91" >
			   			
			   			@if( Input::get('location')==true )
			   				{{Input::get('location')}}
			   				<input id="locationGet" type="hidden" value="{{Input::get('location')}}" />
			   			@else
			   				@if( Session::has('location') )
			   					{{Location::where("id",Session::get('location'))->get()->first()->name}}
			   					<input id="locationGet" type="hidden" value="{{Location::where("id",Session::get('location'))->get()->first()->name}}" />
			   				@else
			   					{{VendorController::location_last()->name}}
			   					<input id="locationGet" type="hidden" value="{{VendorController::location_last()->name}}" />
			   				@endif
			   			@endif

			   		</span> 
			   		- Danh mục: 
			   		<span style="color: #e92d91" >

			   			@if( Input::get('category')==true )
			   				{{Input::get('category')}}
			   				<input id="categoryGet" type="hidden" value="{{Input::get('category')}}" />
			   			@else
			   				@if($category_id==true )
				   				{{Category::where("id",$category_id)->get()->first()->name}}
				   				<input id="categoryGet" type="hidden" value="{{Category::where("id",$category_id)->get()->first()->name}}" />
				   			@else
				   				Chưa chọn
				   			@endif
			   			@endif

			   		</span>
		  		</div>
		  		<div class="col-md-5">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
					  	<li class="active"><a href="#display-photo" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th-large"></span> DẠNG LƯỚI</a></li>
					  	<li><a href="#display-list" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-list"></span> DẠNG DANH SÁCH</a></li>
						<li><a href="javascript:;" id="submit_compare" ><span class="glyphicon glyphicon-retweet"></span> SO SÁNH</a></li>
					</ul>

		  		</div>
		  	</div>
	  	</div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-3">
            <p class="lead">Tìm kiếm nhà cung cấp</p>
            <div class="list-group">
            	<form id="form-search" class="wow bounceInUp form-homepage" action="{{Asset('list-vendor/search')}}" method="get">
	                <input type="text" name="name" class="form-control input-lg" value="{{Input::get('name')}}" placeholder="Từ tìm kiếm" />
	                <select name="location" class="form-control input-lg" onchange="get_location(this.value)" >
			    		@foreach(Location::get() as $location)

			    			@if(!Session::has('location'))
			    				<option value="{{$location->name}}" >{{$location->name}}</option>
				    		@else
				    			@if(Session::get('location')==$location->id)
				    				<option selected="selected" value="{{$location->name}}" >{{$location->name}}</option>
				    			@else
				    				<option value="{{$location->name}}" >{{$location->name}}</option>
				    			@endif
				    		@endif

				    	@endforeach
			    	</select>
			    	<?php
				    	if(Input::get('category')==true){
			   				$nameCategory = Input::get('category');
				    	}
			   			elseif( isset($category_id) ) {
				   			$nameCategory = Category::where("id",$category_id)->get()->first()->name;
			   			}
			   			else{
			   				$nameCategory="";
			   			}
				   		
			   		?>
	                <input id="searchTxt" name="category" type="text" data-toggle="dropdown" class="input-text form-control input-lg" placeholder="Danh mục" value="{{$nameCategory}}" readonly style="cursor:pointer;" >
			    	<!-- <input id="searchId" name="category_id" type="hidden"> -->
			    	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="margin-top: 0;padding-left: 15px;top: 187px;">
					    <li role="presentation">
					    	<div class="row" id="menu">
						    	<div class="col-xs-6">
						      		<ul class="list-unstyled">
							      		@foreach (Category::get() as $index => $category)
			    						@if($index<7)
						      			<li><span style="cursor:pointer;" >{{$category['name']}}</span>
						      			<!-- <input name="{{$category['name']}}" type="hidden" value="{{$category['id']}}"> -->
						      			</li>
						      			@endif
		      							@endforeach
						      		</ul>
						      	</div>
						      	<div class="col-xs-6">
						      		<ul class="list-unstyled">
						      			@foreach (Category::get() as $index=> $category)
		    							@if($index>=7)
						      			<li><span style="cursor:pointer;" >{{$category['name']}}</span>
						      			<!-- <input name="{{$category['name']}}" type="hidden" value="{{$category['id']}}"> -->
						      			</li>
						      			@endif
		      							@endforeach
						      		</ul>
						      	</div>
					      	</div>
					    </li>
					    <script>
						    $(document).ready(function(){
								$('#menu li span').click(function(){
								  var text= $(this).text();
								  var id= $(this).next().val();
									$( "#searchTxt" ).val(text);
									$( "#searchId").val(id);
								});
							});
						</script>	
				    </ul>
				    <button type="submit" class="btn btn-primary btn-lg btn-block" id="list-vendor-search">Tìm kiếm</button>			
		    	</form>
            </div>
        </div>

        <form id="form-compare" method="get" action="{{Asset('compare')}}">
        <!-- Tab panes -->
		<div class="tab-content">

			<!-- tab-photo -->
			<div class="col-md-7 tab-pane active" id="display-photo" class="margin-footer">
				<div class="row">
					@if( count($results)==0 )
						<h4>
							Không có kết quả nào được tìm thấy
						</h4>
					@else

						@foreach($results as $key=>$vendor)
							<div class="col-sm-4 col-lg-4 col-md-4">
			                    <div class="thumbnail">
			                        
			                        <!-- Vendor Images -->
			                        <a href="javascript:void(0);" onclick="countClick({{$vendor->id}},'{{VendorController::getCategorySlug( VendorController::getVendorCategory($vendor->id))}}','{{$vendor->slug}}')">
			                        	<!-- {{VendorController::getImagesVendor($vendor->photo)}} -->
			                        	<?php $avatar = Avatar::where('vendor',$vendor->id)->where('active',1)->get()->first(); ?>
			                        	@if(empty($avatar->avatar))
			                        	<img class="img-responsive img-thumbnail" src="{{Asset('../images/avatar/default.jpg')}}">
			                        	@else
			                        	<img class="img-responsive img-thumbnail" src="{{Asset("../{$avatar->avatar}")}}">
			                        	@endif()
			                        	
			                        </a>
			                        
			                        <!-- Location Name -->
			                        <div class="category-name">
			                        	{{VendorController::getLocationName($vendor->id)}}
			                        </div>
			                        
			                        <!-- Vendor Name -->
			                        <div class="caption">
			                            <div class="name">
				                            <a href="{{URL::route('vendor',array(VendorController::getCategorySlug( VendorController::getVendorCategory($vendor->id) ),$vendor->slug))}}">
				                            	{{$vendor->name}}
				                            </a>
			                            </div>
			                        </div>

			                        <!-- Vendor Ratings -->
			                        <div class="ratings">
			                            <span class="pull-right">{{VendorComment::where('vendor',$vendor->id)->get()->count()}} Nhận xét</span>
			   				            <p>
			                                @if(VendorComment::where('vendor',$vendor->id)->get()->count()>0)
			                                	@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1)==0)
						  							<img src="{{Asset('images/star/0.jpg')}}" class="img-responsive agv-rating " alt="">
						  						@else
							  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) > 0 & round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) < 1)
							  							<img src="{{Asset('images/star/0.5.jpg')}}" class="img-responsive agv-rating" alt="">
							  						@endif
							  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) == 1)
							  							<img src="{{Asset('images/star/1.jpg')}}" class="img-responsive agv-rating" alt="">
							  						@endif
							  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) > 1 & round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) < 2)
							  							<img src="{{Asset('images/star/1.5.jpg')}}" class="img-responsive agv-rating" alt="">
							  						@endif
							  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) == 2)
							  							<img src="{{Asset('images/star/2.jpg')}}" class="img-responsive agv-rating" alt="">
							  						@endif
							  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) > 2 & round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) < 3)
							  							<img src="{{Asset('images/star/2.5.jpg')}}" class="img-responsive agv-rating" alt="">
							  						@endif
							  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) == 3)
							  							<img src="{{Asset('images/star/3.jpg')}}" class="img-responsive agv-rating" alt="">
							  						@endif
							  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) > 3 & round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) < 4)
							  							<img src="{{Asset('images/star/3.5.jpg')}}" class="img-responsive agv-rating" alt="">
							  						@endif
							  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) == 4)
							  							<img src="{{Asset('images/star/4.jpg')}}" class="img-responsive agv-rating" alt="">
							  						@endif
							  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) > 4 & round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) < 5)
							  							<img src="{{Asset('images/star/4.5.jpg')}}" class="img-responsive agv-rating" alt="">
							  						@endif
							  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) == 5)
							  							<img src="{{Asset('images/star/5.jpg')}}" class="img-responsive agv-rating" alt="">
							  						@endif
						  						@endif
			                                	@else
			                                		<img src="{{Asset('images/star/0.jpg')}}" class="img-responsive agv-rating " alt="">
			                                @endif
			                            </p>
			                            
			                        </div>
			                        <!-- end ratings -->

			                        @if(!empty($compares))
										<input type="hidden" id="count" name="a" value="{{count($compares)}}">

											<!-- Checkbox Compare -->
					                        @if( in_array($vendor->id, $compares) )
						                        <div class="compare-photo">
				                        			<label>
												        <input checked type="checkbox" name="chk[]" value="{{$vendor->id}}" id="checkbox-photo{{$vendor->id}}" class='compare-title'> Compare
												        <input type="hidden" name="checkbox-{{$vendor->id}}" value="{{$vendor->id}}" >
											        </label>

											        <script type="text/javascript" src="{{Asset('assets/js/count-compare.js')}}"></script>
												        
												</div>
											@else
												<div class="compare-photo">
				                        			<label>
												        <input type="checkbox" name="chk[]" value="{{$vendor->id}}" id="checkbox-photo{{$vendor->id}}" class='compare-title'> Compare
												        <input type="hidden" name="checkbox-{{$vendor->id}}" value="" >
											        </label>
											        
											        <script type="text/javascript" src="{{Asset('assets/js/count-compare.js')}}"></script>
											        
												</div>
										    @endif
									@else
					        			<input type="hidden" id="count" name="a" value="0">

					        			<!-- Checkbox Compare -->
					        			<div class="compare-photo">
		                        			<label>
										        <input type="checkbox" name="chk[]" value="{{$vendor->id}}" id="checkbox-photo{{$vendor->id}}" class='compare-title'> Compare
										        <input type="hidden" name="checkbox-{{$vendor->id}}" value="" >
									        </label>
									        
									        <script type="text/javascript" src="{{Asset('assets/js/count-compare.js')}}"></script>
									        
										</div>
									@endif
									<!-- end check isset session compare -->

								    <script type="text/javascript">
										$('#checkbox-photo{{$vendor->id}}').on("click", function(){
											if( $(this).prop('checked') ){
												$('#checkbox-list{{$vendor->id}}').prop("checked", true);
											} else {
												$('#checkbox-list{{$vendor->id}}').prop("checked", false);
											};
										});
									</script>


			                    </div>
			                    <!-- end div thumbnail -->
			                </div>
			                <!-- end div col-sm-4 col-lg-4 col-md-4 -->

			            @endforeach
			            <!-- end foreach $result -->
					@endif
					<!-- end check empty rusult -->

				</div>
				<!-- end div row -->

			</div>
			<!-- end div tab-photo -->

			<!-- tab-list -->
			<div class="col-md-7 tab-pane " id="display-list">

			@if( count($results)==0 )
				<h4>
					Không có kết quả nào được tìm thấy
				</h4>
				@else

					@foreach($results as $key=>$vendor)
					<div class="row" id="show-list">
						<div class="col-sm-4 col-lg-4 col-md-4">

							<!-- Vendor Images -->
							<div class="list-avatar">
								<a href="javascript:void(0);" onclick="countClick({{$vendor->id}},'{{VendorController::getCategorySlug( VendorController::getVendorCategory($vendor->id))}}','{{$vendor->slug}}')">
									<!-- {{VendorController::getImagesVendor($vendor->photo)}} -->
									<?php $avatar = Avatar::where('vendor',$vendor->id)->where('active',1)->get()->first(); ?>
									@if(empty($avatar->avatar))
		                        	<img class="img-responsive img-thumbnail" src="{{Asset('../images/avatar/default.jpg')}}">
		                        	@else
		                        	<img class="img-responsive img-thumbnail" src="{{Asset("../{$avatar->avatar}")}}">
		                        	@endif()
								</a>
							</div>
							
							<!-- Location Name -->
	                        <div class="category-name">
	                        	{{VendorController::getLocationName($vendor->id)}}
	                        </div>

						</div>
						<!-- edn div col-sm-4 col-lg-4 col-md-4 -->
						
						<div class="col-sm-8 col-lg-8 col-md-8">

							<!-- Vendor About -->
							<div class="caption-list">
								<!-- Vendor Name -->
	                            <div class="name">
		                            <a href="{{URL::route('vendor',array(VendorController::getCategorySlug( VendorController::getVendorCategory($vendor->id) ),$vendor->slug))}}">
		                            	{{$vendor->name}}
		                            </a>
	                            </div>

	                            <!-- Vendor About -->
	                            <p>{{VendorController::getVendorAbout($vendor->about)}}</p>

	                            <!-- Vendor Website -->
	                            <div class="website">
	                            	{{$vendor->website}}
	                            </div>
	                        </div>

	                        <!-- Vendor Ratings -->
							<div class="ratings">
	                           	<span class="pull-right">{{VendorComment::where('vendor',$vendor->id)->get()->count()}} Nhận xét</span>
		   				            <p>
		                                @if(VendorComment::where('vendor',$vendor->id)->get()->count()>0)
		                                	@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1)==0)
					  							<img src="{{Asset('images/star/0.jpg')}}" class="img-responsive agv-rating " alt="">
					  						@else
						  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) > 0 & round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) < 1)
						  							<img src="{{Asset('images/star/0.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) == 1)
						  							<img src="{{Asset('images/star/1.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) > 1 & round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) < 2)
						  							<img src="{{Asset('images/star/1.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) == 2)
						  							<img src="{{Asset('images/star/2.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) > 2 & round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) < 3)
						  							<img src="{{Asset('images/star/2.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) == 3)
						  							<img src="{{Asset('images/star/3.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) > 3 & round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) < 4)
						  							<img src="{{Asset('images/star/3.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) == 4)
						  							<img src="{{Asset('images/star/4.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) > 4 & round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) < 5)
						  							<img src="{{Asset('images/star/4.5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
						  						@if(round(VendorComment::where('vendor',$vendor->id)->avg('rating'),1) == 5)
						  							<img src="{{Asset('images/star/5.jpg')}}" class="img-responsive agv-rating" alt="">
						  						@endif
					  						@endif
		                                	@else
		                                		<img src="{{Asset('images/star/0.jpg')}}" class="img-responsive agv-rating " alt="">
		                                @endif
		                            </p>
	                    	</div>

	                        @if(!empty($compares))
								<input type="hidden" id="count" name="a" value="{{count($compares)}}">
		                        <!-- case vendor had in session compare -->
			                    @if( in_array($vendor->id, $compares) )
								<div class="compare-list">
							        <label>
								        <input checked type="checkbox" name="" value="" id="checkbox-list{{$vendor->id}}" class='compare-title'> Compare
								        <input type="hidden" name="checkbox-{{$vendor->id}}" value="" >
							        </label>
							    </div>
							    @else
							    <div class="compare-list">
							    	<label>
								        <input type="checkbox" name="" value="" id="checkbox-list{{$vendor->id}}" class='compare-title'> Compare
								        <input type="hidden" name="checkbox-{{$vendor->id}}" value="{{$vendor->id}}" >
							        </label>
							    </div>
							    @endif
							@else
								<input type="hidden" id="count" name="a" value="0">
								<div class="compare-list">
							    	<label>
								        <input type="checkbox" name="" value="" id="checkbox-list{{$vendor->id}}" class='compare-title'> Compare
								        <input type="hidden" name="checkbox-{{$vendor->id}}" value="" >
							        </label>
							    </div>
							    <!-- end compare-list -->
							@endif
							<!-- check session compares -->
						    <script type="text/javascript">
							    $('#checkbox-list{{$vendor->id}}').on("click", function(){
							    	$('#checkbox-photo{{$vendor->id}}').click();
							    });
						    </script>

						</div>
						<!-- end div col-sm-8 col-lg-8 col-md-8 -->
					</div>
					<!-- end div show-list -->

					@endforeach
					<!-- end foreach results -->
				@endif
				<!-- end $results != 0 -->

			</div>
			<!-- end .tab-list -->
	</div>
	<!-- .tab-content -->

	</form>
	<!-- form compare -->
	<button id="vendor_view_more_photo">VIEW MORE PHOTO</button>
	<button id="vendor_view_more_list">VIEW MORE LIST</button>
	<div class="vendor-img-loading">
		<img src="{{Asset('icon/loading.gif')}}">
		<br />
		Đang tải dữ liệu...
	</div>
	

	<!-- modal note when check for checkbox in each vendor -->
	<button id="toida" style="display:none;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalToiDa" data-backdrop="static"></button>
		<div class="modal fade" id="ModalToiDa" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">Thông báo</h4>
		      </div>
		      <div class="modal-body">
		        <span style="color: #ff2642; font-size: 25px;">Bạn đã chọn đủ 5 dịch vụ để so sánh</span>
		      </div>
		      <div class="modal-footer">
		        <button type="submit" id="compare_submit_modal" class="btn btn-primary" data-dismiss="modal" data-backdrop="static">So sánh</button>
		        <script type="text/javascript">
		        	$('#compare_submit_modal').click(function(){
		        		$("#form-compare").submit();
		        	});
		        </script>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<button id="chuachon" style="display:none;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalChuaChon" data-backdrop="static"></button>
		<div class="modal fade" id="ModalChuaChon" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">Thông báo</h4>
		      </div>
		      <div class="modal-body">
		        <span style="color: #ff2642; font-size: 25px;">Bạn phải chọn ít nhất 1 dịch vụ</span>
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary" data-dismiss="modal">Đóng</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

</div>

<script type="text/javascript">

	function get_location(name){
		$.ajax({
			type: "post",
			url: "{{URL::route('get_location')}}",
			data:{name:name}
		});
	};


	// lazyload
	$(window).scroll(function(){
		var scrollOffset 	= 100;
	    if( ( ($(window).scrollTop()+scrollOffset)%scrollOffset)===0 ) {

	    	$('#vendor_view_more_photo').click();
	    	$('#vendor_view_more_list').click();

	    }else{
	        return false;
	    }
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		var i 				= 0;
		$('#vendor_view_more_photo').click(function(){
			i++;
			var iOffset 	= i;
			var offset 		= 6;

	        var name 		= $('#nameGet').val();
	        var location 	= $('#locationGet').val();
	        var category 	= $('#categoryGet').val();

	        $('.vendor-img-loading').show();

			$.ajax({
				type: "post",
				url: "{{URL::route('vendorLazyloadPhoto')}}",
				data: {
					iOffset:iOffset,
					offset:offset,
					location:location,
					category:category
				},
				success:function(data)
				{
					$('.vendor-img-loading').hide();
					if (data) {
						$('#display-photo').append(data);
					} else {
						return false;
					}
					
				}
			});
		});
		// end vendor_view_more_photo

		$('#vendor_view_more_list').click(function(){
			i++;
			var iOffset 	= i;
			var offset 		= 6;

	        var name 		= $('#nameGet').val();
	        var location 	= $('#locationGet').val();
	        var category 	= $('#categoryGet').val();

	        $('.vendor-img-loading').show();

			$.ajax({
				type: "post",
				url: "{{URL::route('vendorLazyloadList')}}",
				data: {
					iOffset:iOffset,
					offset:offset,
					location:location,
					category:category
				},
				success:function(data)
				{
					$('.vendor-img-loading').hide();
					if (data) {
						$('#display-list').append(data);
					} else {
						return false;
					}
					
				}
			});
		});
		// end vendor_view_more_list
	});
function countClick(id_vendor,category,name_vendor){
	 var baseUrl = "<?php echo URL::to('/'); ?>";
	$.ajax({
		type:"post",
		url:"{{URL::route('count_click')}}",
		data:{id_vendor:id_vendor},
		success:function(data){
			  window.location.href = baseUrl+ "/vendor/"+category+"/"+name_vendor;
		}
	});
}

</script>


@endsection
