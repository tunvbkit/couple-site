<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 phara-temp wedding-contact r-title{{$tabWeb->id}}" >
  <div class="inline-title text-center">
        <h3 class="text-center title-tab section-title section-title-about" style="font-familly: {{$website_item->font}}; color: #{{$website_item->color2}}" id = "nameTitle{{$tabWeb->id}}">
            {{$tabWeb->title}}
        </h3>
      <span onclick="sendTitle({{$tabWeb->id}},{{$tabWeb->visiable}})" class="glyphicon glyphicon-edit" data-toggle="modal" data-target='#modal-edit-menu'></span>
  </div>

     <div class="phara-margin ">
        <div class="row contact-content container">
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            </div> 
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
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
                       <input type="text" class="form-control" id="" placeholder=Messages>
                   </div>  
                    <button type="submit" class="btn btn-primary send-contact">Send Mesages</button>                          
               </form>                            
            </div>
           
        </div>            
    </div>
               
    </div>
  

