@extends('master')
@section('content')

@foreach ($product as $pro)
<div class="fvc" style="float:left;width:100%;">

	<div class="banner_page_list">

		<h1>{{$pro->name}}</h1>

	</div>
	<div class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home"> <a href="{{route('home')}}" title="Trang chủ">Trang chủ &nbsp;</a></li>


				<li><a href="frontpage"> Sản phẩm mới &nbsp;</a></li>

				<li><strong>{{$pro->name}}</strong></li><li>

			</li></ul>
		</div>
	</div>

	<div class="product-view-area" itemscope="" itemtype="http://schema.org/Product">
		<meta itemprop="url" content="//vlxdmanam.bizwebvietnam.net/san-go-tu-nhien-tn3">
		<meta itemprop="image" content="//bizweb.dktcdn.net/thumb/grande/100/226/987/products/1945359ac16-2-1.jpg?v=1497962051517">
		<meta itemprop="shop-currency" content="VND">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-5 col-lg-5 col-md-5">



					<div id="sync1" class="owl-carousel large-image owl-theme" style="opacity: 1; display: block;">

						<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1132px; left: 0px; display: block;"><div class="owl-item" style="width: 283px;"><div class="item">
							<img class="sp-image" src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/1945359ac16-2-1.jpg?v=1497962051517" alt="Sàn gỗ tự nhiên TN3">
						</div></div><div class="owl-item" style="width: 283px;"><div class="item">
						<img class="sp-image" src="image/{{$pro->image}}" alt="Sàn gỗ tự nhiên TN3">
					</div></div></div></div>
					
					
					
					<div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div></div>
					<div id="sync2" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

						<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 228px; left: 0px; display: block;"><div class="owl-item synced" style="width: 57px;"><div class="item">
							<img src="//bizweb.dktcdn.net/thumb/small/100/226/987/products/1945359ac16-2-1.jpg?v=1497962051517" alt="Sàn gỗ tự nhiên TN3">
						</div></div><div class="owl-item" style="width: 57px;"><div class="item">
						<img src="//bizweb.dktcdn.net/thumb/small/100/226/987/products/2006996ac16-1-1.jpg?v=1497962051517" alt="Sàn gỗ tự nhiên TN3">
					</div></div></div></div>
					
					
					
				</div>
				
				
			</div>
			<div class="col-xs-12 col-sm-7 col-lg-7 col-md-7">
				<div class="product-details-area">
					<div class="product-description">
						<form action="/cart/add" method="post" enctype="multipart/form-data" id="add-to-cart-form" class="cart">
							<h2 itemprop="name">{{$pro->name}}</h2>
							<div class="short-description">
								
								<p class="stock-status">Còn hàng</p>
								
								<div class="price-box-small">
									
									<span itemprop="price" class="special-price" style="font-size: 24px;">
										{{number_format($pro->unit_price)}} VNĐ
									</span>
									
								</div>
								<p class="des_content"> Là loại gỗ được khai thác trực tiếp từ những cây trồng lấy gỗ trong rừng tự nhiên hoặc từ những cây gỗ rừng trồng lấy nhựa như cao su, cây lấy tinh dầu, lấy quả có thân cứng chắc không bị hỏng trong thời gian thì được đưa...</p>
							</div>
							

							
							<input type="hidden" name="variantId" value="11517890">
							
							
							<div class="add-to-cart">
								<label for="qty">Số lượng:</label>
								<div class="pull-left">
									<div class=" pull-left">
										<input onkeypress="isAlphaNum(event);" type="text" title="Số lượng" value="1" maxlength="12" id="qty" name="quantity" class="input-text qty" oninput="validity.valid||(value='');">
										<div class="btn_count">
											<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-angle-up"></i></button>
											<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-angle-down"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="qnt-addcart clearfix">
								
								<button class="btn-cart add_to_cart button_detail_product" title="MUA NGAY" type="submit">Mua ngay</button>
								
							</div>
							<div class="detailcall clearfix">
								<div class="callphoneicon">
									<i class="fa fa-phone"></i>
								</div>
								<a href="tel:19001009">Gọi ngay 1900 1009 <br><span>(Đặt hàng nhanh chóng)</span></a>
							</div>
							<div class="social-media">
								<ul>
									<li>
										<a style="padding: 10px 15px;" class="color-tooltip facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=http://vlxdmanam.bizwebvietnam.net/san-go-tu-nhien-tn3&amp;t=Sàn gỗ tự nhiên TN3" data-toggle="tooltip" title="" data-original-title="Facebook">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
										<a style="padding: 10px 13px;" class="color-tooltip twitter" target="_blank" data-toggle="tooltip" title="" href="http://twitter.com/share?url=http://vlxdmanam.bizwebvietnam.net/san-go-tu-nhien-tn3&amp;text=Sàn gỗ tự nhiên TN3&amp;via=TWITTER_NAME" data-original-title="Twitter">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li>
										<a style="padding: 10px 10px;" class="color-tooltip google-plus" target="_blank" data-toggle="tooltip" title="" href="https://plus.google.com/share?url=http://vlxdmanam.bizwebvietnam.net/san-go-tu-nhien-tn3" data-original-title="Google-plus">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
									<li>
										<a style="padding: 10px 13px;" class="color-tooltip dribbble" target="_blank" data-toggle="tooltip" title="" href="http://www.pinterest.com/pin/create/button/?url=http://vlxdmanam.bizwebvietnam.net/san-go-tu-nhien-tn3&amp;description=Sàn gỗ tự nhiên TN3&amp;media=//bizweb.dktcdn.net/100/226/987/products/1945359ac16-2-1.jpg?v=1497962051517" data-original-title="instagram">
											<i class="fa fa-instagram"></i>
										</a>
									</li>
								</ul>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- PRODUCT-VIEW-AREA-END -->
