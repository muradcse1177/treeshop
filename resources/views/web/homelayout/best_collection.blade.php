<div class="best-product mt-100">
    <div class="row">
        <!--Section Title Start-->
        <div class="col-12">
            <div class="section-title text-center mb-35">
                <span>The Best collection</span>
                <h3>Best Products</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="product-list-slider-active2">
            <?php $length = count($data['product']['bestProduct'])/2;?>
            @for($i=0; $i<$length; $i++)
                <?php $count = 0; ?>
                <div class="col-md-4">
                    @foreach($data['product']['bestProduct'] as $key => $value)
                        <div class="single-product product-list mb-35">
                            <div class="list-col-4">
                                <div class="product-img img-full">
                                    <a href="/single-product/{{$data['product']['bestProduct'][$key]->type}}/{{$data['product']['bestProduct'][$key]->id}}"><img src="{{$data['product']['bestProduct'][$key]->feature_image}}" alt=""></a>
                                    <div class="product-action">
                                        <ul>
                                            <li><a href="#open-modal" data-toggle="modal" data-id="{{$data['product']['bestProduct'][$key]}}" id="modalDataTransfer" title="Quick view" tabindex="0"><i class="fa fa-search"></i></a></li>
                                            <li><a href="#" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" tabindex="0"><i class="fa fa-refresh"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="list-col-8">
                                <div class="product-content">
                                    <h2><a href="/single-product/{{$data['product']['bestProduct'][$key]->type}}/{{$data['product']['bestProduct'][$key]->id}}">{{$data['product']['bestProduct'][$key]->name}}</a></h2>
                                    <div class="product-price">
                                        <div class="price-box">
                                            <span class="price">{{'৳'." ".$data['product']['bestProduct'][$key]->price}}</span>
                                            <span class="regular-price">{{'৳'." ".$data['product']['bestProduct'][$key]->price}}</span>
                                        </div>
                                    </div>
                                    <div class="add-to-cart" onclick="productDetails({{$data['product']['bestProduct'][$key]}})">
                                        <a href="#" tabindex="0">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            unset($data['product']['bestProduct'][$key]);
                            $count++;
                        ?>
                        @if($count == 2)
                            @break;
                        @endif
                    @endforeach
                </div>
            @endfor
        </div>
    </div>
</div>

