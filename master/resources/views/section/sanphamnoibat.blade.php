<section class="awe-section-5"> 
                  <section class="main-container col1-layout home-content-container">
                    <div class="new_title_color center">
                      <h2><span></span>Sản phẩm nổi bật<span></span></h2>
                    </div>
                    <div class="container">
                      <div class="std row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pad_fix_right">

                          <div class="box_collection_pr visible-lg visible-md">
                            <div class="list_item show1 __MB_NEWS_TAB3">
                              <ul>
                                @for ($i=0;$i<count($type);$i++)
                                @if ($i==0)
                                <li class="li_lv{{$i+1}} active"> 
                                  <span class="icon_cate_{{$i+1}}"></span>
                                  <a id="{{$i+1}}" href="javascript:void(0)">{{$type[$i]['name']}}</a>
                                  <span class="sub_minus"></span>
                                </li>
                                @else

                                <li class="li_lv{{$i+1}}"> 
                                  <span class="icon_cate_{{$i+1}}"></span>
                                  <a id="{{$i+1}}" href="javascript:void(0)">{{$type[$i]['name']}}</a>
                                  <span class="sub_minus"></span>
                                </li>

                                @endif
                                @endfor

                                <li class="li_lv6"> 
                                  <span class="icon_cate_6"></span>
                                  <a id="6" href="javascript:void(0)">Nhà ở khu đô thị</a>
                                  <span class="sub_minus"></span>
                                </li>


                                <li class="li_lv7"> 
                                  <span class="icon_cate_7"></span>
                                  <a id="7" href="javascript:void(0)">Căn hộ khu nghỉ dưỡng</a>
                                  <span class="sub_minus"></span>
                                </li>

                              </ul>
                            </div>
                          </div>
                          <div class="box_collection_mobile __MB_NEWS_TAB3  visible-sm visible-xs">
                            <ul>
                              <li class="active"> 
                                <a id="1" href="javascript:void(0)">Căn hộ cao cấp<span class="fa fa-angle-down"></span></a>
                              </li>

                              <li> 
                                <a id="2" href="javascript:void(0)">Căn hộ chung cư<span class="fa fa-angle-down"></span></a>
                              </li>


                              <li> 
                                <a id="3" href="javascript:void(0)">Căn hộ dự án nền<span class="fa fa-angle-down"></span></a>
                              </li>


                              <li> 
                                <a id="4" href="javascript:void(0)">Văn phòng cao ốc<span class="fa fa-angle-down"></span></a>      
                              </li>


                              <li>
                                <a id="5" href="javascript:void(0)">Nhà ở khu cao tầng<span class="fa fa-angle-down"></span></a>
                              </li>


                              <li>
                                <a id="6" href="javascript:void(0)">Nhà ở khu đô thị<span class="fa fa-angle-down"></span></a>
                              </li>


                              <li>
                                <a id="7" href="javascript:void(0)">Căn hộ khu nghỉ dưỡng<span class="fa fa-angle-down"></span></a>
                              </li>

                            </ul>
                          </div>

                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pad_fix_left">

                          @for ($i=0;$i<count($type);$i++)
                          @if($i==0)
                          <div class="best-seller-pro active __MB_CONTAINER_READ3 __MB_CONTAINER_READ3_{{$i+1}}">
                            <div class="slider-items-products row">
                              <div class=" multi-columns-row owl-demo-grid">

                                @foreach ($hotPro as $pro)
                                @if($pro->id_type == $i+1)

                                <div class="laster-shop-item col-lg-6 col-md-6 col-sm-6 col-xs-12">


                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <form action="/cart/add" method="post" class="variants" id="product-actions-1815208" enctype="multipart/form-data">
                                      <span class="tz-shop-meta">

                                        <input name="variantId" value="2782584" type="hidden">
                                        <a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
                                          Mua ngay
                                        </a>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" class="tzheart">
                                          Chi tiết
                                        </a>
                                      </span>
                                      <div class="laster-thumb row" onclick="location.href='/can-ho-2pn-tai-pearl-plaza';">

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" title="Căn hộ 2PN tại Pearl Plaza">
                                          <img src="image/1.jpg" alt="Căn hộ 2PN tại Pearl Plaza">
                                        </a>


                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <div class="row">
                                      <div class="left_cnt_product">
                                        <h3><a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" class="text2line">{{$pro->name}}</a></h3>
                                        <div class="right_cnt_product">


                                          <small>{{$pro->unit_price}}₫</small>


                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                @endif
                                @endforeach

                              </div>
                            </div>
                          </div>
                          @else
                          <div class="best-seller-pro active __MB_CONTAINER_READ3 __MB_CONTAINER_READ3_{{$i+1}}" style="display:none;">
                            <div class="slider-items-products row">
                              <div class=" multi-columns-row owl-demo-grid">

                                @foreach ($hotPro as $pro)
                                @if($pro->id_type == $i+1)

                                <div class="laster-shop-item col-lg-6 col-md-6 col-sm-6 col-xs-12">


                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <form action="/cart/add" method="post" class="variants" id="product-actions-1815208" enctype="multipart/form-data">
                                      <span class="tz-shop-meta">

                                        <input name="variantId" value="2782584" type="hidden">
                                        <a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
                                          Mua ngay
                                        </a>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" class="tzheart">
                                          Chi tiết
                                        </a>
                                      </span>
                                      <div class="laster-thumb row" onclick="location.href='/can-ho-2pn-tai-pearl-plaza';">

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" title="Căn hộ 2PN tại Pearl Plaza">
                                          <img src="image/1.jpg" alt="Căn hộ 2PN tại Pearl Plaza">
                                        </a>


                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <div class="row">
                                      <div class="left_cnt_product">
                                        <h3><a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" class="text2line">{{$pro->name}}</a></h3>
                                        <div class="right_cnt_product">


                                          <small>{{$pro->unit_price}}₫</small>


                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                @endif
                                @endforeach

                              </div>
                            </div>
                          </div>
                          @endif
                          
                          @endfor


                          <div class="best-seller-pro __MB_CONTAINER_READ3 __MB_CONTAINER_READ3_6" style="display:none;">
                            <div class="slider-items-products row">
                              <div class=" multi-columns-row owl-demo-grid">

                                <div class="laster-shop-item col-lg-6 col-md-6 col-sm-6 col-xs-12">




























                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <form action="/cart/add" method="post" class="variants" id="product-actions-1815208" enctype="multipart/form-data">
                                      <span class="tz-shop-meta">

                                        <input name="variantId" value="2782584" type="hidden">
                                        <a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
                                          Mua ngay
                                        </a>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" class="tzheart">
                                          Chi tiết
                                        </a>
                                      </span>
                                      <div class="laster-thumb row" onclick="location.href='/can-ho-2pn-tai-pearl-plaza';">

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" title="Căn hộ 2PN tại Pearl Plaza">
                                          <img src="image/1.jpg" alt="Căn hộ 2PN tại Pearl Plaza">
                                        </a>


                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <div class="row">
                                      <div class="left_cnt_product">
                                        <h3><a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" class="text2line">Căn hộ 2PN tại Pearl Plaza</a></h3>
                                        <div class="right_cnt_product">


                                          <small>250.000.000₫</small>


                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                <div class="laster-shop-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
































                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <form action="/cart/add" method="post" class="variants" id="product-actions-1815300" enctype="multipart/form-data">
                                      <span class="tz-shop-meta">

                                        <input name="variantId" value="2782694" type="hidden">
                                        <a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
                                          Mua ngay
                                        </a>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-3pn-o-pearl-plaza" class="tzheart">
                                          Chi tiết
                                        </a>
                                      </span>
                                      <div class="laster-thumb row" onclick="location.href='/can-ho-3pn-o-pearl-plaza';">

                                        <div class="shop-icon-data">                      
                                          <span class="hv_price">
                                            - 
                                            6 
                                            %
                                          </span>
                                        </div>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-3pn-o-pearl-plaza" title="Căn hộ 3PN  ở Pearl Plaza">
                                          <img src="image/3.jpg" alt="">
                                        </a>


                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <div class="row">
                                      <div class="left_cnt_product">
                                        <h3><a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-3pn-o-pearl-plaza" class="text2line">Căn hộ 3PN  ở Pearl Plaza</a></h3>
                                        <div class="right_cnt_product">


                                          <small>
                                            3.000.000.000₫
                                          </small>

                                          <em>
                                            3.200.000.000₫      
                                          </em>



                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                <div class="laster-shop-item col-lg-6 col-md-6 col-sm-6 col-xs-12">




























                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <form action="/cart/add" method="post" class="variants" id="product-actions-1815720" enctype="multipart/form-data">
                                      <span class="tz-shop-meta">

                                        <input name="variantId" value="2783189" type="hidden">
                                        <a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
                                          Mua ngay
                                        </a>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-ssg-tower" class="tzheart">
                                          Chi tiết
                                        </a>
                                      </span>
                                      <div class="laster-thumb row" onclick="location.href='/ban-can-ho-ssg-tower';">

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-ssg-tower" title="Bán căn hộ SSG Tower 3PN">
                                          <img src="image/9.jpg" alt="Bán căn hộ SSG Tower 3PN">
                                        </a>


                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <div class="row">
                                      <div class="left_cnt_product">
                                        <h3><a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-ssg-tower" class="text2line">Bán căn hộ SSG Tower 3PN</a></h3>
                                        <div class="right_cnt_product">


                                          <small>3.300.000.000₫</small>


                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                <div class="laster-shop-item col-lg-6 col-md-6 col-sm-6 col-xs-12">




























                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <form action="/cart/add" method="post" class="variants" id="product-actions-1815721" enctype="multipart/form-data">
                                      <span class="tz-shop-meta">

                                        <input name="variantId" value="2783190" type="hidden">
                                        <a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
                                          Mua ngay
                                        </a>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-ssg-tower-1" class="tzheart">
                                          Chi tiết
                                        </a>
                                      </span>
                                      <div class="laster-thumb row" onclick="location.href='/ban-can-ho-ssg-tower-1';">

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-ssg-tower-1" title="Bán căn hộ SSG Tower 2 PN">
                                          <img src="image/8.jpg" alt="">
                                        </a>


                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <div class="row">
                                      <div class="left_cnt_product">
                                        <h3><a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-ssg-tower-1" class="text2line">Bán căn hộ SSG Tower 2 PN</a></h3>
                                        <div class="right_cnt_product">


                                          <small>3.000.000.000₫</small>


                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>


                          <div class="best-seller-pro __MB_CONTAINER_READ3 __MB_CONTAINER_READ3_7" style="display:none;">
                            <div class="slider-items-products row">
                              <div class=" multi-columns-row owl-demo-grid">

                                <div class="laster-shop-item col-lg-6 col-md-6 col-sm-6 col-xs-12">




























                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <form action="/cart/add" method="post" class="variants" id="product-actions-1815208" enctype="multipart/form-data">
                                      <span class="tz-shop-meta">

                                        <input name="variantId" value="2782584" type="hidden">
                                        <a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
                                          Mua ngay
                                        </a>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" class="tzheart">
                                          Chi tiết
                                        </a>
                                      </span>
                                      <div class="laster-thumb row" onclick="location.href='/can-ho-2pn-tai-pearl-plaza';">

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" title="Căn hộ 2PN tại Pearl Plaza">
                                          <img src="image/1.jpg" alt="Căn hộ 2PN tại Pearl Plaza">
                                        </a>


                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <div class="row">
                                      <div class="left_cnt_product">
                                        <h3><a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" class="text2line">Căn hộ 2PN tại Pearl Plaza</a></h3>
                                        <div class="right_cnt_product">


                                          <small>250.000.000₫</small>


                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                <div class="laster-shop-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
































                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <form action="/cart/add" method="post" class="variants" id="product-actions-1815300" enctype="multipart/form-data">
                                      <span class="tz-shop-meta">

                                        <input name="variantId" value="2782694" type="hidden">
                                        <a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
                                          Mua ngay
                                        </a>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-3pn-o-pearl-plaza" class="tzheart">
                                          Chi tiết
                                        </a>
                                      </span>
                                      <div class="laster-thumb row" onclick="location.href='/can-ho-3pn-o-pearl-plaza';">

                                        <div class="shop-icon-data">                      
                                          <span class="hv_price">
                                            - 
                                            6 
                                            %
                                          </span>
                                        </div>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-3pn-o-pearl-plaza" title="Căn hộ 3PN  ở Pearl Plaza">
                                          <img src="image/3.jpg" alt="">
                                        </a>


                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <div class="row">
                                      <div class="left_cnt_product">
                                        <h3><a href="https://mendover-theme-1.bizwebvietnam.net/can-ho-3pn-o-pearl-plaza" class="text2line">Căn hộ 3PN  ở Pearl Plaza</a></h3>
                                        <div class="right_cnt_product">


                                          <small>
                                            3.000.000.000₫
                                          </small>

                                          <em>
                                            3.200.000.000₫      
                                          </em>



                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                <div class="laster-shop-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
































                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <form action="/cart/add" method="post" class="variants" id="product-actions-1815415" enctype="multipart/form-data">
                                      <span class="tz-shop-meta">

                                        <input name="variantId" value="2782813" type="hidden">
                                        <a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
                                          Mua ngay
                                        </a>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-pearl-plaza-2-phong-ngu-tang-15" class="tzheart">
                                          Chi tiết
                                        </a>
                                      </span>
                                      <div class="laster-thumb row" onclick="location.href='/ban-can-ho-pearl-plaza-2-phong-ngu-tang-15';">

                                        <div class="shop-icon-data">                      
                                          <span class="hv_price">
                                            - 
                                            4 
                                            %
                                          </span>
                                        </div>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-pearl-plaza-2-phong-ngu-tang-15" title="Bán căn hộ Pearl Plaza 2 phòng ngủ tầng 15">
                                          <img src="image/5.jpg" alt="Bán căn hộ Pearl Plaza 2 phòng ngủ tầng 15">
                                        </a>


                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <div class="row">
                                      <div class="left_cnt_product">
                                        <h3><a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-pearl-plaza-2-phong-ngu-tang-15" class="text2line">Bán căn hộ Pearl Plaza 2 phòng ngủ tầng 15</a></h3>
                                        <div class="right_cnt_product">


                                          <small>
                                            250.000.000₫
                                          </small>

                                          <em>
                                            260.000.000₫      
                                          </em>



                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                <div class="laster-shop-item col-lg-6 col-md-6 col-sm-6 col-xs-12">




























                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <form action="/cart/add" method="post" class="variants" id="product-actions-1815595" enctype="multipart/form-data">
                                      <span class="tz-shop-meta">

                                        <input name="variantId" value="2783021" type="hidden">
                                        <a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
                                          Mua ngay
                                        </a>

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-pent-house-tang-12" class="tzheart">
                                          Chi tiết
                                        </a>
                                      </span>
                                      <div class="laster-thumb row" onclick="location.href='/ban-can-ho-pent-house-tang-12';">

                                        <a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-pent-house-tang-12" title="Bán căn hộ Pent House tầng 12">
                                          <img src="image/6.jpg" alt="Bán căn hộ Pent House tầng 12">
                                        </a>


                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                    <div class="row">
                                      <div class="left_cnt_product">
                                        <h3><a href="https://mendover-theme-1.bizwebvietnam.net/ban-can-ho-pent-house-tang-12" class="text2line">Bán căn hộ Pent House tầng 12</a></h3>
                                        <div class="right_cnt_product">


                                          <small>2.200.000.000₫</small>


                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </section>
                </section>