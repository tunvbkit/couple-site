@extends('main-dashboard')
@section('title')
Thông tin cá nhân | thuna.vn
@endsection
@section('nav-dash')
	<!-- Navigation -->
	<div class="row bg-menu-top">
		<div class="navbar">
		  	<div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		        	<span class="sr-only">Toggle navigation</span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		      	</button>
		  	</div>
		  	<div class="navbar-collapse collapse navbar-responsive-collapse">
			    <ul class="nav navbar-nav">
			      	<li class="active">
			      		<a href="{{URL::route('index')}}" title="Trang chủ">
			      			Trang chủ
	 		      		</a>
			      	</li>
			      	<li><a href="{{URL::route('website')}}" title="Website cưới">
			        		Website cưới
			        	</a>
			        </li>
			      	<li><a href="{{URL::route('user-checklist')}}" title="Danh sách công việc">
			      			Danh sách công việc
	 		      		</a>
			      	</li>
			      	<li><a href="{{URL::route('guest-list')}}" title="Danh sách khác mời">
			      			Danh sách khách mời
	 		      		</a>
			      	</li>
			      	<li><a href="{{URL::route('budget')}}" title="Quăn lí ngân sách">
			      			Quản lí ngân sách
	 		      		</a>
			      	</li>
			      	<li class="dropdown">
				        <a href="#" class="dropdown-toggle main_menu" data-toggle="dropdown" title="Âm nhạc">
							Âm nhạc
				        </a>
				        <ul class="dropdown-menu oneUl" role="menu">
				          	<li role="presentation" class="dropdown-header"><span>Nghi lễ</span>
					            <div class="row">
					              <div class="col-xs-6">
					                <ul class="list-unstyled">
					                  <li><a href="{{URL::route('songs', array('mo-dau'))}}">Mở đầu</a></li>
					                  <li><a href="{{URL::route('songs', array('doan-ruoc'))}}">Đoàn rước</a></li>
					                </ul>
					              </div>
					              <div class="col-xs-6">
					                <ul class="list-unstyled">
					                  <li><a href="{{URL::route('songs', array('nghi-thuc'))}}">Nghi thức</a></li>
					                  <li><a href="{{URL::route('songs', array('ket-thuc'))}}">Kết thúc</a></li>
					                </ul>
					              </div>
					            </div>
				          	</li>
				          	<li role="presentation" class="dropdown-header"><span>Đãi tiệc</span>
					            <div class="row">
					              <div class="col-xs-6">
					                <ul class="list-unstyled">
					                  <li><a href="{{URL::route('songs', array('khai-tiec'))}}">Khai tiệc</a></li>
					                  <li><a href="{{URL::route('songs', array('phat-bieu'))}}">Phát biểu</a></li>
					                  <li><a href="{{URL::route('songs', array('cat-banh'))}}">Cắt bánh</a></li>
					                </ul>
					              </div>
					              <div class="col-xs-6">
					                <ul class="list-unstyled">
					                  <li><a href="{{URL::route('songs', array('vao-tiec'))}}">Vào tiệc</a></li>
					                  <li><a href="{{URL::route('songs', array('chuc-mung'))}}">Chúc mừng</a></li>
					                  <li><a href="{{URL::route('songs', array('cuoi-tiec'))}}">Cuối tiệc</a></li>
					                </ul>
					              </div>
					            </div>
				          	</li>
				        </ul>
			      	</li> <!--/music-->

			      	<li><a href="{{URL::action('FortuneController@getIndex')}}" title="Xem ngày cưới">
			      			Xem ngày cưới
			      		</a>
			      	</li>
			    
			    </ul>
		  	</div>
		</div><!--/.nav-->
	</div><!--/.bg-menu-top-->
