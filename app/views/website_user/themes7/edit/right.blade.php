<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 phara-temp wedding-traval r-title{{$tabWeb->id}}">
     <div class="inline-title text-center">
        <h3 class="text-center title-tab section-title section-title-about" style="font-familly: {{$website_item->font}}; color: #{{$website_item->color2}}" id = "nameTitle{{$tabWeb->id}}">
            {{$tabWeb->title}}
        </h3>
        <span onclick="sendTitle({{$tabWeb->id}},{{$tabWeb->visiable}})" class="glyphicon glyphicon-edit" data-toggle="modal" data-target='#modal-edit-menu'></span>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 float-right">        
        <span id="prev_output{{$tabWeb->id}}">     
            <a href="#"> 
             <?php 
                $images=PhotoTab::where('tab',$tabWeb->id)->get()->first();
                 ?>
            @if($images)
                <img  class="img-responsive" src="{{Asset("{$images->photo}")}}" alt="">
            @else 
                <img  class="img-responsive" src="{{Asset("images/website/themes7/tab_temp_7.jpg")}}" alt="">          
            @endif            

            </a>
        </span>   
        <span>
        <button  onclick="send_id({{$tabWeb->id}},null)" data-backdrop="static"  class="btn btn-primary" data-toggle="modal" data-target='#modal-changeimage' style="background: #19b5bc; border:none;">Đổi Ảnh</button>
        <input id="id-tab-photo{{$tabWeb->id}}" type="hidden" value="{{$tabWeb->id}}">
        </span>      
              
    </div>
     <div  onclick="showckeditorpartion({{$tabWeb->id}})" data-toggle="modal" data-target='#modal-edit' class="show-content phara{{$tabWeb->id}}">
            <span name="phara" style="color: #{{$website_item->color3}}">{{$tabWeb->content}}</span>        
    </div>
     
    <div class="phara-margin float-right" >      
        <div class="click-edit click-edit-hide{{$tabWeb->id}}" >            
           <span> <a style="background: #19b5bc; border:none;" onclick="showckeditorpartion({{$tabWeb->id}})" data-toggle="modal" data-target='#modal-edit' data-backdrop="static" class="btn btn-primary" href="javascript:void(0);">Sửa nội dung</a></span>
           
        </div>
    </div>
    
    
</div>
