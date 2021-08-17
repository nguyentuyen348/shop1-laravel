<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('backends.products.index', compact('products'));
    }


    public function create()
    {
        return view('backends.products.create');
    }


    public function store(Product $product, Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }
            $product->name = $request->name;
            $product->brand = $request->brand;
            $product->size = $request->size;
            $product->category = $request->category;
            $product->gender = $request->gender;
            $product->description = $request->description;
            $product->price = $request->price;

            $product->save();

            return redirect()->route('products.index')
                ->with('success', 'Product created successfully.');
        }


        public
        function show(Product $product)
        {
            return view('backends.products.show', compact('product'));
        }


        public
        function edit($id)
        {
            $product = Product::findOrFail($id);
            return view('backends.products.edit', compact('product'));
        }


        public
        function update(Request $request, $id)
        {
            $product=Product::findOrFail($id);
            if ($request->hasFile('image')) {
                $currentImage = $product->image;
                if ($currentImage) {
                    Storage::delete('public/' . $currentImage);
                }

                    $image = $request->file('image');
                    $path = $image->store('images', 'public');
                    $product->image = $path;

            };

            $product->name = $request->name;
            $product->brand = $request->brand;
            $product->size = $request->size;
            $product->category = $request->category;
            $product->gender = $request->gender;
            $product->description = $request->description;
            $product->price = $request->price;

            $product->save();

            return redirect()->route('products.index')
                ->with('success', 'Product created successfully.');

        }


        public
        function destroy($id)
        {
            $product = Product::findOrFail($id);
            $product->delete();
            return redirect()->action([ProductController::class, 'index'])
                ->with('success', 'Product delete successfully.');

        }
    }
