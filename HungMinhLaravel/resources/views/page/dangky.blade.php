@extends('master')
@section('content')
<div class="fvc" style="float:left;width:100%;">

	<div class="banner_page_list">

		<h1>Đăng ký tài khoản</h1>

	</div>
	<div class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home"> <a href="{{route('home')}}" title="Trang chủ">Trang chủ &nbsp;</a></li>
				<!-- blog -->

				<li><strong>Đăng ký tài khoản</strong></li>

				<!-- current_tags -->
			</ul>
		</div>
	</div>

	<section class="tzpage-default">
		<h3 class="tz-title-bold-3">ĐĂNG KÝ THÔNG TIN TÀI KHOẢN</h3>
		<div class="container">
			@if(Session::has('thongbao'))
			<div class="alert alert-success">{{Session::get('thongbao')}}</div>
			@endif
			@if(Session::has('thanhcong'))
			<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
			@endif
			<div class="joom-login">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">					
						<form accept-charset="UTF-8" action="{{route('register')}}" id="tzrgister" class="shopform" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Họ & Tên: *" type="text" name="full_name" id="full_name" required="">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Email: *" type="text" name="email" id="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation="email">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Địa chỉ: *" type="text" name="address" id="address" required="">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Số điện thoại: *" type="text" name="phone" id="phone" required="">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Mật khẩu: *" type="password" name="password" id="password" required="">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Nhập lại mật khẩu: *" type="password" name="re_password" id="re_password" required="">
								</div>
							</div>
							<div class="submit-form">
								<button type="submit"><span>ĐĂNG KÝ</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection