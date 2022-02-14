<?php


namespace App\Classes;


class Products
{

    protected $allProducts;
    protected $result=[];
    public function index()
    {

        return [
            0=>[
                'id' => 1,
                'category_id' => 1,
                'name'=> 'black-t-shirt',
                'price' => 2000,
                'description' => 'good t-shirt',
                'image' => 'assest/img/1.jpg',
            ],
            1=>[
                'id' => 2,
                'category_id' => 1,
                'name'=> 'back-t-shirt',
                'price' => 1000,
                'description' => 'good t-shirt',
                'image' => 'assest/img/2.jpg',
            ],
            2=>[
                'id' => 2,
                'category_id' => 3,
                'name'=> 'red-t-shirt',
                'price' => 500,
                'description' => 'good t-shirt',
                'image' => 'assest/img/3.jpg',
            ],
            3=>[
                'id' => 4,
                'category_id' => 2,
                'name'=> 'red-t-shirt',
                'price' => 500,
                'description' => 'jamdani',
                'image' => 'assest/img/4.jpg',
            ],
            4=>[
                'id' => 5,
                'category_id' => 3,
                'name'=> 'red-t-shirt',
                'price' => 500,
                'description' => 'sharee-tanggail',
                'image' => 'assest/img/22.jpg',
            ],
            5=>[
                'id' => 6,
                'category_id' => 3,
                'name'=> 'white dress',
                'price' => 500,
                'description' => 'sharee-tanggail',
                'image' => 'assest/img/20.jpeg',
            ],
        ];
    }


    public function shortProducts($category_id)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['category_id'] == $category_id)
            {
              array_push($this->result, $product);
            }
        }
        return $this->result;
    }

    public function getProductDetails ($productId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['id'] == $productId)
            {
                return $product;
            }
        }
    }
}