<!-- PRODUCT-OVERVIEW-TAB-START -->
<div class="product-overview-tab">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="tab-menu-area">
					<ul class="tab-menu">
						<li class="active">
							<a style="padding-left:0px;" data-toggle="tab" href="description">Thông tin sản phẩm</a>
						</li>
						
						<li>
							<a data-toggle="tab" href="#reviews">Giới thiệu</a>
						</li>
						
						<li>
							<a data-toggle="tab" href="#reviews2">Tags</a>
						</li>
					</ul>
				</div>
				<div class="tab-content " style="">
					<div id="description" class="tab-pane fade ">
						<p style=" font-family: Arial, Verdana, sans-serif; font-size: 14px;;">Là loại gỗ được khai thác trực tiếp từ những cây trồng lấy gỗ trong rừng tự nhiên hoặc từ những cây gỗ rừng trồng lấy nhựa như cao su, cây lấy tinh dầu, lấy quả có thân cứng chắc không bị hỏng trong thời gian thì được đưa vào sản xuất trự tiếp đồ nội thất không phải qua giai đoạn chế biến gỗ thành vật liệu khác.</p>

						<p style="color: rgb(0, 0, 0); font-family: Arial, Verdana, sans-serif; font-size: 14px; line-height: normal;">- Chất liệu gỗ xẻ xà cồ: Gỗ Keo, Thông, bạch đàn.</p>

						<p style="color: rgb(0, 0, 0); font-family: Arial, Verdana, sans-serif; font-size: 14px; line-height: normal;">- Kích thước: Dài 2m, 2.5m, 3m, 4m, 5m</p>

						<p style="color: rgb(0, 0, 0); font-family: Arial, Verdana, sans-serif; font-size: 14px; line-height: normal;">- Công dụng: xà gồ, cột chống, thi công và xây dựng nhà ở.</p>

						<p style="color: rgb(0, 0, 0); font-family: Arial, Verdana, sans-serif; font-size: 14px; line-height: normal; text-align: center;"><img alt="" src="http://media.bizwebmedia.net//sites/96246/data/images/2014/12/1945359ac16_2.jpg" style="width: 500px; height: 500px;"></p>

						<p style="color: rgb(0, 0, 0); font-family: Arial, Verdana, sans-serif; font-size: 14px; line-height: normal;">Sàn gỗ tự nhiên sử dụng từ những loại gỗ cứng, chịu lực tốt, chống ma sát, mài mòn… Trước đây để làm sàn gỗ người ta thường phải sử dụng những loại gỗ quí như gỗ gõ, gỗ cẩm lai, gỗ căm xe… Và để sử hữu sàn gỗ tự nhiên cho ngôi nhà thân yêu của mình là một điều rất xa xỉ,vì sàn phẩm có giá thành rất cao do sử dụng những nguyên liệu quí với kỷ thuật gia công lạc hậu chủ yếu làm thủ công cho ra sản phẩm không có tính thẩm mỹ cao. Ngày nay bằng những kỷ thuật tiên tiến kết hợp máy móc hiện đại trong ngành công nghiệp chế biên gỗ đã tạo ra sàn gỗ tự nhiên từ nhiều chủng loại gỗ khác nhau, sản phẩm sàn gỗ tự nhiên đa dạng hơn, phong phú hơn, sản phẩm đến gần với người tiêu dung hơn.</p>

						<p style="color: rgb(0, 0, 0); font-family: Arial, Verdana, sans-serif; font-size: 14px; line-height: normal; text-align: center;"><img alt="" src="http://media.bizwebmedia.net//sites/96246/data/images/2014/12/2006996ac16_1.jpg" style="width: 500px; height: 500px;"></p>
					</div>
					
					<div id="reviews" class="tab-pane fade">
						<div class="tags">
							Giới thiệu
						</div>
					</div>
					
					<div id="reviews2" class="tab-pane fade">
						<div class="tags">
							<ul>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- PRODUCT-OVERVIEW-TAB-END -->



