@extends('business.main-dashboard')
@section('title')
	Quản lí | thuna.vn
@endsection()
@section('nav-bar')
<nav class="navbar navbar-default">
  <div class="container-fluid edit-nav">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav nav-dashboard">
        <li class="active"><a href="#">
          <span class="fa fa-home"></span>Trang chủ</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          		<span class="fa fa-male"></span>
              Khách hàng</a>
          <ul class="dropdown-menu menu-dashboard" role="menu">
            <li><a href="#">
              <span class="fa fa-user"></span>
                Lượt truy cập</a></li>
            <li><a href="#">
              <span class="fa fa-comment-o"></span>
                Bình luận</a></li>
            <li><a href="#">
               <span class="fa fa-star"></span>
                Đánh giá</a>
            </li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
             <span class="fa fa-user"></span>
          		Đối tác
           </a>
          <ul class="dropdown-menu menu-dashboard" role="menu">
            <li><a href="#">
                <span class="fa fa-envelope-o"></span>
                Hộp thư</a></li>
            <li><a href="#"></a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          		  <span class="fa fa-bullhorn"></span>
              Quảng cáo
          <ul class="dropdown-menu menu-dashboard" role="menu">
            <li><a href="#">Hộp thư</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="fa fa-group"></span>
          		Mạng xã hội
          <ul class="dropdown-menu menu-dashboard" role="menu">
            <li><a href="#">Hộp thư</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <span class="fa fa-book"></span>
          		Kiến thức</a>
          <ul class="dropdown-menu menu-dashboard" role="menu">
            <li><a href="#">Hộp thư</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <span class="fa fa-cog"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{URL::route('business.index')}}">Cấu hình</a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="{{URL::route('b_logout')}}"><span class="fa fa-sign-out"></span>Logout</a></li>
            </ul>
        </li>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@endsection()
@section('content')
<div class="container content-dashboard">
    <h3>Dashboard</h3>
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 infor-vendor">
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 avatar-vendor">
           <a href="">
              <img  class="img-responsive" src="{{Asset("../{$vendor->avatar}")}}">             
           </a>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 p-infor-vendor">
          <p>Tên công ty : {{$vendor->name}}</p>
          <p>Lĩnh vực : {{Category::where('id',$vendor->category)->get()->first()->name}}</p>
          <p>Địa điểm : {{Location::where('id',$vendor->location)->get()->first()->name}}</p>
          <p>Số điện thoại : {{$vendor->phone}}</p>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 description-vendor">
        <h4 >Mô tả chi tiết</h4>
        <p>{{$vendor->about}}</p>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 description-vendor thongke" style="margin-bottom:3%;">
        <h4 >Bảng xếp hạng :</h4>
        <p>Tên vendor cao nhất :</p>
        <p>Xếp hạng :</p>
        <p>Lượt truy cập :</p>
        <p>Đánh giá :</p>
        <p>Lượt bình luận :</p>
        <div class="text-center btn-search">
          <a href="" class="btn btn-responsive">Xem thêm các vendor khác</a>
        </div>

      </div>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 infor-count">      
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center top-h4">
              <h4>Hoàn thành website:</h4>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 thongke">
              <p>Số % hoàn thành :</p>
              <p>Hoàn thành thông tin :</p>
          </div>
      </div>
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 infor-count">         
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center top-h4">
            <h4>Thông tin vendor</h4>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 thongke">
            <p>Lượt truy cập :</p>
           <p>Đánh giá: 
              @if(!empty( BusinessController::getRating($vendor->id)->rating ))
              {{BusinessController::getRating($vendor->id)->rating}}
              @endif
            </p>
            <p>Xếp hạng :</p>
            <p>Lượt bình luận :</p>
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 infor-count" style="margin-bottom:3%;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center top-h4">
             <h4>Hộp thư :</h4>
        </div>   
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 thongke">
              <p>Hộp thư đến :</p>
         </div>    
         
      </div>

    </div>

</div>

@endsection()
@stop()