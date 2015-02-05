@extends('business.main')
@section('title')
	Đăng nhập | thuna.vn
@endsection()
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
            <li><a href="#" >               
                Trang chủ
              </a>
            </li>
            <li><a href="#" class="dropdown-toggle main_menu" data-toggle="dropdown">               
                Site
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu oneUl" role="menu">
                  <li role="presentation" class="dropdown-header">
                    <div class="row">
                      <div class="col-xs-6">
                        <ul class="list-unstyled">
                          <li><a href="">Thông tin</a></li>
                          <li><a href="">Đánh giá</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-6">
                        <ul class="list-unstyled">
                          <li><a href="">Truy cập</a></li>
                          <li><a href="">Phản hồi</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
              </ul>
            </li>
            <li><a href="#" class="dropdown-toggle main_menu" data-toggle="dropdown" >               
                Quảng cáo
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu oneUl" role="menu">
                  <li role="presentation" class="dropdown-header"><span>Mạng thuna.vn</span>
                    <div class="row">
                      <div class="col-xs-6">
                        <ul class="list-unstyled">
                          <li><a href="">website cưới</a></li>
                          <li><a href="">Quản lí file</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-6">
                        <ul class="list-unstyled">
                          <li><a href="">Theo dõi</a></li>
                          <li><a href="">Hồ sơ</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li role="presentation" class="dropdown-header"><span>Marketing</span>
                    <div class="row">
                      <div class="col-xs-6">
                        <ul class="list-unstyled">
                          <li><a href="">Truyền thông</a></li>
                          <li><a href="">Công cụ</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-6">
                        <ul class="list-unstyled">
                          <li><a href="">Facebook</a></li>                         
                          <li><a href="">Video</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
              </ul>
            </li>
            <li><a href="#" class="dropdown-toggle main_menu" data-toggle="dropdown">               
                Khách hàng
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu oneUl" role="menu">
                  <li role="presentation" class="dropdown-header">
                    <div class="row">
                      <div class="col-xs-6">
                        <ul class="list-unstyled">
                          <li><a href="">Liên lạc</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-6">
                        <ul class="list-unstyled">
                          <li><a href="">Giao dịch</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
              </ul>
            </li>
            <li><a href="" >
               Kiến thức
              </a>
            </li>
            <li class="active"><a href="{{URL::route('b_login')}}">
               Đăng nhập
              </a>
            </li>
            <li><a href="{{URL::route('b_register')}}" >
               Đăng kí
              </a>
            </li>
        
        </ul>
      </div>
  </div><!--/.nav-->
</div><!--/.bg-menu-top-->
<!-- <div class="row lr-bottom-menu"></div> -->
@endsection()
@section('content')
    <div class="row" >
      <div class="col-xs-8 col-md-offset-2">
        @if(isset($messages)) <p class="text-center alert alert-danger">{{$messages}}</p>
        @endif  

          @if(isset($msg)) <p class="alert text-center alert-success">{{$msg}}</p>
        @endif  
      </div>
    </div>
    
    <div class="">
        <form action="{{URL::route('b_post_login')}}" method="POST" role="form" id="f_login">
          <legend>Đăng nhập hệ thống</legend>

          <div class="form-group">
            <label for="">Email đăng nhập</label>
            <input type="text" class="form-control" name="name-login" id="name-login">
          </div>

          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="*******">
          </div>

          <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </div>
@endsection()
@stop()