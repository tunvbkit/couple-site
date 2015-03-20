@if(!empty($avatars))
@foreach($avatars as $avatar)
<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 remove-avatar remove-avatar{{$avatar->id}}">
  <span class="btn-delete-avatar" title="Xóa ảnh đại diện">
    <i onclick="deleteAvatar({{$avatar->id}})" class="fa fa-times"></i>
  </span>
  <img  class="img-responsive img-thumbnail" src="{{Asset("../{$avatar->avatar}")}}">
</div>
@endforeach
@endif
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <a class="btn btn-responsive btn-primary btn-add-avatar" data-backdrop="static" data-toggle="modal" data-target='#b-modal-avatar'>Thêm ảnh đại diện</a>
</div>