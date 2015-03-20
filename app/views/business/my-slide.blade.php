
	

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
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center btn-upload-slide">
	  <button class="btn btn-responsive btn-primary" data-backdrop="static" data-toggle="modal" data-target='#b-modal-slide' onclick="sendIdAlbum({{$id_album}})">Tải ảnh lên</button>
	</div>