@extends('business.main')
@section('title')
	Đăng kí | thuna.vn
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
            <li><a href="{{URL::route('b_login')}}" >
               Đăng nhập
              </a>
            </li>
            <li class="active"><a href="{{URL::route('b_register')}}" >
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
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
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