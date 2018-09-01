<div class="single-product-area mb-115">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="product-details-img-tab">
                    <div class="tab-content single-product-img">
                        <?php
                        $count =1;
                        $pImage = json_decode($data['product'][0]->image,true);
                        ?>
                        @foreach($pImage as $image)
                            @if($count == 1)
                                <?php $class = "show active"; ?>
                             @else
                                <?php $class = "";?>
                            @endif
                        <div class="tab-pane fade {{$class}}" id="product{{$count}}">
                            <div class="product-large-thumb img-full">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{$image}}">
                                        <img src="{{$image}}" alt="">
                                    </a>
                                    <a href="{{$image}}" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                            <?php $count++;?>
                         @endforeach

                    </div>
                    <div class="product-menu">
                        <div class="nav product-tab-menu">
                            <?php $count =1; ?>
                            @foreach($pImage as $image)
                                @if($count == 1)
                                    <?php $class = "active"; ?>
                                @else
                                    <?php $class = "";?>
                                @endif
                                <div class="product-details-img">
                                    <a class="{{$class}}" data-toggle="tab" href="#product{{$count}}"><img src="{{$image}}" alt=""></a>
                                </div>
                                <?php $count++;?>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-7">
                <div class="product-details-content">
                    <div class="product-nav">
                        <a href="/single-product/{{$data['product'][0]->type}}/{{$data['product'][0]->id-1}}"><i class="fa fa-angle-left"></i></a>
                        <a href="/single-product/{{$data['product'][0]->type}}/{{$data['product'][0]->id+1}}"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <h2 style="color: green">{{$data['product'][0]->name}}</h2>
                    <div class="single-product-reviews">
                        @for($i=1; $i<=5; $i++)
                            <i class="fa fa-star"></i>
                         @endfor
                    </div>
                    <div class="single-product-price">
                        <span class="price new-price">{{'৳'." ".($data['product'][0]->price-50)}}</span>
                        <span class="regular-price">{{'৳'." ".$data['product'][0]->price}}</span>
                    </div>
                    <div class="product-description" id="pDescription" style="color: green">
                        {{strip_tags($data['product'][0]->description)}}
                    </div>
                    <p class="stock in-stock">{{$data['product'][0]->quantity}} in stock</p>
                    <div class="single-product-quantity">
                        <form class="add-quantity" action="#">
                            <div class="product-quantity">
                                <input value="1" type="number">
                            </div>
                            <div class="add-to-link">
                                <button class="product-btn" data-text="add to cart">add to cart</button>
                            </div>
                        </form>
                    </div>
                    <div class="wishlist-compare-btn">
                        <a href="#" class="wishlist-btn">Add to Wishlist</a>
                        <a href="#" class="add-compare">Compare</a>
                    </div>
                    <div class="single-product-sharing">
                        <h3>Share this product</h3>
                        <div id="shareIcons"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-description-review-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-review-tab">
                    <ul class="nav dec-and-review-menu">
                        <li>
                            <a class="active" data-toggle="tab" href="#description"><button type="button" class="btn btn-success">Description</button></a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reviews"><button type="button" class="btn btn-warning">Reviews</button></a>
                        </li>
                    </ul>
                    <div class="tab-content product-review-content-tab" id="myTabContent-4">
                        <div class="tab-pane fade active show" id="description">
                            <div class="single-product-description">
                                {{strip_tags($data['product'][0]->description)}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <div class="review-page-comment">
                                <h2> Review for -- {{$data['product'][0]->name}}</h2>
                                <ul>
                                    <li>
                                        <div class="product-comment">
                                            <img src="/web/img/icon/author.png" alt="">
                                            <div class="product-comment-content">
                                                <div class="product-reviews">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p class="meta">
                                                    <strong>admin</strong> - <span>November 22, 2016</span>
                                                    <div class="description">
                                                <p>Good Product</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="review-form-wrapper">
                                <div class="review-form">
                                    <span class="comment-reply-title">Add a review </span>
                                    <form action="#">
                                        <p class="comment-notes">
                                            <span id="email-notes">Your email address will not be published.</span>
                                            Required fields are marked
                                            <span class="required">*</span>
                                        </p>
                                        <div class="comment-form-rating">
                                            <label>Your rating</label>
                                            <div class="rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="input-element">
                                            <div class="comment-form-comment">
                                                <label>Comment</label>
                                                <textarea name="message" cols="40" rows="8"></textarea>
                                            </div>
                                            <div class="review-comment-form-author">
                                                <label>Name </label>
                                                <input required="required" type="text">
                                            </div>
                                            <div class="review-comment-form-email">
                                                <label>Email </label>
                                                <input required="required" type="text">
                                            </div>
                                            <div class="comment-submit">
                                                <button type="submit" class="form-button">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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