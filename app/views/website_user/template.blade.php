
@extends('main-dashboard')
@section('title')
Giao diện website
@endsection
@section('nav-dash')
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
			    	<li class="">
			      		<a href="{{URL::route('index')}}" title="Trang chủ">
			      			Trang chủ
	 		      		</a>
			      	</li>
			      	<li class="dropdown">
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
			      	<li class="active"><a href="{{URL::to('website')}}" title="Website cưới">
		        		Website cưới
			        	</a>
			        </li>
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
					      			<span class="fa fa-dollar"></span>     Quản lí ngân sách
			 		      		</a>
					      	</li>
				        </ul>
			    	</li>
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
@endsection
@section('total')
	@include('total')
@endsection

@section('content')
	
	<div class="row">
		<div class="col-xs-12">
			<h2 style="color:#E75292;">Chọn giao diện và cài đặt website của bạn</h2>
		</div>
	</div>

	<div class="row" style="margin-top: 20px;">
		
		@for($i=1; $i<=21; $i++)
			<div class="col-sm-6 col-lg-4 col-md-4 col-xs-12 text-center hover-theme" style="margin-bottom: 2%">
				<a href="javascript:void(0);" style="outline: none">
					<img style="width: 100%; height: 300px " src="{{Asset("images/website/tmp/{$i}.jpg")}}">
				</a>				
				<a href="{{URL::route('view_theme', array('id'=>"{$i}"))}}" target="_blank" class="btn btn-default btn-pre">Xem trước</a>		
				<a href="{{URL::route('header-website', array('id'=>"{$i}"))}}" class="btn btn-default btn-select">Chọn</a>				
			</div>
		@endfor
	
	</div>

@endsection