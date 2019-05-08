<template>
    <div class="container">
        <div class="row" v-for="item in items" :key="item.id">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid2">

                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" src="item.image">
                            <img class="pic-2" src="item.image">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li>
                                <form id="formCart" action="route('cart.store')" method="POST">

                                    @csrf

                                    <input type="hidden" name="id" value="item.id" />
                                    <input type="hidden" name="name" value="item.name" />
                                    <input type="hidden" name="price" value="item.price" />
                                    <a id="addCart" href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>

                                </form>
                            </li>
                        </ul>

                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{ item.name }}</a></h3>
                        <span class="price">${{ item.price }}</span>
                    </div>
                    <br />
                    <hr />
                    <br />
                </div>
            </div>
        </div>
    </div>

</template>
<script scoped lang="scss">
    .main-wrapper /deep/ {
        @import "~bootstrap/dist/css/bootstrap.min";
    }
</script>
<!-- put presentprice inside methods // call variables from API -->
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                items: null
            }
        },
        created(){
            this.productsApi()
        },
        methods: {
            productsApi() {

                axios.get("/api/products")
                    .then( res => {

                        const {data:{data}} = res
                        this.items = data
                    //    this.items.push(response.data.data);

                        console.log(res);

                    });
            },
             //presentPrice() {

            //     return '$%i', this.item.price / 100;

            // },
        },
    }

</script>
