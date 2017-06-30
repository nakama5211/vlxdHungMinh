@extends('master')
@section('content')

<div class="fvc" style="float:left;width:100%;">
			
<div class="banner_page_list">
	
	<h1>Trang khách hàng</h1>
	
</div>
<div class="breadcrumbs">
	<div class="container">
		<ul>
			<li class="home"> <a href="/" title="Trang chủ">Trang chủ &nbsp;</a></li>
			<!-- blog -->
			
			<li><strong>Trang khách hàng</strong></li>
			
			<!-- current_tags -->
			





			
		</ul>
	</div>
</div>

<!-- main-container -->
<section class="signup page_customer_account">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-main-acount">
				<div id="parent" class="row">
					<div id="a" class="col-xs-12 col-sm-12 col-lg-9 col-left-account">
						<div class="page-title m992">
							<h1 class="title-head"><a href="#">Thông tin tài khoản</a></h1>
						</div>
						<div class="form-signup name-account m992"> 
							<p><strong>Xin chào, <a href="/account/addresses" style="color:#bda87f;">Tran van hung</a>&nbsp;!</strong></p>
						</div>
						<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
							<div class="my-account">
								<div class="dashboard">
									
									<div class="recent-orders">
										<div class="table-responsive tab-all" style="overflow-x:auto;">
											<table class="table table-cart" id="my-orders-table">
												<thead class="thead-default">
													<tr>
														<th>Đơn hàng</th>
														<th>Ngày</th>
														<th>Chuyển đến</th>
														<th>Địa chỉ</th>
														<th>Giá trị đơn hàng</th>
														<th>Tình trạng thanh toán</th>
														<th>Mã đơn hàng</th>
													</tr>
												</thead>

												<tbody>
													
													
													<tr class="first odd">
														<td><a style="color:#bda87f;" href="/account/orders/3473676">Chi tiết</a></td>
														<td>29/ 06/ 2017</td>
														<td> Tran van hung</td>
														<td> 
															TP Hồ Chí Minh 
														</td>
														<td><span class="price">8.900.040.000₫</span></td>
														<td>  
															    
															    
															Chưa thanh toán          
															                 
															
														</td>
														<td class="a-center last"><span class="nobr"> <a style="color:#bda87f;" href="/account/orders/3473676">#1024</a></span></td>
													</tr>
													
													
												</tbody>


											</table>

										</div>

										<div class="text-xs-right">

										</div>
									</div>
									<div class="paginate-pages pull-right page-account">
										<div class="tzpagenavi-shop">
	<ul>
		
		
		
		
		<li class="active"><a href="#" style="pointer-events:none">1</a></li>
		
		
		                
		                  
	</ul>
</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div id="b" class="col-xs-12 col-sm-12 col-lg-3 col-right-account">
						<div class="page-title mx991">
							<h1 class="title-head"><a href="#">Thông tin tài khoản</a></h1>
						</div>
						<div class="form-signup body_right mx991"> 
							<p><strong>Xin chào, <a href="/account/addresses" style="color:#bda87f;">Tran van hung</a>&nbsp;!</strong></p>
						</div>
						<div class="block-account">
							<div class="block-title-account"><h5>Tài khoản của tôi</h5></div>
							<div class="block-content form-signup">
								<p>Tên tài khoản: <strong style="line-height: 20px;"> Tran van hung!</strong></p>
								<p><i class="fa fa-home font-some" aria-hidden="true"></i>  <span>Địa chỉ: TP Hồ Chí Minh</span></p>
								<p><i class="fa fa-mobile font-some" aria-hidden="true"></i> <span>Điện thoại: 01234568</span> </p>
								<p><i class="fa fa-map-marker font-some" aria-hidden="true"></i> <span> Địa chỉ 1: hcm</span></p>
								<p><i class="fa fa-yelp font-some" aria-hidden="true"></i> <span> Công ty: </span></p>
								<p><i class="fa fa-plane font-some" aria-hidden="true"></i> <span> Quốc gia :Việt Nam</span></p> 
								<p><i class="fa fa-code font-some" aria-hidden="true"></i> <span> Zip code: </span></p>
								<p style="margin-top:20px;"><a href="/account/addresses" class="btn btn-bg full-width btn-lg btn-style article-readmore">Sổ địa chỉ 1</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!--End main-container -->
		</div>
@endsection