@endsection
@section('content')

	@foreach($user as $key=>$user_item)
	
	<div class="col-lg-12" style="padding:0; margin-top: 50px;">
		
		<div class="col-xs-12 col-sm-5 col-lg-3 info_user_dashboard">
			<div class="info_user_avatar">
				<span id="prev_output">
					<img src="{{Asset("{$user_item->avatar}")}}">
				</span>
				<a href="javascript:;" onclick="update_avatar();" title="Thay đổi"><i class="fa fa-pencil-square-o fa-fw"></i></a>
				
                <!-- upload ajax -->
				<form style="display:none;" class="form-horizontal" id="upload" action="{{ url('update_avatar') }}" enctype="multipart/form-data" method="post" autocomplete="off">
				    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
				    <input type="file" name="image" id="image" /> 
				</form>
				<!-- end upload ajax -->
				<!-- upload ajax -->
				<script src="{{Asset("assets/js/jquery-ajax-upload-images.js")}}"></script>
				
				<script type="text/javascript">
					function update_avatar(){
						
						$('#image').trigger('click');

						var options = { 
				            beforeSubmit: showRequest,
				            success: showResponse,
				            dataType: 'json' 
				            }; 
				        
				        $('body').delegate('#image','change', function(){
				            $('#upload').ajaxForm(options).submit(); 
				        }); 
				    }

				    function showRequest(formData, jqForm, options) { 
				        $("#validation-errors").hide().empty();
				        $("#output").css('display','none');
				        return true; 
				    } 

				    function showResponse(response, statusText, xhr, $form)  { 
				        if(response.success == false)
				        {
				            var arr = response.errors;
				            $.each(arr, function(index, value)
				            {
				                if (value.length != 0)
				                {
				                    swal("Định dạng ảnh chưa đúng");
				                }
				            });
				            return false;
				        } else {
				            $("#prev_output").html("<img src='"+response.file+"' />");
				        }
				    }

				    // end upload images ajax
				</script>
				<p>
					<a href="javascript:;" id="user_info" ><i class="fa fa-info-circle fa-fw"></i> THÔNG TIN CÁ NHÂN </a><br />
					<a href="javascript:;" id="user_password" ><i class="fa fa-compass fa-fw"></i> MẬT KHẨU </a>
					<script type="text/javascript">
						$('#user_info').click(function(){
							$('div.user_info').show();
							$('div.update_password').hide();
						});
						
						$('#user_password').click(function(){
							$('div.user_info').hide();
							$('div.update_password').slideDown();
						});
					</script>
				</p>
			</div>
			<!-- <div class="info_user_avatar">

					<span>Ứng dụng của bạn</span>
					<ul class="list-unstyled info_user_ul">
		                <li><a href="{{URL::route('website')}}"><i class="fa fa-arrow-right fa-fw"></i>Website cưới</a></li>
		                <li><a href="{{URL::route('guest-list')}}" ><i class="fa fa-arrow-right fa-fw"></i>Danh sách khách mời</a></li>
		                <li><a href="#"><i class="fa fa-arrow-right fa-fw"></i>Sơ đồ ghế ngồi</a></li>
		                <li><a href="{{URL::route('user-checklist')}}"  ><i class="fa fa-arrow-right fa-fw"></i>Danh sách công việc</a></li>
		                <li><a href="#"><i class="fa fa-arrow-right fa-fw"></i>Quản lý vendor</a></li>
		                <li><a href="{{URL::route('budget')}}"  ><i class="fa fa-arrow-right fa-fw"></i>Quản lý ngân sách</a></li>

		            </ul>

			</div>
			<div class="info_user_avatar">

					<span>Cộng đồng</span>

					<ul class="list-unstyled info_user_ul">
		                <li><a href="#"><i class="fa fa-star-o fa-fw"></i>Blog</a></li>
		                <li><a href="#"><i class="fa fa-star-o fa-fw"></i>Website</a></li>
		                <li><a href="#"><i class="fa fa-star-o fa-fw"></i>Forum</a></li>
		            </ul>
					

			</div> -->
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-8 update_password" style="display:none;">
			<form action="{{Asset('profile_password')}}" id="frmEditProfilePassword" method="post">
				<div class="row form-group">
					<label class="col-xs-12 control-label info_user">MẬT KHẨU</label>
				</div>
				<div class="row form-group">
					<div class="col-xs-12 msg_info_user">
						@if(isset($msg))
							{{$msg}}
						@endif
					</div>	
				</div>

				@if( !empty(User::where('id', UserController::id_user())->get()->first()->password) )
				<div class="form-group">
					<label for="password" class="col-xs-12 control-label">Mật khẩu cũ: </label>
					<div class="col-xs-12">
					   	<input type="password" class="form-control" name="password" id="password"  >
					</div>
				</div>
				@endif

			    <div class="form-group">
					<label for="new_password" class="col-xs-12 control-label">Mật khẩu mới: </label>
					<div class="col-xs-12">
					   	<input type="password" class="form-control" name="new_password" id="new_password"  >
					</div>
				</div>
				<div class="form-group">
					<label for="confim_new_password" class="col-xs-12 control-label">Xác nhận mật khẩu: </label>
					<div class="col-xs-12">
					   	<input type="password" class="form-control" name="confim_new_password" id="confim_new_password" >
					</div>
				</div>

			    <div class="form-group">			  		
			  		<div class="col-xs-12">
				    	<button type="submit" style="margin-top:14px;"class="btn btn-primary" id="update_profile_password" > THAY ĐỔI </button>
				    	
				    	<script type="text/javascript">
			  				$('#update_profile_password').click(function(){
			  					$('#frmEditProfilePassword').submit();
			  				});
			  			</script>
			  		</div>
			  		
			  	</div>
			</form>
			<!-- .form -->
		</div>
		<!-- .form edit -->


		<div class="col-xs-12 col-sm-6 col-lg-8 user_info">
			<form action="{{Asset('profile')}}" id="frmEditProfile" method="post">
				<div class="row form-group">
					<label class="col-xs-12 control-label info_user">THÔNG TIN CÁ NHÂN</label>
				</div>
				<div class="row form-group">
					<div class="col-xs-12">
						Bạn hãy cập nhật thông tin để sử dụng tốt nhất các công cụ của thuna.vn
					</div>	
				</div>
				<div class="row form-group">
					<div class="col-xs-12 msg_info_user">
						@if(isset($msg))
							{{$msg}}
						@endif
					</div>	
				</div>
				<div class="form-group">
					<label for="firstname" class="col-xs-8 control-label">Họ: </label>
					<div class="col-xs-12">
					   	<input type="text" class="form-control" name="firstname" id="firstname" value="{{$user_item->firstname}}" >
					</div>
				</div>
				<div class="form-group">
					<label for="lastname" class="col-xs-8 control-label">Tên: </label>
					<div class="col-xs-12">
					   	<input type="text" class="form-control" name="lastname" id="lastname" value="{{$user_item->lastname}}" >
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-xs-8 control-label">Email: </label>
					<div class="col-xs-12">
					   	<input type="email" class="form-control" name="email" id="email" value="{{$user_item->email}}" >
					</div>
				</div>
				<div class="form-group">
					<label for="weddingdate-edit" class="col-xs-12 control-label">Ngày cưới: </label>
			        <div class="col-xs-12">
			            <div class="form-group">
			            	<input type='text' class="form-control" id="weddingdate-edit" name="weddingdate" value="{{UserController::getDates()}}" >
			            	<script type="text/javascript">
			            		$('#weddingdate-edit').bind("mousewheel", function() {
							         return false;
							     });
			            	</script>
			            	<script type="text/javascript" src="{{Asset('assets/js/script-giang.js')}}"></script>
			            </div>
			        </div>
			    </div>
			    <br>
			    <div class="form-group">			  		
			  		<div class="col-xs-8">
				    	<button type="submit" class="btn btn-primary" id="update_profile" > CẬP NHẬT </button>

				    	<script type="text/javascript">
			  				$('#update_profile').click(function(){
			  					$('#frmEditProfile').submit();
			  				});
			  			</script>
			  		</div>
			  		
			  	</div>
			</form>
			<!-- .form -->
		</div>
		<!-- .form edit -->

		
	</div>
	@endforeach
	

