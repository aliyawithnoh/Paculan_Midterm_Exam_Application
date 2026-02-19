<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'MacBook Pro M3', 'desc' => 'Next-gen performance for pros.', 'price' => 1999, 'color' => 'Space Black'],
            ['name' => 'Sony WH-1000XM5', 'desc' => 'Industry-leading noise canceling.', 'price' => 399, 'color' => 'Silver'],
            ['name' => 'Keychron Q6', 'desc' => 'Fully customizable mechanical keyboard.', 'price' => 160, 'color' => 'Carbon Grey'],
            ['name' => 'Logitech MX Master 3S', 'desc' => 'Ultrafast scrolling and precision.', 'price' => 99, 'color' => 'Graphite'],
        ];
        return view('products.index', compact('products'));
    }
}