<div class="also-like-product">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-35">
                    <h3>You may also like…</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-slider-active">
                @foreach($data['product']['related']  as  $key => $value)
                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                    <div class="single-product mb-25">
                        <div class="product-img img-full">
                            <a href="/single-product/{{$data['product']['related'][$key]->type}}/{{$data['product']['related'][$key]->id}}">
                                <img src="{{$data['product']['related'][$key]->feature_image}}" alt="">
                            </a>
                            <div class="product-action">
                                <ul>
                                    <li><a href="#open-modal" data-id="{{$data['product']['related'][$key]}}" id="modalDataTransfer" data-toggle="modal" title="Quick view" ><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h2><a href="/single-product">{{$data['product']['related'][$key]->name}}</a></h2>
                            <div class="product-price">
                                <div class="price-box">
                                    <span class="regular-price">{{'৳'." ".$data['product']['related'][$key]->price}}</span>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>