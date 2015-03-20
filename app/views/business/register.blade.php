@extends('business.main')
@section('title')
	Đăng kí | thuna.vn
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
        <li><a href="#">
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
        <li class="active">
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
  <div class="f-register">
    <form action="{{URL::route('post_vendor')}}" method="POST" role="form" name="form_register" id="form_register">

      <div class="form-group container">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <label for="">Email</label>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
      </div>

      <div class="form-group container">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <label for="">Mật khẩu</label>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <input type="password" class="form-control" name="password" id="password" placeholder="*******">
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
      </div>

      <div class="form-group container">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <label for="">Xác nhận mật khẩu</label>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <input type="password" class="form-control" name="cf_password" id="cf_password" placeholder="*******">
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
      </div>

      <div class="form-group container">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <label for="">Tên công ty</label>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" name="company" id="company" >
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
      </div>

      <div class="form-group container">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" >
            <label for="">Lĩnh vực kinh doanh</label>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <select class="form-control" name="category" id="category">
              @foreach($categories as $category)
                <option value={{$category->id}}>{{$category->name}}</option>
              @endforeach()
            </select>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
      </div>

      <div class="form-group container">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <label for="">Địa điểm</label>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <select class="form-control" name="location" id="location">
              @foreach($location as $location)
                <option value={{$location->id}}>{{$location->name}}</option>
              @endforeach()
            </select>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
      </div>

      <div class="form-group container">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <label for="">Địa chỉ</label>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" name="address" id="address">
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
      </div>

      <div class="form-group container">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <label for="">Số điện thoại</label>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" name="phone" id="phone">
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
      </div>

      <div class="form-group container">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <label for="">Website</label>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" name="website" id="website" placeholder="ví dụ: thuna.vn">
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
      </div>

      <div class="container text-center policy">
           <input type="checkbox" name="agree" id="agree" value="">
           <span>Tôi đồng ý với <a href="">Điều khoản</a> và <a href="">Chính sách</a> sử dụng của thuna.vn</span>   
      </div>

      <div class="container text-center">
          <button type="submit" class="btn btn-primary">Tạo tài khoản</button>
      </div>
      
    </form>
  </div>

  <script type="text/javascript">
      $('#form_register').validate({
        rules:{
            company:{
              required:true,
              minlength:2
            },
            address:{
              required:true,
              minlength:5
            },
            phone:{
              required:true,
              minlength:10
            },
            email:{
              required:true,
              email:true,
              remote:{
                url:'{{URL::route('b_check_email_company')}}',
                type:'POST'
              }
            },
            password:{
              required:true
            },
            cf_password:{
              equalTo:'#password'
            }
        },
        messages:{
            company:{
              required:"Chưa điền tên công ty",
              minlength:"Yêu cầu nhập trên 2 kí tự"
            },
            address:{
              required:"Chưa điền địa chỉ công ty",
              minlength:"Yêu cầu trên 5 kí tự"
            },
            phone:{
              required:"Chưa điền số điện thoại",
              minlength:"Sai định dạng số điện thoại"
            },
            email:{
              required:"Chưa điền email",
              email:"Không đúng định dạng email",
              remote:"email này đã tồn tại"
            },
            password:{
              required:"Chưa điền mật khẩu"
            },
            cf_password:{
              equalTo:"Không trùng với mật khẩu bạn đã nhập"
            }
        }
      })
  </script>
@endsection()
@stop()