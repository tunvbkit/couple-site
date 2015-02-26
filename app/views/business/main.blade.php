
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<!-- library  css-->
		<link rel="stylesheet" type="text/css" href="{{Asset("assets/css/bootstrap/bootstrap.css")}}">
		<link href="{{Asset("assets/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
		<!-- custom css -->
		<link rel="stylesheet" type="text/css" href="{{Asset("assets/css/business/business.css")}}">
		 <!-- <link href="{{Asset("assets/css/style.css")}}" rel="stylesheet"> -->
		<!-- library js -->
		<script src="{{Asset("assets/js/jquery.min.js")}}"></script>
		<script type="text/javascript" src="{{Asset("assets/js/bootstrap.min.js")}}"></script>
		<script src="{{Asset('assets/ckeditor/ckeditor.js')}}"></script>
		<script src="{{Asset('assets/js/jquery-validate/jquery.validate.js')}}"></script>
		<script src="{{Asset("assets/js/jquery.scrollTo.js")}}"></script>
		<!-- custom js -->
		<script src="{{Asset('assets/js/business.js')}}"></script>
		<script type="text/javascript" src="{{Asset("assets/js/main.js")}}"></script>	
		<!-- Click Menu Active -->
		<script type="text/javascript" src="{{Asset('assets/js/active-menu.js')}}"></script>

		<!-- Button Go Top -->
		<script type="text/javascript">
			(function(){
			    // Cuộn trang lên với scrollTop
			    $('#go_top').click(function(){
			        $('body,html').animate({scrollTop:0},400);
			        return false;
			    })
			})(jQuery)
		    $(window).scroll(function(){
			    if( $(window).scrollTop() > 500 ) {
			        $('#go_top').stop(false,true).fadeIn(300);
			    }else{
			        $('#go_top').hide();
			    }
			});
		</script>
	</head>

	<body>
		<div class="row header-logo text-center">			
			<a href="{{URL::route('index')}}">
		    	<img class="img-responsive" src="{{Asset('icon/logo-2.png')}}">
		    </a>		
		</div>
		<!-- navbar -->
		<div class="row top-menu">
			@yield('nav-bar')
		</div>
		<!-- end navbar	 -->

		<!-- content -->
		
			@yield('content')
		
		<!-- end content -->

		<!-- footer -->
		<div class="row footer">
			<div class="col-sm-8 col-md-8 col-lg-8 menu-footer">
				<ul class="hidden-xs" >
					<li>
						<a href="{{URL::route('introduce')}}" >Giới thiệu</a>
						&nbsp;&nbsp;|&nbsp;&nbsp; 
						<a href="{{URL::route('term')}}" >Điều khoản sử dụng</a>
						&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="{{URL::route('policy')}}" >Chính sách riêng tư</a>
						&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="{{URL::route('question')}}" >Câu hỏi thường gặp</a>
						&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="{{URL::route('contact')}}" >Liên hệ</a>				
					</li>		
				</ul>			
				<div class="infor-company hidden-xs" >
	                Số 47 , Đường Đỗ Huy Uyển, Phường An Hải, Quận Sơn Trà, Tp. Đà Nẵng<br>
	               	Điện thoại: 0966 666 886 | Email:
	                <a class="contact-admin" href="mailto:thanh@thuna.vn">thanh@thuna.vn</a><br>
	                Chịu trách nhiệm quản lý nội dung: thuna.vn<br>
	                <a class="thuna-title" href="http://www.thuna.vn" title="Đám cưới, Ảnh cưới, Áo cưới - Trang thông tin dịch vụ cưới hàng đầu Việt Nam">Đám cưới, Ảnh cưới, Áo cưới - Trang thông tin dịch vụ cưới hàng đầu Việt Nam.</a></h2><br>  
	                <div class="site-author">Bản quyền thuộc về thuna.vn &copy; <?php
	                	$copyYear = 2015;
	                	$curYear  = date('Y');
	                	echo $copyYear . ( ($curYear != $copyYear) ? '-' . $curYear : '' );
	                ?></div>         
	            </div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: -14%; margin-top: 15%;">
					<p style="font-size: 12px;color: black; font-weight: bold;" href="http://www.thuna.vn">Kết nối với Thuna.vn</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 connect-thuna">
					<div class="col-xs-3 col-md-2 col-lg-2">
						<a href="https://www.facebook.com/thuna.weddingplaner?fref=ts" target="_blank">
							<img class="img-responsive" src="{{Asset('icon/fb.jpg')}}">
						</a>
					</div>
					<div class="col-xs-3 col-md-2 col-lg-2">
						<a href="https://www.youtube.com/channel/UCiKbAYqN2YUUKRkRHukt7SA" target="_blank">
						<img class="img-responsive" src="{{Asset('icon/social-youtube.png')}}">
						</a>
					</div>
					<div class="col-xs-3 col-md-2 col-lg-2">
						<a href="https://plus.google.com/u/0/+Thunaplannerwedding" target="_blank">
						<img class="img-responsive" src="{{Asset('icon/g+.jpg')}}">
						</a>
					</div>	
					<div class="col-xs-3 col-md-2 col-lg-2">
						<a href="https://plus.google.com/u/0/+Thunaplannerwedding" target="_blank">
						<img class="img-responsive" src="{{Asset('icon/tw.jpg')}}">
						</a>
					</div>			
				</div>			
			</div>
			<div class="col-md-3 hidden-sm hidden-xs">
				<a href="javascript:void(0);" class="btn btn-top" id="go_top">				
					<i class="fa fa-angle-up fa-3x text-center"></i>
				</a>
			</div>
		</div>	
		<!-- end footer -->
	</body>
</html>