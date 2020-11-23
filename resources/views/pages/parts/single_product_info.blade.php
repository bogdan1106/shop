

<div class="col-md-5 single-top-left">
    <div class="flexslider">
        <div class="thumb-image"> <img src="/images/s-1.jpg" data-imagezoom="true" class="img-responsive" alt=""/> </div>
    </div>
    <!-- FlexSlider -->
    <script src="/js/imagezoom.js"></script>
    {{--<script defer src="/js/jquery.flexslider.js"></script>--}}
    {{--<link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" />--}}

    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
</div>


<div class="col-md-7 single-top-right">
    <div class="single-para simpleCart_shelfItem">
        <h2>{{$product->name}}</h2>
        <div class="star-on">
            <ul class="star-footer">
                <li><a href="#"><i> </i></a></li>
                <li><a href="#"><i> </i></a></li>
                <li><a href="#"><i> </i></a></li>
                <li><a href="#"><i> </i></a></li>
                <li><a href="#"><i> </i></a></li>
            </ul>
            <div class="review">
                <a href="#"> 1 customer review </a>

            </div>
            <div class="clearfix"> </div>
        </div>

        <h5 class="item_price">$ {{$product->price}}</h5>
        <p>{{$product->description}}</p>
        <div class="available">
            <ul>
                <li>Color
                    <select>
                        <option>Silver</option>
                        <option>Black</option>
                        <option>Dark Black</option>
                        <option>Red</option>
                    </select></li>
                <li class="size-in">Size<select>
                        <option>Large</option>
                        <option>Medium</option>
                        <option>small</option>
                        <option>Large</option>
                        <option>small</option>
                    </select></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <ul class="tag-men">
            <li><span>TAG</span>
                <span class="women1">: Women,</span></li>
            <li><span>SKU</span>
                <span class="women1">: CK09</span></li>
        </ul>
        {{--<a href="#" class="add-cart item_add">ADD TO CART</a>--}}

        {{ Form::open([
        'id' => 'form_id',
        'route' => ['basket-add',  $product->id ],

        ])}}

        <a href="#" class="add-cart item_add" onclick="document.getElementById('form_id').submit();">Add</a>
        {{Form::close()}}
    </div>
    <br>
    <br>
    <div class="">
        <button class="btn btn-primary" id="button-like" data-id="{{$product->id}}">Like</button>
        <button class="btn btn-primary " id="button-unlike" data-id="{{$product->id}}">Unlike</button>
    </div>

</div>