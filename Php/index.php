<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");

$pizzas = array(
    array(
        "pizza_name" => "Classic Spinach Pizza Americana",
        "pizza_size" => "Regular",
        "pizza_price" => "₱1,149.00",
        "pizza_brand" => "Shakey's Pizza",
        "pizza_description" => "The perfect balance of your creamy spinach and a blend of different cheeses.",
        "pizza_image" => "https://shakeys-zeus-prod.s3.amazonaws.com/images/Spinach-Prod-images-800x800.png",
        "brand_image" => "https://pbs.twimg.com/profile_images/727181478447079424/u7XZgm2q_400x400.jpg",
    ),

    array(
        "pizza_name" => "Roast Beef Pizza",
        "pizza_size" => "Regular",
        "pizza_price" => "₱409.00",
        "pizza_brand" => "Greenwhich",
        "pizza_description" => "Indulge in succulent roast beef, tender and done just right, now on a pizza! Made even more delicious with our Rosemary and Mushroom sauce!",
        "pizza_image" => "https://shakeys-zeus-prod.s3.amazonaws.com/images/Roast_Beef_web_and_app_6AQdduY.png",
        "brand_image" => "https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco,dpr_1/v1504870785/a3sqqguui8screvrzn7r.png",
    ),

    array(
        "pizza_name" => "Spinach and Glazed Bacon Pizza Americana",
        "pizza_size" => "Regular",
        "pizza_price" => "₱1,149.00",
        "pizza_brand" => "Sbarro",
        "pizza_description" => "Spinach and Glazed Bacon Americana: SUPERSIZED 18-inch Fresh, Flavourful and Creamy spinach pizza loaded with sweet glazed bacon and a blend of different cheeses.",
        "pizza_image" => "https://shakeys-zeus-prod.s3.amazonaws.com/images/Spinach-Bacon-Prod-images-500x500.png",
        "brand_image" => "https://1000logos.net/wp-content/uploads/2020/09/Sbarro-Logo-1997.jpg",
    ),

    array(
        "pizza_name" => "Spinach and Mushroom Pizza Americana",
        "pizza_size" => "Regular",
        "pizza_price" => "₱1,149.00",
        "pizza_brand" => "Pizza Hut",
        "pizza_description" => "Spinach and Mushroom Americana: SUPERSIZED 18-inch Fresh, Flavourful and Creamy spinach pizza prepared with savory mushrooms, and a blend of different cheeses.",
        "pizza_image" => "https://shakeys-zeus-prod.s3.amazonaws.com/images/Spinach--Mushroom-Prod-images-500x500.png",
        "brand_image" => "https://cdn.freebiesupply.com/logos/large/2x/pizza-hut-logo-png-transparent.png",
    ),

    array(
        "pizza_name" => "Spinach and Shrimp Pizza Americana",
        "pizza_size" => "Regular",
        "pizza_price" => "₱1,149.00",
        "pizza_brand" => "Dominos' Pizza",
        "pizza_description" => "Spinach and Shrimp Americana: SUPERSIZED 18-inch Fresh, Flavourful and Creamy spinach pizza made with succulent shrimps, and a blend of different cheeses.",
        "pizza_image" => "https://shakeys-zeus-prod.s3.amazonaws.com/images/Spinach-shrimp-Prod-images-500x500.png",
        "brand_image" => "https://logos-world.net/wp-content/uploads/2021/08/Dominos-Logo.png",
    ),
);

echo json_encode(array("pizzas" => $pizzas));

?>