<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 append-load">
	<h4>{{$title}}</h4>
	@if(!empty($photos))
	@foreach( $photos as $photo )
	<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 remove-photo remove-photo{{$photo->id}}">
		<span class="btn-delete" title="Xóa ảnh">
          <i onclick="delSlide({{$photo->id}})" class="fa fa-times"></i>
        </span>
		<img  class="img-responsive img-thumbnail" src="{{Asset("../{$photo->bigpic}")}}">
	</div>
	@endforeach
@endif
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center btn-upload-slide">
	  <button class="btn btn-responsive btn-primary" data-backdrop="static" data-toggle="modal" data-target='#b-modal-slide' onclick="sendIdAlbum({{$id_album}})">Tải ảnh lên</button>
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	@if(!empty($albums))
	@foreach( $albums as $album )
		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 remove-album delete-album{{$album->id}}">
			<?php $photo = BusinessController::getFirstPhoto($album->id); ?>
			@if(!empty($photo))
				<a href="javascript:void(0);" onclick="showAlbum({{$album->id}})">
					<img  class="img-responsive img-thumbnail" src="{{Asset("../{$photo->bigpic}")}}">
				</a>
			@else
				<a href="javascript:void(0);" onclick="showAlbum({{$album->id}})">
					<img  class="img-responsive img-thumbnail" src="{{Asset("../images/avatar/Album.png")}}">
				</a>				
			@endif
			<p class="text-center detail-album">
                  <a class="a-name-album{{$album->id}}" href="javascript:void(0);" onclick="editAlbum({{$album->id}})">{{$album->name}}</a>
                  <input type="type" class="i-name-album form-control name-edit-album{{$album->id}}" value="{{$album->name}}" onblur="updateAlbum({{$album->id}})">
                </p> 
                <p class="text-center detail-album"><a onclick="showAlbum({{$album->id}})" href="javascript:void(0);">Ảnh(
                      @if(PhotoSlide::where('album',$album->id)->get()->count() == true)
                        {{PhotoSlide::where('album',$album->id)->get()->count();}}
                    @else
                      0
                    @endif
                      )</a></p>
                <p class="text-center detail-album"><a href="javascript:void(0);" onclick="editAlbum({{$album->id}})">Chỉnh sửa</a>|<a href="javascript:void(0);" onclick="delAlbum({{$album->id}})">Xóa</a></p>				
		</div>
	@endforeach
@endif
</div>
