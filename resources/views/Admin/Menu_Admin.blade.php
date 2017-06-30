    <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                    <div class="email">{{Auth::User()->full_name}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                           {{--  <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li> --}}
                            <li><a href="{{route('logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    <li class="active">
                        <a href="{{route('ViewContentAdmin')}}">
                           <i class="fa fa-home" aria-hidden="true" style="font-size: 20px;margin-top:  5px;"></i>
                            <span style="font-size: 18px;">Home</span>
                        </a>
                    </li>   
{{--                     <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li> --}}
                    <li >
                            <div style="float: left">
                                <a href="{{route('ViewProductAdmin')}}"><i class=" fa fa-product-hunt" style="font-size: 20px;margin-top:  5px;" aria-hidden="true"></i>
                           
                                    <span style="font-size: 18px;">Product</span>
                                    
                                </a>
                            </div>
                            <div style="float: right; margin-top: 15px;">

                                <a href="javascript:void(0);" class="menu-toggle"></a>
                                
                                    <ul class="ml-menu" style="float: left;width: 130px;" >
                                        <li>
                                            <div>
                                            @foreach($type_product as $type_pro)
                                                <a href="{{route('ViewProductByType_Admin',$type_pro->id)}}" style="font-size: 15px; padding-top: 10px; color:black">{{$type_pro->name}}</a>
                                            @endforeach
                                            </div>
                                        </li>
                                    </ul>
                            </div>
                            <div style="clear: both"></div>
                    </li>
                     <li >
                            <div style="float: left">
                                <a href="{{route('ViewType_Product')}}"><i class=" fa fa-product-hunt" style="font-size: 20px;margin-top:  5px;" aria-hidden="true"></i>
                           
                                    <span style="font-size: 18px;">TypeProduct</span>
                                    
                                </a>
                            </div>
                            <div style="clear: both"></div>
                    </li>
                     <li>
                        <div style="float: left">
                                <a href="{{route('user_Admin')}}"><i class=" fa fa-user" style="font-size: 20px;margin-top:  5px;" aria-hidden="true"></i>
                           
                                    <span style="padding-left: 5px; font-size: 18px;">User</span>
                                    
                                </a>
                            
                            </div>
                    </li>
                    <li>
                    {{-- firstpro và today lay tu app service provider --}}
                        <a href="{{route('ChartById_Admin',[$firstPro,$today,$today])}}">
                            <i class=" fa fa-pie-chart" style="font-size: 20px;margin-top:  5px;"></i>
                            <span  style="font-size: 18px;">Charts</span>
                        </a>
                    </li>
                    <li>
                            <a href="#">
                            <i class="fa fa-newspaper-o"  style="font-size: 20px;margin-top:  5px;"></i>
                            <span style="font-size: 18px;">News</span>
                        </a>
                    </li>
                    <li>
                            <a href="#">
                            <i class="fa fa-usd"  style="font-size: 20px;margin-top:  5px;"></i>
                            <span style="font-size: 18px; padding-left: 10px;">Bill</span>
                        </a>
                    </li>
                </ul>
            </div>
                        <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">HungMinhITS</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            			<!-- #Footer -->
            			          <!-- #Menu -->


        </aside>
    <!-- #END# Left Sidebar -->