<section class="tz-lastest-shop">
	<div class="new_title_color center" style="margin-bottom:90px;">
		<h2><span></span>Sản phẩm liên quan<span></span></h2>	
	</div>
	<div class="container">
		<div id="featured-slider-2" class=" row">
			<div class="slider-items slider-width-col4 owl-carousel owl-theme" style="opacity: 1; display: block;">
				
				<div class="owl-wrapper-outer autoHeight" style="height: 400px;"><div class="owl-wrapper" style="width: 6000px; left: 0px; display: block;"><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
						<div class="laster-thumb row" onclick="window.location.href='/san-go-ngoai-troi-nt2-1'">

							<a href="/san-go-ngoai-troi-nt2-1">
								<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/1001943ac7-2-1.jpg?v=1497962054350" alt="Sàn gỗ ngoài trời NT2">
							</a>

							<form action="/cart/add" method="post" class="variants" id="product-actions-7246558" enctype="multipart/form-data">
								<span class="tz-shop-meta">


									<input type="hidden" name="variantId" value="11517894">
									<a href="javascript:void(0);" class="tzshopping add_to_cart add-cart" title="Mua ngay">
										Mua ngay
									</a>

									<a href="/san-go-ngoai-troi-nt2-1" class="tzheart">
										Chi tiết
									</a>
								</span>
							</form>

						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
						<div class="row">
							<div class="left_cnt_product">
								<h3><a href="/san-go-ngoai-troi-nt2-1">Sàn gỗ ngoài trời NT2</a></h3>

							</div>
							<div class="right_cnt_product">


								<small>800.000₫</small>


							</div>
						</div>
					</div>
				</div></div><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
					<div class="laster-thumb row" onclick="window.location.href='/san-go-tu-nhien-tn1'">

						<a href="/san-go-tu-nhien-tn1">
							<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/1500423ac13-1-1.jpg?v=1497962053487" alt="Sàn gỗ tự nhiên TN1">
						</a>

						<form action="/cart/add" method="post" class="variants" id="product-actions-7246557" enctype="multipart/form-data">
							<span class="tz-shop-meta">


								<input type="hidden" name="variantId" value="11517893">
								<a href="javascript:void(0);" class="tzshopping add_to_cart add-cart" title="Mua ngay">
									Mua ngay
								</a>

								<a href="/san-go-tu-nhien-tn1" class="tzheart">
									Chi tiết
								</a>
							</span>
						</form>

					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
					<div class="row">
						<div class="left_cnt_product">
							<h3><a href="/san-go-tu-nhien-tn1">Sàn gỗ tự nhiên TN1</a></h3>

						</div>
						<div class="right_cnt_product">


							<small>790.000₫</small>


						</div>
					</div>
				</div>
			</div></div><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
				<div class="laster-thumb row" onclick="window.location.href='/san-go-tu-nhien-tn3'">

					<a href="/san-go-tu-nhien-tn3">
						<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/1945359ac16-2-1.jpg?v=1497962051517" alt="Sàn gỗ tự nhiên TN3">
					</a>

					<form action="/cart/add" method="post" class="variants" id="product-actions-7246555" enctype="multipart/form-data">
						<span class="tz-shop-meta">


							<input type="hidden" name="variantId" value="11517890">
							<a href="javascript:void(0);" class="tzshopping add_to_cart add-cart" title="Mua ngay">
								Mua ngay
							</a>

							<a href="/san-go-tu-nhien-tn3" class="tzheart">
								Chi tiết
							</a>
						</span>
					</form>

				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
				<div class="row">
					<div class="left_cnt_product">
						<h3><a href="/san-go-tu-nhien-tn3">Sàn gỗ tự nhiên TN3</a></h3>

					</div>
					<div class="right_cnt_product">


						<small>780.000₫</small>


					</div>
				</div>
			</div>
		</div></div><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
			<div class="laster-thumb row" onclick="window.location.href='/san-go-tu-nhien-tn4'">

				<a href="/san-go-tu-nhien-tn4">
					<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/2053403ac15-1-1.jpg?v=1497962050763" alt="Sàn gỗ tự nhiên TN4">
				</a>

				<form action="/cart/add" method="post" class="variants" id="product-actions-7246554" enctype="multipart/form-data">
					<span class="tz-shop-meta">


						<input type="hidden" name="variantId" value="11517889">
						<a href="javascript:void(0);" class="tzshopping add_to_cart add-cart" title="Mua ngay">
							Mua ngay
						</a>

						<a href="/san-go-tu-nhien-tn4" class="tzheart">
							Chi tiết
						</a>
					</span>
				</form>

			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
			<div class="row">
				<div class="left_cnt_product">
					<h3><a href="/san-go-tu-nhien-tn4">Sàn gỗ tự nhiên TN4</a></h3>

				</div>
				<div class="right_cnt_product">


					<small>800.000₫</small>


				</div>
			</div>
		</div>
	</div></div><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
		<div class="laster-thumb row" onclick="window.location.href='/vi-go-ngoai-troi-vg3'">

			<a href="/vi-go-ngoai-troi-vg3">
				<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/384629858-1.jpg?v=1497962049787" alt="Vỉ gỗ ngoài trời VG3">
			</a>

			<form action="/cart/add" method="post" class="variants" id="product-actions-7246553" enctype="multipart/form-data">
				<span class="tz-shop-meta">


					<input type="hidden" name="variantId" value="11517888">
					<a href="javascript:void(0);" class="tzshopping add_to_cart add-cart" title="Mua ngay">
						Mua ngay
					</a>

					<a href="/vi-go-ngoai-troi-vg3" class="tzheart">
						Chi tiết
					</a>
				</span>
			</form>

		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
		<div class="row">
			<div class="left_cnt_product">
				<h3><a href="/vi-go-ngoai-troi-vg3">Vỉ gỗ ngoài trời VG3</a></h3>

			</div>
			<div class="right_cnt_product">


				<small>1.230.000₫</small>


			</div>
		</div>
	</div>
