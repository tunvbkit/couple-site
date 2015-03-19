
	

<h4>{{$title}}</h4>
@if(!empty($slide))
@foreach( $slide as $slide )
	<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 remove-photo remove-photo{{$slide->id}}">
		<span class="btn-delete" title="Xóa ảnh">
          <i onclick="delSlide({{$slide->id}})" class="fa fa-times"></i>
        </span>
		<img  class="img-responsive img-thumbnail" src="{{Asset("../{$slide->bigpic}")}}">
	</div>
	@endforeach
@endif