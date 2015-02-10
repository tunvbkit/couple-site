<div class="grid-slide">
	@foreach($slide as $slide)
	  <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 one-slide">
	      <img  class="img-responsive img-thumbnail" src="{{Asset("../{$slide->bigpic}")}}">
	  </div>
  	@endforeach()
</div>