</div></div><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="laster-thumb row" onclick="window.location.href='/vi-go-ngoai-troi-vg4'">

		<a href="/vi-go-ngoai-troi-vg4">
			<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/393929351-1.jpg?v=1497962048903" alt="Vỉ gỗ ngoài trời VG4">
		</a>

		<form action="/cart/add" method="post" class="variants" id="product-actions-7246552" enctype="multipart/form-data">
			<span class="tz-shop-meta">


				<input type="hidden" name="variantId" value="11517887">
				<a href="javascript:void(0);" class="tzshopping add_to_cart add-cart" title="Mua ngay">
					Mua ngay
				</a>

				<a href="/vi-go-ngoai-troi-vg4" class="tzheart">
					Chi tiết
				</a>
			</span>
		</form>

	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="row">
		<div class="left_cnt_product">
			<h3><a href="/vi-go-ngoai-troi-vg4">Vỉ gỗ ngoài trời VG4</a></h3>
			
		</div>
		<div class="right_cnt_product">
			
			
			<small>990.000₫</small>
			
			
		</div>
	</div>
</div>
</div></div><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="laster-thumb row" onclick="window.location.href='/vi-go-ngoai-troi-vg5'">

		<a href="/vi-go-ngoai-troi-vg5">
			<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/450724145-2542210-1.jpg?v=1497962047720" alt="Vỉ gỗ ngoài trời VG5">
		</a>

		<form action="/cart/add" method="post" class="variants" id="product-actions-7246551" enctype="multipart/form-data">
			<span class="tz-shop-meta">


				<input type="hidden" name="variantId" value="11517886">
				<a href="javascript:void(0);" class="tzshopping add_to_cart add-cart" title="Mua ngay">
					Mua ngay
				</a>

				<a href="/vi-go-ngoai-troi-vg5" class="tzheart">
					Chi tiết
				</a>
			</span>
		</form>

	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="row">
		<div class="left_cnt_product">
			<h3><a href="/vi-go-ngoai-troi-vg5">Vỉ gỗ ngoài trời VG5</a></h3>
			
		</div>
		<div class="right_cnt_product">
			
			
			<small>990.000₫</small>
			
			
		</div>
	</div>
</div>
</div></div><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="laster-thumb row" onclick="window.location.href='/vi-go-ngoai-troi-vg7'">

		<a href="/vi-go-ngoai-troi-vg7">
			<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/485780449-2636516.jpg?v=1497962046960" alt="Vỉ gỗ ngoài trời VG7">
		</a>

		<form action="/cart/add" method="post" class="variants" id="product-actions-7246550" enctype="multipart/form-data">
			<span class="tz-shop-meta">


				<input type="hidden" name="variantId" value="11517885">
				<a href="javascript:void(0);" class="tzshopping add_to_cart add-cart" title="Mua ngay">
					Mua ngay
				</a>

				<a href="/vi-go-ngoai-troi-vg7" class="tzheart">
					Chi tiết
				</a>
			</span>
		</form>

	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="row">
		<div class="left_cnt_product">
			<h3><a href="/vi-go-ngoai-troi-vg7">Vỉ gỗ ngoài trời VG7</a></h3>
			
		</div>
		<div class="right_cnt_product">
			
			
			<small>1.290.000₫</small>
			
			
		</div>
	</div>
</div>
</div></div><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="laster-thumb row" onclick="window.location.href='/van-go-cong-nghe-duc-cnd5'">

		<a href="/van-go-cong-nghe-duc-cnd5">
			<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/2530929ac8-1-5126430-1.jpg?v=1497962045827" alt="Ván gỗ công nghệ Đức CND5">
		</a>

		<form action="/cart/add" method="post" class="variants" id="product-actions-7246549" enctype="multipart/form-data">
			<span class="tz-shop-meta">


				<input type="hidden" name="variantId" value="11517884">
				<a href="javascript:void(0);" class="tzshopping add_to_cart add-cart" title="Mua ngay">
					Mua ngay
				</a>

				<a href="/van-go-cong-nghe-duc-cnd5" class="tzheart">
					Chi tiết
				</a>
			</span>
		</form>

	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="row">
		<div class="left_cnt_product">
			<h3><a href="/van-go-cong-nghe-duc-cnd5">Ván gỗ công nghệ Đức CND5</a></h3>
			
		</div>
		<div class="right_cnt_product">
			
			
			<small>570.000₫</small>
			
			
		</div>
	</div>
