<div class="partion r-title{{$tabWeb->id}}">
    <div class="row phara-margin">
        <div class="inline-title text-center">
            <h3 class="text-center title-tab" style="font-familly: {{$website_item->font}}; color: #{{$website_item->color2}}" id = "nameTitle{{$tabWeb->id}}">
                {{$tabWeb->title}}
            </h3>
            <span onclick="sendTitle({{$tabWeb->id}},{{$tabWeb->visiable}})" class="glyphicon glyphicon-edit" data-toggle="modal" data-target='#modal-edit-menu'></span>
        </div>
        <div class="col-xs-6 float-right">
            <span id="prev_output{{$tabWeb->id}}" >
                <a href="#">
                    <?php 
                    $images=PhotoTab::where('tab',$tabWeb->id)->get()->first();
                     ?>
                @if($images)
                    <img  class="img-responsive" src="{{Asset("{$images->photo}")}}" alt="">
                @else 
                    <img  class="img-responsive" src="{{Asset("images/website/themes1/tab_temp_1.jpg")}}" alt="">

                @endif
                </a>
            </span>

            <span>
                <button  onclick="send_id({{$tabWeb->id}},null)" data-backdrop="static"  class="btn btn-primary" data-toggle="modal" data-target='#modal-changeimage' style="background: #19b5bc; border:none;">Đổi Ảnh</button>
                <input id="id-tab-photo{{$tabWeb->id}}" type="hidden" value="{{$tabWeb->id}}">
            </span>
        </div>
        <div class="show-content phara{{$tabWeb->id}}" onclick="showckeditorpartion({{$tabWeb->id}})" data-toggle="modal" data-target='#modal-edit' data-backdrop="static" >
            <span name="phara" style="color: #{{$website_item->color3}}">{{$tabWeb->content}}</span>            
        </div>
    </div>
    <div class="row phara-margin">
        <div class="col-xs-6 col-md-10 col-sm-10 col-lg-10"></div>
        <div class="col-xs-1 click-edit click-edit-hide{{$tabWeb->id}}" >
            <span> <a style="background: #19b5bc; border:none;" onclick="showckeditorpartion({{$tabWeb->id}})" data-toggle="modal" data-target='#modal-edit' data-backdrop="static" class="btn btn-primary" href="javascript:void(0);">Sửa nội dung</a></span>
        </div>
    </div>
</div>

