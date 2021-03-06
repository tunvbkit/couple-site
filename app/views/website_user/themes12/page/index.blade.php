<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$firstname}}'s wedding</title>
    <meta name="description" content="Tạo website cưới miễn phí">
    <meta name="author" content="Thuna.vn">
    <meta property="og:title" content="{{$firstname}}'s wedding">
	<meta property="og:description" content="Chào mừng đến với website cưới của chúng tôi">
	<meta property="og:url" content="http://thuna.vn/website/{{$url}}">
	<meta property="og:type" content="article">
	<meta property="og:image" content="{{Asset("{$web_fb}")}}" />
	
	

	<!-- css -->
    <link rel="stylesheet" type="text/css" href="{{Asset("assets/css/bootstrap/bootstrap.css")}}">
    <link href="{{Asset("assets/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="{{Asset("assets/css/website/themes12.css")}}">
	<!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{Asset("assets/css/website/themes.css")}}">
    <link rel="stylesheet" type="text/css" href="{{Asset("assets/css/style-checkbox-guestbook.css")}}">
    <link rel="stylesheet" type="text/css" href="{{Asset("assets/css/website/template-font.css")}}">

    <style type="text/css">
      .fb-comments, .fb-comments iframe[style], .fb-like-box, .fb-like-box iframe[style]
       {width: 100% !important;}
      .fb-comments span, .fb-comments iframe span[style], .fb-like-box span, .fb-like-box iframe span[style] 
      {width: 100% !important;}
    </style>

	<script src="{{Asset("assets/js/jquery.min.js")}}"></script>
	<script type="text/javascript" src="{{Asset("assets/js/bootstrap.3.2.0.min.js")}}"></script>
	<script type="text/javascript" src="{{Asset("assets/js/main.js")}}"></script>

	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

	<script src="{{Asset("assets/js/map-themes.js")}}"></script>
	<script src="{{Asset("assets/js/jquery.scrollTo.js")}}"></script>	 
	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
	    // Call & Apply function scrollTo
	    $('a.scrollTo').click(function () {
	        $('body').scrollTo($(this).attr('href'),{duration:'slow', offsetTop : '-10'});
	        return false;
	    });
	});

	</script>
	
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=943743042306339&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<script>
    $(document).ready(function() {
        $('.fb-share-button').attr("data-href", document.URL);
    });
</script>

	<div id="top"></div>
	<!-- end top -->

