@extends('business.main-dashboard')
@section('title')
  Profile|thuna.vn
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
<div class="container content-business">
  <ul class="nav nav-tabs nav-justified b-nav-edit" role="tablist">
    <li role="presentation" class="active"><a href="#tab1" data-toggle="tab" role="tab">Thông tin</a></li>
    <li role="presentation"><a href="#tab2" data-toggle="tab" role="tab">Ảnh</a></li>
    <li role="presentation"><a href="#tab3" data-toggle="tab" role="tab">Video</a></li>
    <li role="presentation"><a href="#tab4" data-toggle="tab" role="tab">Map</a></li>
  </ul>
  @foreach($vendor as $vendor)
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 tab-content">
    <div role="tabpanel" class="tab-pane active" id="tab1">
      <div class="text-center b-success">
        @if(!empty($msg))
          <p>{{$msg}}</p>
        @endif
      </div>
      <form action="{{URL::route('b_update_profile')}}" method="POST" role="form" name="form_edit" id="form_edit">
        <div class="form-group container">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <label for="">Tên doanh nghiệp</label>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
            <input type="text" class="form-control" name="company" id="company" value="{{$vendor->name}}">
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
                <option value={{$category->id}}  @if($category->id == $vendor->category)
                    {{'selected'}}
                    @endif>
                    {{$category->name}}
                </option>
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
                  <option value={{$location->id}} @if($location->id == $vendor->location)
                   {{'selected'}}
                    @endif>
                    {{$location->name}}</option>
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
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
              <input type="text" class="form-control" name="address" id="address" value="{{$vendor->address}}">
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
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
              <input type="text" class="form-control" name="phone" id="phone" value="{{$vendor->phone}}">
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
              <input type="text" class="form-control" name="website" id="website" placeholder="ví dụ: thuna.vn" value="{{$vendor->website}}">
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              
            </div>
        </div>
        <div class="form-group container">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
              <label for="">Mô tả</label>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <textarea type="text" class="form-control" name="about" id="about" placeholder="Giới thiệu về doanh nghiệp">{{$vendor->about}}</textarea> 
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              
            </div>
        </div>
        
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
        </div>
      </form>
    </div>

    <div role="tabpanel" class="tab-pane" id="tab2">
      <p>fdjkfdjfkdjf</p>
    </div>
    
  </div>
  @endforeach()
</div>

<script type="text/javascript">
      $('#form_edit').validate({
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
            }
        }
      })
  </script>

@endsection()
@stop()