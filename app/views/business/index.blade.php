@extends('business.main')
@section('title')
	Quản lí | thuna.vn
@endsection()
@section('nav-bar')
	<!-- Navigation -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
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
      <ul class="nav navbar-nav nav-index">
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
        <li>
          <a href="{{URL::route('b_login')}}" >
               Đăng nhập
              </a>
        </li>
        <li>
          <a href="{{URL::route('b_register')}}">
           Đăng kí
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@endsection()
@section('content')
	<div class="row content-index">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 infor">
      <h3>CHÀO MỪNG BẠN ĐẾN THUNA.VN</h3>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
        <p>Khám phá các chức năng và lợi ích của thuna có thể giúp bạn gặp nhiều khách hàng hơn,mang lại hạnh phúc cho mọi người</p>
      </div>      
    </div>
    <div class="container introduce-index">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 contact-index">
        <div>
          <h3 style="margin-bottom:20px; margin-top:50px;">Liên lạc</h3>
          <p style="margin-bottom:30px; margin-top:30px;">Cùng trao đổi! Chúng tôi đang ở đây để trả lời bất kì câu hỏi nào mà bạn yêu cầu, chỉ cần gửi mail cho chúng tôi, chúng tôi sẽ trả lời ngay khi có thể</p>
        </div>
        <div class="btn-go">
          <a class="btn" href="">Đến diễn đàn</a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 demo">
        <div>
          <h3 style="margin-bottom:20px; margin-top:50px;">Xem demo</h3>
          <p style="margin-bottom:30px; margin-top:30px;">Khám phá cách thuna.vn có thể giúp doanh nghiệp của bạn quảng cáo tại địa phương và các giải pháp quản lí khách hàng một cách hiệu quả nhất</p>
        </div>
        <div class="btn-go">
          <a class="btn" href="">Tạo demo</a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 acount">
        <div>
          <h3 style="margin-bottom:20px; margin-top:50px;">Tạo tài khoản</h3>
          <p style="margin-bottom:30px; margin-top:30px;">Xây dựng quản lí kinh doanh trên thuna.vn mỗi ngày! Thêm hình ảnh, sự kiện, thu thập ý kiến người dùng và tạo ra cửa hàng của riêng bạn</p>
        </div>
        <div class="btn-go">
          <a class="btn" href="">Đăng kí ngay</a>
        </div>
      </div>
    </div>

	</div>
@endsection()
@stop()