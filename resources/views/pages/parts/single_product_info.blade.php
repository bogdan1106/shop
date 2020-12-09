<div id="like-div" class="" data-like="{{$product->checkProductLike()}}" product-id="{{$product->id}}">

</div>


@if($man)
    <h3>{{$man->name}}</h3>
<div class="form-inline" id="memberSection">
    <div class="form-group">
        <input class="form-control" type="text" id="codeInput{{$man->id}}" value="{{$man->activation_code}}">
    </div>

       <button  id="update-button" data-id="{{$man->id}}" class="btn btn-primary" name="send">Go</button>

</div>

<br><br>
@endif






<div class="col-md-5 single-top-left">
    <div class="flexslider">
        <div class="thumb-image"> <img src="{{$product->getImgPath()}}" data-imagezoom="true"
                                       class="img-responsive" alt=""/> </div>
    </div>

</div>


<div class="col-md-7 single-top-right">
    <div class="single-para simpleCart_shelfItem">
        <h2>{{$product->name}}</h2>
        <div class="star-on">
            <div class="heart-position">
                <svg  width="640" height="480" viewbox="0 0 640 480" xmlns="http://www.w3.org/2000/svg">
                    <title>Small red heart with transparent background</title>
                    <g>
                        <title>Layer 1</title>
                        <g id="layer1">
                            <path id="svg_2" d="m219.28949,21.827393c-66.240005,0 -119.999954,53.76001 -119.999954,120c0,134.755524 135.933151,170.08728 228.562454,303.308044c87.574219,-132.403381 228.5625,-172.854584 228.5625,-303.308044c0,-66.23999 -53.759888,-120 -120,-120c-48.047913,0 -89.401611,28.370422 -108.5625,69.1875c-19.160797,-40.817078 -60.514496,-69.1875 -108.5625,-69.1875z"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="review">
                <a href="#" id="count-likes"> {{$product->countLikes()}} customer add to wishlist </a>
        </div>

            <div class="clearfix"> </div>
        </div>
        <div class="">
            <h5 class="item_price">$ {{$product->getPrice()}}</h5>

        </div>





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

        {{ Form::open([
        'id' => 'form_id',
        'route' => ['basket-add',  $product->id ],

        ])}}

        <a href="#" class="add-cart item_add" onclick="document.getElementById('form_id').submit();">Add</a>
        {{Form::close()}}
    </div>
    <br>
    <br>
    <div >




        {{--<button class="btn btn-primary"  id="button-like" data-id="{{$product->id}}">Like</button>--}}
        {{--<button class="btn btn-primary " id="button-unlike" data-id="{{$product->id}}">Unlike</button>--}}

    </div>

</div>