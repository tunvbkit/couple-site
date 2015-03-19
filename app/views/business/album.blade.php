
@if(!empty($albums))
	@foreach( $albums as $album )
		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 remove-album delete-album{{$album->id}}">
			<?php $photo = BusinessController::getFirstPhoto($album->id); ?>
			<span class="btn-delete" title="Xóa album">
              <i onclick="delAlbum({{$album->id}})" class="glyphicon glyphicon-remove-sign"></i>
            </span>
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
                      @if(!empty(PhotoSlide::where('album',$album->id)->get()->count()))
                        {{PhotoSlide::where('album',$album->id)->get()->count();}}
                    @else
                      0
                    @endif
                      )</a></p>
                <p class="text-center detail-album"><a href="javascript:void(0);" onclick="editAlbum({{$album->id}})">Chỉnh sửa</a>|<a href="javascript:void(0);" onclick="delAlbum({{$album->id}})">Xóa</a></p>			
		</div>
	@endforeach
@endif
	