</div>
</div></div><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="laster-thumb row" onclick="window.location.href='/van-go-cong-nghe-duc-cnd8'">

		<a href="/van-go-cong-nghe-duc-cnd8">
			<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/3128139201302004055-121616-2044353-jpeg.jpg?v=1497962044733" alt="Ván gỗ công nghệ Đức CND8">
		</a>

		<form action="/cart/add" method="post" class="variants" id="product-actions-7246548" enctype="multipart/form-data">
			<span class="tz-shop-meta">


				<input type="hidden" name="variantId" value="11517883">
				<a href="javascript:void(0);" class="tzshopping add_to_cart add-cart" title="Mua ngay">
					Mua ngay
				</a>

				<a href="/van-go-cong-nghe-duc-cnd8" class="tzheart">
					Chi tiết
				</a>
			</span>
		</form>

	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="row">
		<div class="left_cnt_product">
			<h3><a href="/van-go-cong-nghe-duc-cnd8">Ván gỗ công nghệ Đức CND8</a></h3>
			
		</div>
		<div class="right_cnt_product">
			
			
			<small>799.000₫</small>
			
			
		</div>
	</div>
</div>
</div></div><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="laster-thumb row" onclick="window.location.href='/van-go-cong-nghe-viet-nam-vn6'">

		<a href="/van-go-cong-nghe-viet-nam-vn6">
			<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/1718906pb-chong-am-loi-xanh.jpg?v=1497962043953" alt="Ván gỗ công nghệ Việt Nam VN6">
		</a>

		<form action="/cart/add" method="post" class="variants" id="product-actions-7246547" enctype="multipart/form-data">
			<span class="tz-shop-meta">


				<input type="hidden" name="variantId" value="11517882">
				<a href="javascript:void(0);" class="tzshopping add_to_cart add-cart" title="Mua ngay">
					Mua ngay
				</a>

				<a href="/van-go-cong-nghe-viet-nam-vn6" class="tzheart">
					Chi tiết
				</a>
			</span>
		</form>

	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="row">
		<div class="left_cnt_product">
			<h3><a href="/van-go-cong-nghe-viet-nam-vn6">Ván gỗ công nghệ Việt Nam VN6</a></h3>
			
		</div>
		<div class="right_cnt_product">
			
			
			<small>300.000₫</small>
			
			
		</div>
	</div>
</div>
</div></div><div class="owl-item" style="width: 250px;"><div class="laster-shop-item">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="laster-thumb row" onclick="window.location.href='/van-go-cong-nghe-viet-nam-vn5'">

		<a href="/van-go-cong-nghe-viet-nam-vn5">
			<img src="//bizweb.dktcdn.net/thumb/large/100/226/987/products/1541512hd135x25-coffee-w-2625569.png?v=1497962039023" alt="Ván gỗ công nghệ Việt Nam VN5">
		</a>

		<form action="/cart/add" method="post" class="variants" id="product-actions-7246545" enctype="multipart/form-data">
			<span class="tz-shop-meta">


				<a href="/van-go-cong-nghe-viet-nam-vn5" class="tzshopping" title="Chọn sản phẩm">
					Mua ngay
				</a>

				<a href="/van-go-cong-nghe-viet-nam-vn5" class="tzheart">
					Chi tiết
				</a>
			</span>
		</form>

	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
	<div class="row">
		<div class="left_cnt_product">
			<h3><a href="/van-go-cong-nghe-viet-nam-vn5">Ván gỗ công nghệ Việt Nam VN5</a></h3>
			
		</div>
		<div class="right_cnt_product">
			
			
			<small>450.000₫</small>
			
			
		</div>
	</div>
</div>
</div></div></div></div>























