<section id="section_wedding" class="tab-pane r-title{{$tabWeb->id}}">
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<div class="container text-center">
		<div class="row sptr-position">
			<div class="col-md-12">
				<div class="separator" style="background: url({{Asset('/images/website/themes5/separetor.png')}}) no-repeat center;">
					<div class="inline-title text-center">
              <h2 style="color: #{{$website_item->color2}}" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}" class="TT{{$tabWeb->id}}" id = "nameTitle{{$tabWeb->id}}">{{$tabWeb->title}}</h2>
              <span onclick="sendTitle({{$tabWeb->id}},{{$tabWeb->visiable}})" class="glyphicon glyphicon-edit" data-toggle="modal" data-target='#modal-edit-menu'></span>
          </div>
				</div>
			</div>
		</div>
	</div>	
	<div class="fest-portion sptr-position">
		<div class="container text-center ">
			<div class="row partion">
				<div class="col-md-6 ">
					<div class="shape" id="prev_output{{$tabWeb->id}}" >
						<div class="overlay hexagon_mask" ></div>

							<a href="#">
			                    <?php 
			                    $images=PhotoTab::where('tab',$tabWeb->id)->get()->first();
			                     ?>
			                @if($images)
			                    <img  class="img-responsive" src="{{Asset("{$images->photo}")}}" alt="">
			                @else 
			                    <img  class="img-responsive" src="{{Asset("images/website/themes1/tab_temp_1.jpg")}}" alt="">

			                @endif
			                </a>
					</div>
					<span>
		                <button onclick="send_id({{$tabWeb->id}},null)" data-backdrop="static"  class="btn btn-primary" data-toggle="modal" data-target='#modal-changeimage' style="background: #19b5bc; border:none;">Đổi Ảnh</button>
		                <input id="id-tab-photo{{$tabWeb->id}}" type="hidden" value="{{$tabWeb->id}}">
                </span>	
				</div>
				
				<div class="col-md-6 s_txt">
					<div class="shape"  onclick="showckeditorpartion({{$tabWeb->id}})" data-toggle="modal" data-target='#modal-edit' data-backdrop="static">
            <div class="overlay hexagon_mask" style="background: url({{Asset('/images/website/themes5/hexagonal-maskorg.png')}});"></div>
						<div class="slide-txt show-content phara{{$tabWeb->id}}">
               <p name="phara" style="color: #{{$website_item->color3}}">{{$tabWeb->content}}</p>
							
						</div>									
					</div>
          
					
	        <div class="row phara-margin">
  		    	<div class="col-xs-6 col-md-10 col-sm-10 col-lg-10"></div>
  		    	<div class="col-xs-1 click-edit click-edit-hide{{$tabWeb->id}}" >
  		    		
                <span> <a style="background: #19b5bc; border:none;" onclick="showckeditorpartion({{$tabWeb->id}})" data-toggle="modal" data-target='#modal-edit' data-backdrop="static" class="btn btn-primary" href="javascript:void(0);">Sửa nội dung</a></span>
  		    	</div>
		      </div>
			   														
				</div>
			</div>
		</div>	
    <div class="row">
      <div class="border_map">
    		<div class="col-xs-8 col-md-offset-2 text-center map-hove">
          <p><input class="postcode" id="Postcode" name="Postcode" type="text"> <input type="submit" id="findbutton" value="Tìm địa điểm" /></p>        
          <div id="geomap" >
            <p>Loading Please Wait...</p>
          </div>
          <div id="cor"></div>
          <input id="hidLat" name="hidLat" type="hidden" value="{{$website_item->latitude}}">
          <input id="hidLong" name="hidLong" type="hidden" value="{{$website_item->longitude}}">  
    	   </div> 
    </div>
	</div>
		<script type="text/javascript">
       var PostCodeid = "#Postcode";
        var longval = "#hidLong";
        var latval = "#hidLat";
        var geocoder;
        var map;
        var marker;
  var markersArray = [];
          function deleteOverlays() {
            if (markersArray) {
                for (i in markersArray) {
                    markersArray[i].setMap(null);
                }
            markersArray.length = 0;

            }

        }
        function initialize() {
            //MAP
            var initialLat = $(latval).val();
            var initialLong = $(longval).val();
            
            var latlng = new google.maps.LatLng(initialLat, initialLong);
            var options = {
                zoom: 16,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
        
            map = new google.maps.Map(document.getElementById("geomap"), options);  
                
            geocoder = new google.maps.Geocoder();    
        
            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                position: latlng
            });
             google.maps.event.addListener(marker, 'click', function() {      
              infowindow.setContent(contentString);
              infowindow.open(map, marker);              
            });     
            google.maps.event.addListener(marker, "dragend", function (event) {
                var point = marker.getPosition();
                map.panTo(point);
            });
            markersArray.push(marker);
               google.maps.event.addListener(map, "click",function(event){

                var lat = event.latLng.lat();
                var lng = event.latLng.lng();
                $(latval).val(lat);
                $(longval).val(lng);
                $('#Postcode').val('');
                $.ajax({
                          type:"POST",
                          url:"{{URL::route('change-map')}}",
                          data:{
                              latitude: $('#hidLat').val(),
                              longitude: $('#hidLong').val()
                          },

                      });

                deleteOverlays();

                  marker = new google.maps.Marker({
                      position: event.latLng, 
                      title: 'Changer la position',
                      map: map,
                      draggable: true
                    });

  
                  markersArray.push(marker);
            });
        };
        
        $(document).ready(function () {
            
         
            
          $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            google.maps.event.trigger(map, 'resize');
            
          });
          $('#myTab a[href="#contact"]').on('shown', function(){
            google.maps.event.trigger(map, 'resize');
          });
             initialize();
           $("#geomap").css("height", 400);
            $('#findbutton').click(function (e) {
                var address = $(PostCodeid).val();
                geocoder.geocode({ 'address': address }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        map.setCenter(results[0].geometry.location);
                        marker.setPosition(results[0].geometry.location);
                        $(latval).val(marker.getPosition().lat());
                        $(longval).val(marker.getPosition().lng());
                        $.ajax({
                          type:"POST",
                          url:"{{URL::route('change-map')}}",
                          data:{
                              address : address,
                              latitude: $('#hidLat').val(),
                              longitude: $('#hidLong').val()
                          },

                      });
                    } else {
                        alert("Vui lòng nhập tên địa điểm");
                    }

                });
                e.preventDefault();
            });
        
            //Add listener to marker for reverse geocoding
            google.maps.event.addListener(marker, 'drag', function () {
                geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $(latval).val(marker.getPosition().lat());
                            $(longval).val(marker.getPosition().lng());
                            $("#cor").html(marker.getPosition().lat());
                        }
                    }
                });
            });
        
        });


</script>
	   
</section>