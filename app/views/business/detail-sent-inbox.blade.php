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
              <li><a href="{{URL::route('business.index')}}"><span class="fa fa-wrench"></span>Hồ sơ</a></li>
              <li><a href="{{URL::route('b_inbox')}}"><span class="fa fa-envelope-o"></span>Hộp thư</a></li>
              <li><a href="#"><span class="fa fa-comment-o"></span></span>Bình luận</a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
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
			            <li class="e-inbox"><a href="{{URL::route('write_inbox')}}">Soạn thư mới</a></li>
			            <li class="a-inbox">
                    <a href="{{URL::route('load_arrive')}}">
                      Hộp thư đến (@if(!empty($n_arrive)){{$n_arrive}}@endif)
                    </a>
                  </li>
			            <li class="active s-inbox">
                    <a href="{{URL::route('load_sent')}}">
                      Hộp thư đi (@if(!empty($n_sent)){{$n_sent}}@endif)
                    </a>
                  </li>
			            <li class="i-inbox">
                    <a href="{{URL::route('load_important')}}">
                      Quan trọng (@if(!empty($n_important)){{$n_important}}@endif)
                    </a>
                  </li>
			          </ul>
			        </div><!--/.nav-collapse -->
			      </div>
			    </div>
        
			</div>
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 left-inbox">
        <div class="table-responsive div-table">
  				<div class="table table-hover text-center table-right">
  					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 detail-title">
                <p>{{$message->title}}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 detail-from">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                Đến: {{Vendor::where('id',$message->to_business)->get()->first()->name}}
                ({{User::where('id',Vendor::where('id',$message->to_business)->get()->first()->user)->get()->first()->email}})
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 time-inbox">
                 <span>{{$message->updated_at}}</span>
                 <a href="{{URL::route('delete_sent_inbox',array($message->id))}}" data-toggle="tooltip" data-placement="bottom" title="Xóa thư" style="margin-left:3%;"><span class="fa fa-trash"></span></a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-inbox">
              {{$message->content}}
            </div>
  				
  				</div>
        </div>
			</div>
		</div>
	</div>	
@endsection()
@stop()