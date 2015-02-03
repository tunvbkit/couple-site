<section id="section_contact" class="tab-pane r-title{{$tabWeb->id}}">
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

	<div class="rsvp-portion sptr-position partion">
		<div class="container contact">	
			<div class="row">
				<div class="col-md-5">
					<form  class="contact-website" action="" method="POST" role="form">
               
                   <div class="form-group">
                       <label for="">From</label>
                       <input  type="text" class="form-control" id="" placeholder="Your Name">
                   </div>
                   <div class="form-group">
                       <label for="">Email</label>
                       <input type="text" class="form-control" id="" placeholder="Email Adress Your">
                   </div>
                   <div class="form-group">
                       <label for="">Subject</label>
                       <input type="text" class="form-control" id="" placeholder="Subject">
                   </div>
                   <div class="form-group">
                       <label for="">Mesages</label>
                       <textarea type="text" class="form-control" id="" placeholder=Messages></textarea> 
                   </div>  
                    <button type="submit" class="btn btn-primary send-contact">Send Mesages</button>                          
               </form> 				
				</div>
			</div>
		</div>	
	</div>
	
</section>