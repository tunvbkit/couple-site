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
      <div id="tab2">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h4>Ảnh đại diện</h4>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 photo-vendor">
            <a>
              @if(empty($vendor->avatar))
              <img  class="img-responsive img-thumbnail" src="{{Asset('../images/avatar/default.jpg')}}">
              @else
              <img  class="img-responsive img-thumbnail" src="{{Asset("../{$vendor->avatar}")}}">
              @endif  
           </a>
           <button class="btn btn-responsive btn-primary" data-backdrop="static" data-toggle="modal" data-target='#b-modal-avatar'>Đổi ảnh</button>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h4>Album ảnh</h4>
          <div class="grid-slide">
          @if(!empty( BusinessController::getSlide($vendor->id) ))
            @foreach(BusinessController::getSlide($vendor->id) as $photo)
              <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 one-slide">
                  <img  class="img-responsive img-thumbnail" src="{{Asset("../{$photo->bigpic}")}}">
              </div>
             @endforeach
           @else
             <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
                <img  class="img-responsive img-thumbnail" src="{{Asset("../images/avatar/default.jpg")}}">
              </div>
           @endif
           </div>
           <div class="text-center btn-upload-slide">
              <button class="btn btn-responsive btn-primary" data-backdrop="static" data-toggle="modal" data-target='#b-modal-slide'>Tải ảnh lên</button>
           </div>
        </div>
      </div>
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

      function bLoadAvatar(){
        $.ajax({
        type:"post",
        url:"{{URL::route('b_load_avatar')}}",
        success:function(data){
          $('.dz-preview').remove();
          $('.dz-message').css('opacity',1);
          $('.photo-vendor a').html('<img class="img-responsive img-thumbnail" src="'+data.image+'">');
          }
        }); 
      }
      function bLoadSlide(){
        $.ajax({
        type:"post",
        url:"{{URL::route('b_load_slide')}}",
        success:function(data){
          $('.dz-preview').remove();
          $('.dz-message').css('opacity',1);
          $('.one-slide').remove();
          $('.grid-slide').append(data);
          }
        }); 
      }
  </script>

<!-- upload ajax avatar -->
<div class="modal fade " id="b-modal-avatar">
  <div class="modal-dialog modal-md b-modal-avatar">
    <div class="modal-content ">
      <div class="modal-header">
        <button type="button" onclick="bLoadAvatar()" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Thay đổi ảnh đại diện</h4>
      </div>
      <div class="modal-body">
        
        <form  onclick="opacity()" action="{{URL::route('b_upload_avatar')}}" class="dropzone dz-clickable" id="b-upload-avatar" method="POST">
        </form>
          
      </div>
      <div class="modal-footer" style="text-align:center;">
            <button onclick="bLoadAvatar()" type="button" data-dismiss="modal" class="btn btn-primary" >Đóng</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- upload ajax avatar slide-->
<div class="modal fade " id="b-modal-slide">
  <div class="modal-dialog modal-md b-modal-avatar">
    <div class="modal-content ">
      <div class="modal-header">
        <button type="button" onclick="bLoadSlide()" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Tải album ảnh</h4>
      </div>
      <div class="modal-body">
        
        <form  onclick="opacity()" action="{{URL::route('b_upload_slide')}}" class="dropzone dz-clickable" id="b-upload-avatar" method="POST">
        </form>
          
      </div>
      <div class="modal-footer" style="text-align:center;">
            <button onclick="bLoadSlide()" type="button" data-dismiss="modal" class="btn btn-primary" >Đóng</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection()
@stop()