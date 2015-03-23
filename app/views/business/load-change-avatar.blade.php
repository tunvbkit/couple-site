@if(!empty($avatars))
	@foreach($avatars as $avatar)
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<a href="javascript:void(0);" onclick="changeAvatar({{$avatar->id}})" data-dismiss="modal">
	  <img  class="img-responsive img-thumbnail" src="{{Asset("../{$avatar->avatar}")}}">
	</a>
	</div>
	@endforeach
@endif