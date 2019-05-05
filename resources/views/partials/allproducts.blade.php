@foreach ($products as $product)

<div class="col-md-3 col-sm-9">
    <div class="product-grid2">

        <div class="product-image2">
            <a href="#">
                <img class="pic-1" src="{{ $product->image }}">
                <img class="pic-2" src="{{ $product->image }}">
            </a>
            <ul class="social">
                <li><a href="{{ route('shop.show', $product->slug) }}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                <li><a href="{{ route('shop.show', $product->slug) }}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
            <a class="add-to-cart" href="">Add to cart</a>
        </div>
        <div class="product-content">
            <h3 class="title"><a href="#">{{ $product->name }}</a></h3>
            <span class="price">${{ $product->presentPrice() }}</span>
        </div>
    </div>
</div>
@endforeach