<script type="text/javascript">
	$('#frmEditProfile').validate({
		rules:{
			firstname:{
				required:true,
			},
			lastname:{
				required:true,
			},
			email:{
				required:true,
				email: true,
				remote:{
					url:"{{URL::route('check_email_edit',array(UserController::id_user()))}}",
					type:"post"
				}
			},
			weddingdate:{
				required:true,
			}
		},

		messages:{
			firstname:{
				required:"Bạn chưa nhập Họ của mình",
			},
			lastname:{
				required:"Bạn chưa nhập Tên của mình",
			},
			email:{
				required:"Bạn chưa nhập email của mình",
				email:"Email bạn vừa nhập chưa đúng định dạng",
				remote:"Email bạn vừa nhập đã tồn tại, xin nhập email khác"
			},
			weddingdate:{
				required:"Bạn chưa chọn ngày cưới cho mình",
			}
		}
	});

	$('#frmEditProfilePassword').validate({
		rules:{
			password:{
				required: true,
				remote:{
					url:"{{URL::route('check_pass_edit',array(UserController::id_user()))}}",
					type:"post"
				}
			},
			new_password:{
				required:true,
				minlength:3
			},
			confim_new_password:{
				equalTo:"#new_password"
			}
		},

		messages:{
			password:{
				required: "Bạn chưa nhập mật khẩu",
				remote:"Mật khẩu không đúng"
			},
			new_password:{
				required:"Bạn chưa nhập mật khẩu mới",
				minlength:"Mật khẩu phải lớn hơn 3 ký tự"
			},
			confim_new_password:{
				equalTo:"Xác nhận mật khẩu chưa đúng"
			}
		}
	});
</script>

@endsection