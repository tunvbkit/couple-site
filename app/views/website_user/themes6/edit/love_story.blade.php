
<div class="col-xs-8 partion ">
	<div class="row phara-margin">
       	<h3 class="text-center title-tab" style="text-align: {{$tab->titlestyle}}; font-familly: {{$website_item->font}}; color: #{{$website_item->color2}} " id = "nameTitle{{$tab->id}}">
            {{$tab->title}}
        </h3>

        <div  class="show-content phara{{$tab->id}}">
        	<span name="phara" style="color: #{{$website_item->color3}}">{{$tab->content}}</span>
        </div>
       <!--  <div class="col-md-12 edit-content editphara{{$tab->id}}">
        	<textarea name="editor{{$tab->id}}" class="ckeditor form-control ckedit{{$tab->id}}" id="editor{{$tab->id}}" cols="40" rows="10" tabindex="1">
               {{$tab->content}}
            </textarea>

        </div> -->

    </div>
    <div class="row phara-margin float-right">    	
    	<div class=" click-edit click-edit-hide{{$tab->id}}" >
    		<!-- <span> <a  onclick="showckeditor({{$tab->id}})" class="glyphicon glyphicon-edit icon-site" href="javascript:void(0);"></a></span>
            <span><a class="glyphicon glyphicon-cog icon-site" href="javascript:void(0)"></a></span> -->
            <span> <a style="background: #19b5bc; border:none;" onclick="showckeditorpartion({{$tab->id}})" data-toggle="modal" data-target='#modal-edit' data-backdrop="static" class="btn btn-primary" href="javascript:void(0);">Sửa nội dung</a></span>
    	</div>
    </div>
    <!-- <div class="row phara-margin float-right">    	
    	<div class="ok-edit ok-edit-show{{$tab->id}}">
    		<span>
                <a onclick="updateckeditor({{$tab->id}})" class="glyphicon glyphicon-ok icon-site" href="javascript:void(0);"></a>
                <input type="hidden" class="get_id{{$tab->id}}" value="{{$tab->id}}">
            </span>
            <span><a style="color:#e74c3c;" onclick="exitckeditor({{$tab->id}})" class=" glyphicon glyphicon-remove icon-site" href="javascript:void(0);"></a></span>
    	</div>
    </div> -->
</div>
