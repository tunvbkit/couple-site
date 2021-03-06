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
	
    <script src="{{Asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{Asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <link rel="stylesheet" type="text/css" href="{{Asset("assets/css/bootstrap/bootstrap.min.css")}}">
    <link href="{{Asset("assets/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{Asset("assets/css/website/themes13.css")}}">
    <link rel="stylesheet" type="text/css" href="{{Asset("assets/css/style-checkbox-guestbook.css")}}">
     <link rel="stylesheet" type="text/css" href="{{Asset("assets/css/website/template-font.css")}}">

    <script type="text/javascript" src="{{Asset("assets/slide/lib/jquery-1.8.2.min.js")}}"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="{{Asset("assets/slide/lib/jquery.mousewheel-3.0.6.pack.js")}}"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="{{Asset("assets/slide/source/jquery.fancybox.js?v=2.1.3")}}"></script>
    <link rel="stylesheet" type="text/css"  href="{{Asset("assets/slide/source/jquery.fancybox.css?v=2.1.2")}}" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="{{Asset("assets/slide/source/helpers/jquery.fancybox-buttons.css?v=1.0.5")}}" />
    <script type="text/javascript" src="{{Asset("assets/slide/source/helpers/jquery.fancybox-buttons.js?v=1.0.5")}}"></script>

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="{{Asset("assets/slide/source/helpers/jquery.fancybox-media.js?v=1.0.5")}}"></script>
    <script type="text/javascript" src="{{Asset("assets/slide/f-slide.js")}}"></script>

    <style type="text/css">
        .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
        }
        .fancybox-title iframe {
            min-height: 30px;
            vertical-align: middle;
        }

    </style>
    <script src="{{Asset('assets/js/jquery.scrollTo.js')}}"></script>
    <script type="text/javascript">
		jQuery(document).ready(function($) {
    		$('a.scrollTo').click(function () {
	        $('body').scrollTo($(this).attr('href'),{duration:'slow', offsetTop : '-10'});
	        return false;
			    });
			});
	</script>
</head>
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
@if($website)
    @foreach( $website as $website_item )
<body id="page1">
<div class="body1 container">
	<div class="main">
<!-- header -->
		<header>
			<div class="navbar-wrapper menu-theme-13">

	          <!-- <div class="container"> -->
	            <div class="navbar navbar-inverse slide-menu" role="navigation">
	              <!-- <div class="container"> -->
	                <div class="navbar-header">
	                  <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
	                </div>
	                <div class="navbar-collapse collapse menu-ul ">
	                  <ul id='menu' class="nav navbar-nav navbar-right text-center">
			                  	<li  id="s1" class="">
			                        <a class="scrollTo" href="#title-home" >Trang chủ</a>
			                    </li>
	                  	@foreach(TabWebsite::where('website',$id_web)->where('visiable',0)->get() as $index => $tab)
	                  		@if($index<3)
			      				<li class=""><a class="{{$tab->id}} scrollTo" href="#section_{{$tab->type}}" >{{$tab->title}}</a></li>
		      				@endif
	                  	@endforeach
		                    <li class="dropdown">
							    <a data-toggle="dropdown" href="#">
							      Xem thêm <span class="caret"></span>
							    </a>
							    <ul class="dropdown-menu" role="menu" style="background: url('../images/website/themes13/bg-ul.jpg');left:0px;">
							   		@foreach(TabWebsite::where('website',$id_web)->where('visiable',0)->get() as $index => $tab)
								    	@if($index>=3)
								    	<li class=""><a class="{{$tab->id}} scrollTo" href="#section_{{$tab->type}}" >{{$tab->title}}</a></li>
								    	@endif
								    @endforeach
							    </ul>
							</li>                  
	                  </ul>
	                </div>
                 </div>
	        </div>
			<div class="container">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 slider_box">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						
						<!-- Wrapper for slides -->
						<?php $check=PhotoTab::where('user',$website_item->user)->get()->count();?>
						<div class="carousel-inner">
						    <?php $albums=PhotoTab::where('user',$website_item->user)->get();?>
				            @if( $check > 0 )
				                @foreach($albums as $index => $album)
				                	@if($index==0)
				                    	<div class="item active">
									    	<img src="{{Asset("{$album->photo}")}}" alt="" />
									    </div>
				                    @else
				                    	<div class="item">
									    	<img src="{{Asset("{$album->photo}")}}" alt="" />
									    </div>
				                    @endif

				                @endforeach
				            @else
				            	<div class="item active">
							    	<img src=" {{Asset("images/website/themes9/01.jpg")}}" alt="First slide">
				                </div>
							    <div class="item">
							    	<img src="{{Asset("images/website/themes9/02.jpg")}}" alt="Second slide">
							    </div>
							    <div class="item">
							    	<img  src="{{Asset("images/website/themes9/01.jpg")}}" alt="Third slide">
							    </div>
				            @endif
						</div>
						<!-- Controls -->
					</div><!-- /carousel -->
				</div>
				<!-- end featured-img  -->
				<div id="title-home" class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 bg-infor">
					<hgroup>
                        <h2 class="text-center" style="font-family: 'UvfAphroditePro',cursive;"> Ours Wedding </h2>
                        <h1 style="font-family: 'UvfAphroditePro',cursive;" class="font-name text-center name-g">
                            {{$website_item->name_groom}}
                        </h1>
                        <h6 class="text-center" style="font-size:20px;">&</h6>
                        <h1 style="font-family: 'UvfAphroditePro',cursive;" class="font-name text-center name-b">
                            {{$website_item->name_bride}}
                        </h1>
                        <h6 class="text-center" style="font-size:20px;">on</h6>
                        <h3 class="text-center title-tab" style="color: #{{$website_item->color1}}">
                            @if(Session::has('email'))
                                {{WebsiteController::getDates()}}
                            @else
                                {{$date_url}}
                            @endif
                        </h3>
                    </hgroup>
                    <p class="text-center" style="color:#FF4FD0;">
		        		Hân hạnh mời các bạn đến tham dự cùng chúng tôi.
		        	</p>
				</div>
			</div>
	</header>
		<!-- end header -->

	</div>
