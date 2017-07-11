@extends('master')
@section('content')
<div class="fvc" style="float:left;width:100%;">

	<div class="banner_page_list">

		<h1>Đăng nhập tài khoản</h1>

	</div>
	<div class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home"> <a href="{{route('home')}}" title="Trang chủ">Trang chủ &nbsp;</a></li>
				<!-- blog -->

				<li><strong>Đăng nhập tài khoản</strong></li>


				<!-- current_tags -->
			</ul>
		</div>
	</div>

	<section class="tzpage-default">
		<div class="container">
			<div class="joom-login">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
					<h3 class="tz-title-bold-3">ĐĂNG NHẬP TÀI KHOẢN</h3>
					@if(Session::has('thatbai'))
					<div class="alert alert-danger">{{Session::get('thatbai')}}</div>
					@endif				
						<form class="form-horizontal" accept-charset="UTF-8" action="{{route('login')}}" id="customer_login" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Email *" type="email" title="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation="email" required="" value="" name="email">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Mật khẩu: *" type="password" title="Password" name="password" required="">
								</div>
							</div>
							<div class="fvc">
								<div class="f_pass">
									<a class="forgot forgot-word" href="#recover" onclick="showRecoverPasswordForm();return false;" id="RecoverPassword">Quên mật khẩu?</a>
									<a href="{{route('register')}}">Đăng ký tài khoản mới ?</a>
								</div>
							</div>
							<div class="controls">
								<button name="send" type="submit" class="btn btn-primary"> Đăng nhập</button>
							</div>
							<div class="controls">
								<a href="{{route('provider_login','facebook')}}" class="btn btn-primary">Đăng nhập bằng Facebook</a>
								<a href="{{route('provider_login','google')}}" class="btn btn-primary">Đăng nhập bằng Google</a>
							</div>
						</form>
						<div id="recover_password" style="display: none;">
							<h3 class="tz-title-bold-3">LẤY MẬT KHẨU</h3>                     
							<p id="intro note-reset">Chúng tôi sẽ gửi cho bạn một email để kích hoạt việc đặt lại mật khẩu.</p>

							<form accept-charset="UTF-8" action="/account/recover" id="recover_customer_password" method="post">
								<input name="FormType" type="hidden" value="recover_customer_password">
								<input name="utf8" type="hidden" value="true">

								<div class="form-horizontal">
									<input placeholder="Email*" type="email" class="input-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation="email" value="" title="email" name="email" id="email">
									<p class="action-btn controls" style="margin-top: 15px;">
										<button type="submit" class="button stl_btn_reg btn btn-primary">Gửi</button>
										hoặc <a href="#" onclick="hideRecoverPasswordForm();return false;">Hủy</a>
									</p>
								</div>
							</form>     
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>  
		function showRecoverPasswordForm() {
			document.getElementById('recover_password').style.display = 'block';
			document.getElementById('customer_login').style.display='none';
		}

		function hideRecoverPasswordForm() {
			document.getElementById('recover_password').style.display = 'none';
			document.getElementById('customer_login').style.display = 'block';
		}

	// Allow deep linking to the recover password form
	if (window.location.hash == '#recover') { showRecoverPasswordForm() }

	// reset_success is only true when the reset form is
</script>
</div>
@endsection