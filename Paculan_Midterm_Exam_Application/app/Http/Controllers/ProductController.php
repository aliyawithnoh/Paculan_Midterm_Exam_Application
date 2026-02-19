<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'iPhone 15 Pro', 'brand' => 'Apple', 'price' => 999, 'status' => 'In Stock'],
            ['name' => 'Galaxy S24 Ultra', 'brand' => 'Samsung', 'price' => 1199, 'status' => 'Limited'],
            ['name' => 'Pixel 8 Pro', 'brand' => 'Google', 'price' => 899, 'status' => 'In Stock'],
            ['name' => 'ROG Phone 8', 'brand' => 'ASUS', 'price' => 1099, 'status' => 'Out of Stock'],
        ];
        return view('products.index', compact('products'));
    }
}