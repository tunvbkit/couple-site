<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 phara-temp wedding-contact" >
  <img src="{{Asset("{$backgrounds}")}}" class="img-responsive" alt="Image" style="margin-top:-2%;">     
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-item r-title{{$tabWeb->id}}" >
    <div class="inline-title text-center">
            <h3 class="text-center title-tab" style="font-familly: {{$website_item->font}}; color: #{{$website_item->color2}}" id = "nameTitle{{$tabWeb->id}}">
                {{$tabWeb->title}}
            </h3>
            <span onclick="sendTitle({{$tabWeb->id}},{{$tabWeb->visiable}})" class="glyphicon glyphicon-edit" data-toggle="modal" data-target='#modal-edit-menu'></span>
        </div>
     <div class="phara-margin ">
        <div class="row contact-content container">
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 show-content">
                <form  class="contact-website" action="" method="POST" role="form">
               
                   <div class="form-group">
                       <span for="">From</span>
                       <input  type="text" class="form-control" id="" placeholder="Your Name">
                   </div>
                   <div class="form-group">
                       <span for="">Email</span>
                       <input type="text" class="form-control" id="" placeholder="Email Adress Your">
                   </div>
                   <div class="form-group">
                       <span for="">Subject</span>
                       <input type="text" class="form-control" id="" placeholder="Subject">
                   </div>
                   <div class="form-group">
                       <span for="">Mesages</span>
                       <input type="text" class="form-control" id="" placeholder=Messages>
                   </div>  
                    <button type="submit" class="btn btn-success send-contact">Send Mesages</button>                                                    
               </form>                            
            </div>

        </div>            
    </div>
               
  </div>
</div>