<div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
</div>
</div><!--end class container-->
</section><!--end class tz-lastest-shop-->
<script src="//bizweb.dktcdn.net/assets/themes_support/option-selectors.js?4" type="text/javascript"></script>
<script>  
	var selectCallback = function(variant, selector) {

		var addToCart = jQuery('.btn-cart'),
		productPrice = jQuery('.special-price'),
		comparePrice = jQuery('.old-price');

		if (variant) {
			if (variant.available) {
				// We have a valid product variant, so enable the submit button
				addToCart.removeAttr('disabled');

			} else {
				// Variant is sold out, disable the submit button
				addToCart.attr('disabled', 'disabled');
			}

			// Regardless of stock, update the product price
			productPrice.html(Bizweb.formatMoney(variant.price, "{{0}}₫"));

			// Also update and show the product's compare price if necessary
			if ( variant.compare_at_price > variant.price ) {

				comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{0}}₫")).show();
			} else {
				comparePrice.hide();     
			} 

		} else {
			// The variant doesn't exist. Just a safeguard for errors, but disable the submit button anyway
			addToCart.val('Unavailable').addClass('disabled').attr('disabled', 'disabled');
		}
		/*begin variant image*/
		if (variant && variant.image) {  
			var originalImage = jQuery(".large-image img"); 
			var newImage = variant.image;
			var element = originalImage[0];
			Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
				jQuery(element).parents('a').attr('href', newImageSizedSrc);
				jQuery(element).attr('src', newImageSizedSrc);
			});
		}
		/*end of variant image*/
	};
	jQuery(function($) {
		

		 // Add label if only one product option and it isn't 'Title'. Could be 'Size'.
		 

		  // Hide selectors if we only have 1 variant and its title contains 'Default'.
		  
		  $('.selector-wrapper').hide();

		});
	</script>

	<div class="tz-partner">
		<div class="container">
			<ul class="partner-slider owl-carousel owl-theme" style="opacity: 1; display: block;">
				<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4320px; left: 0px; display: block;"><div class="owl-item" style="width: 240px;"><li>
					<a href=""><img src="//bizweb.dktcdn.net/100/226/987/themes/553699/assets/partler1.png?1497962036095" alt="partler4"></a>
				</li></div><div class="owl-item" style="width: 240px;"><li>
				<a href=""><img src="//bizweb.dktcdn.net/100/226/987/themes/553699/assets/partler2.png?1497962036095" alt="partler4"></a>
			</li></div><div class="owl-item" style="width: 240px;"><li>
			<a href=""><img src="//bizweb.dktcdn.net/100/226/987/themes/553699/assets/partler3.png?1497962036095" alt="partler4"></a>
		</li></div><div class="owl-item" style="width: 240px;"><li>
		<a href=""><img src="//bizweb.dktcdn.net/100/226/987/themes/553699/assets/partler4.png?1497962036095" alt="partler4"></a>
	</li></div><div class="owl-item" style="width: 240px;"><li>
	<a href=""><img src="//bizweb.dktcdn.net/100/226/987/themes/553699/assets/partler5.png?1497962036095" alt="partler4"></a>
</li></div><div class="owl-item" style="width: 240px;"><li>
<a href=""><img src="//bizweb.dktcdn.net/100/226/987/themes/553699/assets/partler6.png?1497962036095" alt="partler4"></a>
</li></div><div class="owl-item" style="width: 240px;"><li>
<a href=""><img src="//bizweb.dktcdn.net/100/226/987/themes/553699/assets/partler7.png?1497962036095" alt="partler4"></a>
</li></div><div class="owl-item" style="width: 240px;"><li>
<a href=""><img src="//bizweb.dktcdn.net/100/226/987/themes/553699/assets/partler8.png?1497962036095" alt="partler4"></a>
</li></div><div class="owl-item" style="width: 240px;"><li>
<a href=""><img src="//bizweb.dktcdn.net/100/226/987/themes/553699/assets/partler9.png?1497962036095" alt="partler4"></a>
</li></div></div></div>








<div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></ul>
</div><!--end container-->
</div><!--end class partner-->

</div>
@endforeach

@endsection