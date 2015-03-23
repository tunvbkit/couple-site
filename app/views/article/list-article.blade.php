@extends('business.main-dashboard')
@section('title')
	Quản lí 
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
            <li><a href="{{URL::route('list_article',array('kinh-doanh'))}}">Kinh doanh</a></li>
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
<div class="container article">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 taxonomy">
    <h4>Kinh doanh</h4>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
      
    </div>

    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <form action="{{URL::route('search_article')}}" method="GET" role="form">
          <div class="input-group">
              <input type="text" name="search_name" class="form-control" placeholder="Từ khóa tìm kiếm">
              <input type="hidden" name="taxonomy" value="{{$slug_taxonomy}}">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="fa fa-search-plus"></span></button>
              </span>
            </div><!-- /input-group -->
        </form>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    @if(!empty($title))
      <h4>Kết quả tìm kiếm "{{$title}}".</h4>
    @endif
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-article">
    @foreach($articles as $article)
    <div class="sub-article">
      <h4>
        <a href="{{URL::route('detail_article',array((Taxonomy::where('id',$article->taxonomy)->get()->first()->slug),$article->slug))}}">{{$article->title}}

        </a>
      </h4>
      <span><h6>Người đăng: Nguyễn</h6></span> | <span><h6>{{$article->created_at}}</h6></span> | <span><h6>Nhận xét: 10</h6></span>
      <p>{{$article->description}}</p>
    </div>
    @endforeach()
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
    @if(!empty($title))
      {{$articles->appends(Request::except('page'))->links()}}
    @else
      {{$articles->links()}}
    @endif   
  </div>
  @if(empty($count))
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h4>Không tìm thấy bài viết.</h4>
  </div>
  @endif
</div>
@endsection
@stop