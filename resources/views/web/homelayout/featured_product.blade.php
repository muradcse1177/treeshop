<div class="sidebar-layout mb-35">
    <div class="featured-product">
        <div class="sidebar-title text-center">
            <h3>Featured</h3>
        </div>
        <div class="sidebar-product-active">
            <?php
                $productDetails = $data['product']['featured'];
                $length = intval(count($data['product']['featured'])/3);
            ?>
            @for($i=0; $i<$length; $i++)
                <?php $count = 0; ?>
                <div class="product-item">
                    @foreach($data['product']['featured'] as $key => $value)
                        <div class="single-product product-list">
                            <div class="list-col-4">
                                <div class="product-img img-full">
                                    <a href="/single-product/{{$data['product']['featured'][$key]->id}}"><img src="{{$data['product']['featured'][$key]->feature_image}}" alt=""></a>
                                    <div class="product-action">
                                        <ul>
                                            <li><a href="#open-modal" data-toggle="modal" data-id="{{$productDetails[$key]}}" title="Quick view" id="modalDataTransfer" tabindex="0"><i class="fa fa-search"></i></a></li>
                                            <li><a href="#" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" tabindex="0"><i class="fa fa-refresh"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="list-col-8">
                                <div class="product-content">
                                    <h2><a href="/single-product/{{$data['product']['featured'][$key]->id}}">{{$data['product']['featured'][$key]->name}}</a></h2>
                                    <div class="product-price">
                                        <div class="price-box">
                                            <span class="regular-price">{{'৳'." ".$data['product']['featured'][$key]->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            unset($data['product']['featured'][$key]);
                            $count++;
                        ?>
                        @if($count == 3)
                            @break;
                        @endif
                    @endforeach
                </div>
            @endfor
        </div>
    </div>
</div>