<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 phara-temp about-template">     
    <div class="image-couple">
        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 content-broom">        
            @if(!empty($website_item->avatar_groom))
            <a class="fancybox" rel="gallery1" href="{{Asset("$website_item->avatar_groom")}}" >
                <img src="{{Asset("$website_item->avatar_groom")}}" class="img-responsive" alt="Image">                         
            </a>                           
            @else
            <a class="fancybox" rel="gallery1" href="{{Asset('images/website/themes10/groom.jpg')}}" >
                <img src="{{Asset('images/website/themes10/groom.jpg')}}" class="img-responsive" alt="Image">        
             </a>   
            @endif  
            <div class="show-content about_grooms text-center">
                <span class="about-g">{{$website_item->about_groom}} </span>
            </div>
        </div>  
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
            @if(!empty($website_item->avatar_bride))
            <a class="fancybox" rel="gallery1" href="{{Asset("$website_item->avatar_bride")}}" >
                <img src="{{Asset("$website_item->avatar_bride")}}" class="img-responsive" alt="Image">                         
            </a>    
            @else
            <a class="fancybox" rel="gallery1" href="{{Asset('images/website/themes10/bride.jpg')}}" >
                <img src="{{Asset('images/website/themes10/bride.jpg')}}" class="img-responsive" alt="Image">        
             </a>   
            @endif      
            <div class="show-content about_bride text-center">
                <span class="about-b">{{$website_item->about_bride}}</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
        </div>              
    </div>      
       
</div>

