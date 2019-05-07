<template>
    <div class="col-md-3 col-sm-6">
        <div class="product-grid2">

            <div class="product-image2">
                <a href="#">
                    <img class="pic-1" src="product.image">
                    <img class="pic-2" src="product.image">
                </a>
                <ul class="social">
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li>
                        <form id="formCart" action="route('cart.store')" method="POST">

                            @csrf

                            <input type="hidden" name="id" value="product.id" />
                            <input type="hidden" name="name" value="product.name" />
                            <input type="hidden" name="price" value="product.price" />
                            <a id="addCart" href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>

                        </form>
                    </li>
                </ul>

            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">{{ product.name }}</a></h3>
                <span class="price">${{ product.presentPrice() }}</span>
            </div>
            <br />
            <hr />
            <br />
        </div>
    </div>
</template>
<!-- put presentprice inside methods // call variables from API -->
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
             presentPrice() {

                 return money_format('$%i', product.price / 100);

             }
        }
    }
</script>
