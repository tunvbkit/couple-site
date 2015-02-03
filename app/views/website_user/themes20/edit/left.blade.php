<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 phara-temp wedding-template">
    <img src="{{Asset("{$backgrounds}")}}" class="img-responsive" alt="Image" style="margin-top:-2%;">     
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-item r-title{{$tabWeb->id}}" >
        <div class="inline-title text-center">
            <h3 class="text-center title-tab" style="font-familly: {{$website_item->font}}; color: #{{$website_item->color2}}" id = "nameTitle{{$tabWeb->id}}">
                {{$tabWeb->title}}
            </h3>
            <span onclick="sendTitle({{$tabWeb->id}},{{$tabWeb->visiable}})" class="glyphicon glyphicon-edit" data-toggle="modal" data-target='#modal-edit-menu'></span>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 float-left"  style="margin-left:5%;">        
            <span id="prev_output{{$tabWeb->id}}">     
                 
                     <?php 
                        $images=PhotoTab::where('tab',$tabWeb->id)->get()->first();
                         ?>
                    @if($images)
                         <a class="fancybox" rel="gallery1" href="{{Asset("{$images->photo}")}}" >
                            <img  class="img-responsive" src="{{Asset("{$images->photo}")}}" alt="">
                        </a>
                    @else 
                        <a class="fancybox" rel="gallery1" href="{{Asset("images/website/themes20/tab_temp_20.jpg")}}" >
                            <img  class="img-responsive" src="{{Asset("images/website/themes20/tab_temp_20.jpg")}}" alt="">          
                        </a>
                    @endif            
                   
                
            </span >     
             <span>
                <button onclick="send_id({{$tabWeb->id}},null)" data-backdrop="static"  class="btn btn-success" data-toggle="modal" data-target='#modal-changeimage' >Đổi Ảnh</button>
                <input id="id-tab-photo{{$tabWeb->id}}" type="hidden" value="{{$tabWeb->id}}">
            </span>   
                
        </div>
        <div class="show-content phara{{$tabWeb->id}}" style="margin-right:5%;"onclick="showckeditorpartion({{$tabWeb->id}})" data-toggle="modal" data-target='#modal-edit'>
                <span name="phara" style="color: #{{$website_item->color3}}">{{$tabWeb->content}}</span>        
        </div>
       
        <div class="phara-margin float-right" >      
            <div class="click-edit click-edit-hide{{$tabWeb->id}}" >            
              
                <span> <a style="background: #19b5bc; border:none;" onclick="showckeditorpartion({{$tabWeb->id}})" data-toggle="modal" data-target='#modal-edit' data-backdrop="static" class="btn btn-primary" href="javascript:void(0);">Sửa nội dung</a></span>
            </div>
        </div>
        

</div>    
   
       
</div>

