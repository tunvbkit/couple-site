@extends('business.main-dashboard')
@section('title')
  Hộp thư|thuna.vn
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
              <li><a href="{{URL::route('business.index')}}">Hồ sơ</a></li>
              <li><a href="{{URL::route('b_inbox')}}">Hộp thư</a></li>
              <li><a href="#">Bình luận</a></li>
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
	<div class="container inbox">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 head-inbox">
			<h4>Hộp thư</h4>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 left-inbox">

		        <div class="sidebar-nav">
			      <div class="navbar navbar-default" role="navigation">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <span class="visible-xs navbar-brand">Hộp thư</span>
			        </div>
			        <div class="navbar-collapse collapse sidebar-navbar-collapse">
			          <ul class="nav navbar-nav menu-inbox">
			            <li class="active e-inbox"><a href="#">Soạn thư mới</a></li>
			            <li class="a-inbox"><a href="#" onclick="loadArrive()">Hộp thư đến</a></li>
			            <li class="s-inbox"><a href="#" onclick="loadSent()">Hộp thư đi</a></li>
			            <li class="i-inbox"><a href="#" onclick="loadImportant()">Thư quan trọng</a></li>
			          </ul>
			        </div><!--/.nav-collapse -->
			      </div>
			    </div>
        
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 left-inbox">
				<table class="table table-hover text-center">
					<thead>
						<tr>
							<th class="text-center">Người gửi</th>
							<th class="text-center">Chủ đề</th>
							<th class="text-center">Thời gian</th>
							<th class="text-center">Thao tác</th>
						</tr>
					</thead>
					<tbody class="load-inbox">
						<tr class="tr-load">
							<td><a >hdhfjdfhdj</a></td>
							<td><a href="">hdhfjdfhdj</a></td>
							<td><a >hdhfjdfhdj</a></td>
							<td><a >hdhfjdfhdj</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function loadArrive () {
			$.ajax({
	        type:"post",
	        url:"{{URL::route('load_arrive')}}",
	        success:function(data){
	          $('.menu-inbox > li').removeClass('active');
	          $('.menu-inbox > li.a-inbox').addClass('active');	
	          $('.tr-load').remove();
	          $('.load-inbox').append(data);
	     		 }
	        }); 
		}
		function loadSent () {
			$.ajax({
	        type:"post",
	        url:"{{URL::route('load_sent')}}",
	        success:function(data){
	          $('.menu-inbox > li').removeClass('active');
	          $('.menu-inbox > li.s-inbox').addClass('active');	
	          $('.tr-load').remove();
	          $('.load-inbox').append(data);
	     		 }
	        }); 
		}
		function loadImportant () {
			$.ajax({
	        type:"post",
	        url:"{{URL::route('load_important')}}",
	        success:function(data){
	          $('.menu-inbox > li').removeClass('active');
	          $('.menu-inbox > li.i-inbox').addClass('active');	
	          $('.tr-load').remove();
	          $('.load-inbox').append(data);
	     		 }
	        }); 
		}
	</script>
	
@endsection()
@stop()