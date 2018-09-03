<!--Slider Area Start-->
<div class="slider-area mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-slider hero-slider-5 owl-carousel">
                    @foreach($data['banner'] as $banner)
                    <div class="single-slider-style-5" style="background-image: url({{$banner->image}})">
                        <div class="slider-progress"></div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <!--Product Offer Area Start-->
                <div class="product-offer">
                    <div class="section-title text-center">
                        <h3>Deal of The Day</h3>
                    </div>
                    <div class="product-offer-active">
                        @foreach($data['product']['dayOfDay'] as  $key => $value)
                        <div class="single-product">
                            <div class="product-img img-full">
                                <a href="/single-product/{{$data['product']['dayOfDay'][$key]->id}}">
                                    <img src="{{$data['product']['dayOfDay'][$key]->feature_image}}" alt="">
                                </a>
                                <span class="onsale">Sale!</span>
                                <div class="product-action">
                                    <ul>
                                        <li><a href="#open-modal" data-toggle="modal" title="Quick view" data-id="{{$data['product']['dayOfDay'][$key]}}" id="modalDataTransfer"><i class="fa fa-search"></i></a></li>
                                        <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2><a href="/single-product/{{$data['product']['dayOfDay'][$key]->id}}">{{$data['product']['dayOfDay'][$key]->name}}</a></h2>
                                <div class="product-price">
                                    <div class="price-box">
                                        <span class="regular-price">{{'৳'." ".$data['product']['dayOfDay'][$key]->price}}</span>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="count-down mt-20">
                                    <div class="pro-countdown1" data-countdown="2033/10/01"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--Product Offer Area End-->
            </div>
        </div>
    </div>
</div>
<!--Slider Area End-->