
	@foreach($slide as $slide)
	  <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 one-slide one-slide{{$slide->id}}">
	  		<span class="btn-delete">
	            <i class="glyphicon glyphicon-remove-sign" onclick="delSlide({{$slide->id}})"></i>
          	</span>
	      <img  class="img-responsive img-thumbnail" src="{{Asset("../{$slide->bigpic}")}}">
	  </div>
  	@endforeach()