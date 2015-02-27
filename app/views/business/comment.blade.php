@extends('business.main-dashboard')
@section('title')
  Bình luận
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
              <li><a href="{{URL::route('b_comment')}}"><span class="fa fa-comment-o"></span>Bình luận</a></li>
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
			<h4>Bình luận</h4>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 note">
          <h4>Thống kê</h4>
          <p>Đã duyệt : {{$c_countActive}}</p>
          <p>Chưa duyệt : {{$c_countNoActive}}</p>
          <p>Tổng bình luận : {{$c_count}}</p>
      </div> 
      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
         <div class="table-responsive div-table">
          <table class="table table-hover text-center table-right">
            <thead>
              <tr>
                <th class="text-center"><input type="checkbox"></th>
                <th class="text-center">Người gửi</th>
                <th class="text-center">Nội dung</th>
                <th class="text-center">Thời gian</th>
              </tr>
            </thead>
            <tbody class="load-inbox">
              @if(!empty($comments))
                @foreach($comments as $comment)
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>{{$comment->user_name}}</td>
                    <td>
                        <a href="{{URL::route('detail_comment',array($comment->id))}}">
                          {{substr($comment->content, 0 ,50)."..."}}                     
                        </a>
                    </td>
                    <td>{{$comment->created_at}}</td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
        <div class="text-center">{{$comments->links()}}</div>
      </div> 
    </div>
	</div>	
@endsection()
@stop()