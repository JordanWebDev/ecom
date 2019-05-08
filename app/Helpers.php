<?php

// so i can use this function inside the shopping cart controller
function presentPrice($price){

    return money_format('$%i', $price / 100);

}
