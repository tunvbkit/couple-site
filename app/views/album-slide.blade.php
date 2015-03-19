<h5>{{$name}}</h5>
		  <!-- Wrapper for slides -->
<div  id="bigPic">
	@if(!empty($slides))
		@foreach($slides as $index => $slide)
				<img style="margin:0 auto;" class="img-responsive" src="{{Asset("../{$slide->bigpic}")}}">
		@endforeach
	@endif			    
</div>
<ul  id="thumbs" style="margin-left:7.5%;">
		@if(!empty($slides))
			@foreach($slides as $index => $slide)
				<li rel="{{$index+1}}">
					<img class="img-responsive" src="{{Asset("../{$slide->smallpic}")}}">
				</li>
			@endforeach
		@endif			   
</ul>

<script type="text/javascript">
	var currentImage;
	var currentIndex = -1;
	var interval;
	function showImage(index){
		if(index < $('#bigPic img').length){
			var indexImage = $('#bigPic img')[index]
			if(currentImage){   
				if(currentImage != indexImage ){
					$(currentImage).css('z-index',2);
						clearTimeout(myTimer);
					$(currentImage).fadeIn(250, function() 
					{
						myTimer = setTimeout("showNext()", 3000);
					$(this).css({'display':'none','z-index':1})
				 	});
				}
	  		}
			$(indexImage).css({'display':'block', 'opacity':1});
			currentImage = indexImage;
			currentIndex = index;
			$('#thumbs li').removeClass('active');
			$($('#thumbs li')[index]).addClass('active');
		}
	}
	function showNext(){
		var len = $('#bigPic img').length;
		var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
	 	showImage(next);
	}
	var myTimer;
	$(document).ready(function() {
		myTimer = setTimeout("showNext()", 3000);
		showNext(); //Load first image
		$('#thumbs li').bind('click',function(e){
			var count = $(this).attr('rel');
			showImage(parseInt(count)-1);
		});
	});
	$(function() {
      $('#input-date').datetimepicker({
        format: 'd-m-Y',
        timepicker:false
      });
      });
</script>