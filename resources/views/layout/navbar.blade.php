<header>
    <div class="header-container">
        <div class="header-top-area black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="header-top-right">
                            <ul class="menu-top-menu text-md-right">
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Shopping cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="/login">Log In</a></li>
                                <li><a href="/register">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="header-logo">
                            <a href="index.html"><img src="/web/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <div class="header-phone">
                            <div class="icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <p>Phone: <br>(+68) 123 456 7890</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-3 col-md-10 order-md-4 order-lg-3">
                        <div class="header-search-area">
                            <form action="#">
                                <div class="form-input">
                                    <input name="search" id="search" placeholder="" value="Search..." onblur="if(this.value==''){this.value='Search...'}" onfocus="if(this.value=='Search...'){this.value=''}" type="text">
                                    <button type="submit" class="header-search-btn"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 order-md-3 order-lg-4">
                        <div class="mini-cart">
                            <a href="#">
                                        <span class="cart-icon">
                                           <span class="cart-quantity">0</span>
                                        </span>
                                <span class="cart-title">Your cart <br><strong>৳-<span class="pTotalAmount">00.00</span></strong></span>
                            </a>
                            <div class="cart-dropdown">
                                {{--<div class="section-title text-center mb-35">--}}
                                    {{--<h3> Your cart is empty.</h3>--}}
                                {{--</div>--}}
                                {{--<p class="cart-subtotal"><strong>Subtotal:</strong> <span class="float-right"><b>৳-</b><span>0</span></span></p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area header-sticky">
            <div class="header-boxshadow">
                <div class="container header-inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="logo-sticky">
                                <a href="index.html"><img src="/web/img/logo/logo.png" alt=""></a>
                            </div>
                            <div class="header-menu text-center">
                                <nav>
                                    <ul class="main-menu">
                                        <li><a href="/">home</a></li>
                                        <li><a href="#">Categories</a>
                                            <ul class="mega-menu">
                                                <li><a href="#" class="item-link">Categories</a>
                                                    <ul>
                                                        @for($i=0; $i<6; $i++)
                                                            <li><a href="/wproduct/{{$data['category'][$i]->id}}">{{$data['category'][$i]->name}}</a></li>
                                                        @endfor
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="item-link">Categories</a>
                                                    <ul>
                                                        @for($i=6; $i<12; $i++)
                                                            <li><a href="/wproduct/{{$data['category'][$i]->id}}">{{$data['category'][$i]->name}}</a></li>
                                                        @endfor
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="item-link">Categories</a>
                                                    <ul>
                                                        @for($i=12; $i<count($data['category']); $i++)
                                                            <li><a href="/wproduct/{{$data['category'][$i]->id}}">{{$data['category'][$i]->name}}</a></li>
                                                        @endfor
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog.html">Pages</a>
                                            <!--Dropdown Menu Start-->
                                            <ul class="dropdown">
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-list.html">Shop List View</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login-register.html">Log In</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!--Main Menu Area End-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!--Mobile Menu Area Start-->
                            <div class="mobile-menu d-lg-none"></div>
                            <!--Mobile Menu Area End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>