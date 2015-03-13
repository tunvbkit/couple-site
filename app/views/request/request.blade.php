@extends('business.main-dashboard')
@section('title')
  Liên lạc
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
        <li class="active"><a href="{{URL::route('b_dashboard')}}">
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
            <ul class="dropdown-menu menu-dashboard" role="menu">
              <li><a href="{{URL::route('business.index')}}"><span class="fa fa-wrench"></span>Hồ sơ</a></li>
              <li><a href="{{URL::route('b_inbox')}}"><span class="fa fa-envelope-o"></span>Hộp thư</a></li>
              <li><a href="{{URL::route('b_comment')}}"><span class="fa fa-comment-o"></span>Nhận xét</a></li>
              <li><a href="{{URL::route('b_request')}}"><span class="fa fa-exchange "></span>Liên lạc</a></li>
              <li><a href="{{URL::route('b_logout')}}"><span class="fa fa-sign-out"></span>Thoát</a></li>
            </ul>
        </li>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@endsection()
@section('content')
	<div class="container inbox">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 head-inbox">
			<h4>Liên lạc</h4>
		</div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
      <div class="table-responsive">
        <table class="table table-hover text-center tab-request">
          <thead>
            <tr>
              <th class="text-center"><input type="checkbox"></th>
              <th class="text-center">Người gửi</th>
              <th class="text-center">Ngày cưới</th>
              <th class="text-center">Email</th>
              <th class="text-center">Điện thoại</th>
              <th class="text-center">Yêu cầu</th>
              <th class="text-center">Thời gian</th>
            </tr>
          </thead>
          <tbody>
            @if(!empty($requests))
              @foreach($requests as $request)
                @if($request->active == 0)
                  <tr style="font-weight:bold;">
                    <td><input type="checkbox"></td>
                    <td>{{$request->user}}</td>
                    <td>{{$request->weddingdate}}</td>
                    <td>{{$request->email}}</td>
                    <td>{{$request->phone}}</td>
                    <td>
                      <a onclick="postActiveContact({{$request->id}})" href="javascript:void(0);">{{$request->title}}</a>
                    </td>
                    <td>{{$request->created_at}}</td>
                  </tr>
                @else
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>{{$request->user}}</td>
                    <td>{{$request->weddingdate}}</td>
                    <td>{{$request->email}}</td>
                    <td>{{$request->phone}}</td>
                    <td>
                      <a onclick="postActiveContact({{$request->id}})" href="javascript:void(0);">{{$request->title}}</a>
                    </td>
                    <td>{{$request->created_at}}</td>
                  </tr>
                @endif()
              
              @endforeach
              @endif
          </tbody>
        </table>
      </div>
      <div class="text-center">{{$requests->links()}}</div>
    </div>
	</div>

  <script type="text/javascript">
      function postActiveContact(id_request){
        var baseUrl = "<?php echo URL::to('/'); ?>";
        $.ajax({
            type:"post",
            data:{id_request:id_request},
            url:"{{URL::route('post_active_contact')}}",
            success:function(){
              window.location.href = baseUrl+ "/business/detail-request/"+id_request;
            }
            }); 
      }
    </script>

@endsection()
@stop()