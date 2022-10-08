<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::all();

        return response()->json([
            'data' => $products,
            'total' => $products->count()
        ]);
    }

    public function getSingleProduct($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return response()->json([
                'error' => 'Product not found'
            ]);
        }

        return response()->json([
            'data' => $product
        ]);
    }

    //public function searchProduct($id)

    public function getCategories()
    {
        $categories = Product::distinct('category')
            ->select('category')
            ->get();
        
        return response()->json([
            'data' => $categories
        ]);
    }

    public function getByCategory($name)
    {
        $products = Product::where('category', $name)->get();

        return response()->json([
            'data' => $products,
            'total' => $products->count()
        ]);
    }

    public function addProduct(Request $request)
    {
        try {
            $data = $request->json()->all();
            $products = new Product();
            $products->title = $data['title'];
            $products->price = $data['price'];
            $products->brand = $data['brand'];
            $products->category = $data['category'];
            $products->image = $data['image'];
            $products->save();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'error' => 'Unable to save product'
            ]);
        }
        
        return response()->json([
            'data' => $products
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->json()->all();
            $product = Product::find($id);
            if (!is_null($product)) {
                $products->title = $data['title'];
                $products->price = $data['price'];
                $products->brand = $data['brand'];
                $products->category = $data['category'];
                $products->image = $data['image'];
                $products->save();
            } else {
                throw new Exception('Unable to find product');
            }
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'error' => 'Unable to update product'
            ]);
        }
        
        return response()->json([
            'data' => $products
        ]);
    }


}
