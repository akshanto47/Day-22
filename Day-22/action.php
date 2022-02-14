<?php
require_once 'vendor/autoload.php';
use App\Classes\AllProducts;
use  App\Classes\Category;
use App\Classes\Products;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'allProducts')
    {
        $category = new Category();
        $categories = $category->category();
        $product = new Products();
        $products = $product->index();
        include "pages/allProducts.php";
    }
    elseif ($_GET['pages'] == 'categoryProducts')
    {
        $category = new Category();
        $categories = $category->category();;
        $product = new Products();
        $products = $product->shortProducts($_GET['category_id']);

        include "pages/allProducts.php";

    }
    elseif ($_GET['pages'] == 'product-details')
    {
        $category = new Category();
        $categories = $category->category();;
        $product = new Products();
        $productDetails = $product->getProductDetails($_GET['product_id']);

        include "pages/productDetails.php";

    }
}