</div>
<div class="body2 container">

@foreach(TabWebsite::where('website',$id_web)->where('visiable',0)->orderBy('sort','ASC')->get() as $tabWeb)
	
		@if($tabWeb->type =="welcome" )
		<div id="section_{{$tabWeb->type}}">
		@include('website_user.themes13.page.left')
		</div>
		
		<div class=" bg-line"></div>
		@endif

		<!-- cau chuyen tinh yeu -->
		@if($tabWeb->type=="love_story")
		<div id="section_{{$tabWeb->type}}">
		@include('website_user.themes13.page.right')
		</div>
		
		<div class=" bg-line"></div>
		@endif

		<!-- About Us -->
		@if($tabWeb->type=="about")
		<div id="section_{{$tabWeb->type}}">
		@include('website_user.themes13.page.right')
		</div>
		<div class=" bg-line"></div>
		
		
		@endif

		<!-- Wedding Event -->
		@if($tabWeb->type=="wedding" )
		<div id="section_{{$tabWeb->type}}">
		@include('website_user.themes13.page.left')

		<!-- -change map --> 
		 <!-- <div class="container">
    	 	<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10 col-md-offset-1 col-sm-offset-1 col-offset-lg-1">
	           	<div class="text-center map-hove " style='padding:20px 20px;'>         
	             
	                  <div id="geomap" >
	                      <p>Loading Please Wait...</p>
	                  </div>
	                  <div id="cor"></div>
	                  <input id="hidLat" name="hidLat" type="hidden" value="{{$website_item->latitude}}">
	                  <input id="hidLong" name="hidLong" type="hidden" value="{{$website_item->longitude}}">    
	            </div>        
            </div>
        </div>   -->                    
            <!-- -end map --> 
		</div>
		<div class=" bg-line"></div>
		
		@endif
		

		<!-- Travaling -->
		@if($tabWeb->type=="traval")
		<div id="section_{{$tabWeb->type}}">
		@include('website_user.themes13.page.right')
		</div>
		<div class=" bg-line"></div>
        
        @endif
        <!-- Photo Album -->
        @if($tabWeb->type=="album" )
        <div id="section_{{$tabWeb->type}}">
        @include('website_user.themes13.page.photo')
        </div>
        <div class=" bg-line"></div>
        <hr>
        
        @endif

       <!--  Register -->
       @if($tabWeb->type=="register" )
       <div id="section_{{$tabWeb->type}}">
       @include('website_user.themes13.page.left')  
       </div>  
       <div class=" bg-line"></div>   
        
        
        @endif

        <!-- Contact Us -->
        @if($tabWeb->type=="contact")
        <div id="section_{{$tabWeb->type}}">
        @include('website_user.themes13.page.contact')
        </div>
        <div class=" bg-line"></div>
        
        
        @endif

         <!--  Guest book -->
       @if($tabWeb->type=="guestbook")
        <div id="section_{{$tabWeb->type}}">
        	@include('website_user.themes13.page.guestbook')
    	</div>
    	<div class=" bg-line"></div>
    	
    	
        @endif

@endforeach
<!-- content / -->
</div>
<div class="body3">
	<div class="main">
<!-- footer -->
		<footer class="text-center" style="margin-top: 40px;">
			<p class="col-xs-12">
				{{$website_item->name_groom}} &amp; {{$website_item->name_bride}} 
			</p>
			on 
			<p>
				
                @if(Session::has('email'))
                    {{WebsiteController::getDates()}}
                @else
                    {{$date_url}}
                @endif.
			</p>	       	
        	<p>
        		Site design by 
        		<a title="" href="http://thuna.vn"> 
                Thuna.vn
            </a>
        	</p>
		</footer>
<!-- / footer -->
	</div>
</div>
	@endforeach
@endif
</body>

</html>