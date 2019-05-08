@foreach ($products as $product)

<div class="col-md-3 col-sm-9">
    <div class="product-grid2">

        <div class="product-image2">
            <a href="{{ route('shop.show', $product->slug) }}">
                <img class="pic-1" src="{{ $product->image }}">
                <img class="pic-2" src="{{ $product->image }}">
            </a>
            <ul class="social">
                <li><a href="{{ route('shop.show', $product->slug) }}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                <li>
                    <form id="formCart" action="{{ route('cart.store') }}" method="POST">

                        @csrf

                        <input type="hidden" name="id" value="{{ $product->id }}" />
                        <input type="hidden" name="name" value="{{ $product->name }}" />
                        <input type="hidden" name="price" value="{{ $product->price }}" />
                        <a id="addCart" href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>

                    </form>
                </li>
            </ul>
        </div>
        <div class="product-content">
            <h3 class="title"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h3>
            <span class="price">${{ $product->presentPrice() }}</span>
        </div>
    </div>
</div>
@endforeach