@if($website)
@foreach( $website as $website_item )

	<div id="wrapper">
			<div class="top-head">
				<div class="left-nav">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
					      	<button type="button" class="navbar-toggle" data-toggle="collapse" 
					         data-target="#example-navbar-collapse">
					        	<span class="sr-only">Toggle navigation</span>
					        	<span class="icon-bar"></span>
					        	<span class="icon-bar"></span>
					        	<span class="icon-bar"></span>
					      	</button>
					   	</div>
					   	<div class="collapse navbar-collapse" id="example-navbar-collapse">
					      	<ul class="nav navbar-nav">
						      	<li><a href="#home" data-toggle="tab">Trang Chủ</a></li>

								@foreach(TabWebsite::where('website',$id_web)->where('visiable',0)->get() as $index => $tab)
						      		@if($index<1)
						      		<li class="li-menu-edit"><a class="{{$tab->id}} scrollTo" href="#section_{{$tab->type}}" data-toggle="tab">{{$tab->title}}</a></li>
						      		@endif
						      	@endforeach
					      	</ul>
					      	
					   	</div>
					</nav>
					<!-- end menu -->
				</div>

				<div class="right-nav">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
					      	<button type="button" class="navbar-toggle" data-toggle="collapse" 
					         data-target="#example-navbar-collapse-2">
					        	<span class="sr-only">Toggle navigation</span>
					        	<span class="icon-bar"></span>
					        	<span class="icon-bar"></span>
					        	<span class="icon-bar"></span>
					      	</button>
					   	</div>
					   	<div class="collapse navbar-collapse" id="example-navbar-collapse-2">
					      	<ul class="nav navbar-nav">
						      	@foreach(TabWebsite::where('website',$id_web)->where('visiable',0)->get() as $index => $tab)
						      		@if( ($index>=1)&&($index<3) )
						      		<li class="li-menu-edit"><a class="{{$tab->id}} scrollTo" href="#section_{{$tab->type}}" data-toggle="tab">{{$tab->title}}</a></li>
						      		@endif
						      	@endforeach
					      	</ul>
					      	
					   	</div>
					</nav>
					<!-- end menu -->
				</div>
			</div>
			<!-- end top-head -->

			<div class="logo">
				<div class="name-groom">
					{{$website_item->name_groom}}
				</div>
				<div class="name-center">
					&
				</div>
				<div class="name-bride">
					{{$website_item->name_bride}}
				</div>
			</div>
			<!-- end logo -->
			<div class="clear"></div>

			<div class="menu-heart" id="home">
				<div class="groom">
					@if(!empty($website_item->avatar_bride))
	  					<img class="img-circle" src="{{Asset("$website_item->avatar_groom")}}">
					@else
						<img class="img-circle" src="{{Asset('images/website/themes12/groom.png')}}">
					@endif
				</div>
				<!-- end groom -->
				
				<div class="bride">
					@if(!empty($website_item->avatar_bride))
	  					<img class="img-circle" src="{{Asset("$website_item->avatar_bride")}}">
					@else
						<img class="img-circle" src="{{Asset('images/website/themes12/bride.png')}}">
					@endif
				</div>
				<!-- end bride -->

				<div class="h1">
					@foreach(TabWebsite::where('website',$id_web)->where('visiable',0)->get() as $index => $tab)
			      		@if( ($tab->type)=="traval" )
			      		<a class="page-h1 {{$tab->id}} scrollTo" href="#section_{{$tab->type}}" ><i class="fa fa-plane"></i></a>
			      		@endif
			      	@endforeach
				</div>
				<div class="h2">
					@foreach(TabWebsite::where('website',$id_web)->where('visiable',0)->get() as $index => $tab)
			      		@if( ($tab->type)=="album" )
			      		<a class="page-h2 {{$tab->id}} scrollTo" href="#section_{{$tab->type}}" ><i class="fa fa-film"></i></a>
			      		@endif
			      	@endforeach
				</div>
				<div class="h3">
					
				</div>
				<div class="h4">
					@foreach(TabWebsite::where('website',$id_web)->where('visiable',0)->get() as $index => $tab)
			      		@if( ($tab->type)=="love_story" )
			      		<a class="page-h4 {{$tab->id}} scrollTo" href="#section_{{$tab->type}}" ><i class="fa fa-heart-o fa-5x"></i></a>
			      		@endif
			      	@endforeach
				</div>
				<div class="h5">
					
				</div>
				<div class="h6">
					@foreach(TabWebsite::where('website',$id_web)->where('visiable',0)->get() as $index => $tab)
			      		@if( ($tab->type)=="guestbook" )
			      		<a class="page-h6 {{$tab->id}} scrollTo" href="#section_{{$tab->type}}" ><i class="fa fa-comments-o fa-4x"></i></a>
			      		@endif
			      	@endforeach
				</div>
				<div class="h7">
					@foreach(TabWebsite::where('website',$id_web)->where('visiable',0)->get() as $index => $tab)
			      		@if( ($tab->type)=="contact" )
			      		<a class="page-h7 {{$tab->id}} scrollTo" href="#section_{{$tab->type}}" ><i class="fa fa-phone-square fa-2x"></i></a>
			      		@endif
			      	@endforeach
				</div>

			</div>
			<!-- end menu-heart -->

		<div class="content">

					@foreach(TabWebsite::where('website',$id_web)->orderBy('sort','ASC')->get() as $tabWeb)
						<!-- Welcome -->
						@if($tabWeb->type =="welcome" && $tabWeb->visiable==0 )
							<div id="section_{{$tabWeb->type}}" class="item">
								@include('website_user.themes12.page.left')
								<div class="">
						            <div class="fb-share-button" data-layout="button"></div>
						        </div>
							</div>
							<!-- end item -->
						@endif
						<!-- About Us -->
						@if($tabWeb->type=="about" && $tabWeb->visiable==0)
							<div id="section_{{$tabWeb->type}}" class="item">
								@include('website_user.themes12.page.left')
							</div>
							<div class="">
					            <div class="fb-share-button" data-layout="button"></div>
					        </div>
							<!-- end item -->
						@endif

						<!-- cau chuyen tinh yeu -->
						@if($tabWeb->type=="love_story")
							<div id="section_{{$tabWeb->type}}" class="item">
								@include('website_user.themes12.page.text')
							</div>
						@endif

						<!-- Wedding Event -->
						@if($tabWeb->type=="wedding" && $tabWeb->visiable==0)
							<div id="section_{{$tabWeb->type}}" class="item">
								@include('website_user.themes12.page.left')
							</div>
							<div class="">
					            <div class="fb-share-button" data-layout="button"></div>
					        </div>
							<!-- end item -->
							<div class="row phara-margin" style="padding-top:10px;">
					           <!-- -change map --> 
					           	<div class="text-center map-hove " style='padding:20px 20px;'>         
					                
					                  <div id="geomap" >
					                      <p>Loading Please Wait...</p>
					                  </div>
					                  <div id="cor"></div>
					                  <input id="hidLat" name="hidLat" type="hidden" value="{{$website_item->latitude}}">
					                  <input id="hidLong" name="hidLong" type="hidden" value="{{$website_item->longitude}}">    
					            </div>
					            <!-- -end map -->  
					   		</div>
						@endif

						<!-- Travaling -->
						@if($tabWeb->type=="traval" && $tabWeb->visiable==0)
							<div id="section_{{$tabWeb->type}}" class="item">
								@include('website_user.themes12.page.left')
							</div>
							<!-- end item -->
				        @endif
				        <!-- Photo Album -->
				        @if($tabWeb->type=="album" && $tabWeb->visiable==0)
					        <div id="section_{{$tabWeb->type}}" class="item">
					        	@include('website_user.themes12.page.photo')
					        </div>
				        @endif

				       	@if($tabWeb->type=="contact" && $tabWeb->visiable==0)
					        <div id="section_{{$tabWeb->type}}" class="item">
					        	@include('website_user.themes12.page.contact')
					        </div>
				        @endif

				          <!--  Guest book -->
				       @if($tabWeb->type=="guestbook" && $tabWeb->visiable==0)
				        <div id="section_{{$tabWeb->type}}"  class="item">
				        	@include('website_user.themes12.page.guestbook')
						</div>
				        @endif 

					@endforeach

		</div>
		<!-- end content -->

		<div class="sosical">
			
		</div>
		<!-- end sosical -->

		<div class="copy-right">
			&copy 2014 <a href="thuna.vn">thuna.vn</a><br />
			Powered by giangmd@thuna.vn
		</div>
		<!-- end copy-right -->


<div class="float-right icon-go_top" >
    <a href="javascript:void(0);" class="btn btn-top" id="go_top">              
        <i class="fa fa-angle-up fa-3x text-center"></i>
    </a>
</div>


	</div>
	<!-- end wrapper -->

@endforeach
@endif


	<div class="clear"></div>
	<div id="bottom"></div>
	<!-- end bottom -->

<script type="text/javascript">
    (function(){
        // Cuộn trang lên với scrollTop
        $('#go_top').click(function(){
            $('body,html').animate({scrollTop:0},200);
            return false;
        })
    })(jQuery)
    $(window).scroll(function(){
        if( $(window).scrollTop() > 200 ) {
        	$('.icon-go_top').show();
            $('#go_top').stop(false,true).fadeIn(200);
        }else{
            $('#go_top').hide();
            $('.icon-go_top').hide();
        }
    });
</script>

</body>


</html>