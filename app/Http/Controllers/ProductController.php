<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('images')->with('comments')->get();
        // $products = Image::with('porduct')->get();
        return $products;
        return view('products.add-product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'product_name'=>'required|string|min:3|max:23'
        // ]);
        
        $imgurl = [];
        $images = [];
        foreach ($request->file('product_images') as $image) {
            $imgurl[] = $image->store('product_image', 'public');
            $images[] = $image;
        }
        // return $images;
        $produt = Product::create([
            'product_name'=>$request->product_name,
            'mrp_price'=>$request->product_name,
            'selling_price'=>$request->product_name,
            'short_desc'=>$request->short_description,
            'long_desc'=>$request->long_description,
            'vendor_id'=>Auth::user()->id,
            'tags'=>$request->tags,
            'category'=>$request->category
        ]);
        // return $produt;
        // Image::create([
        //     'image_path'=>json_encode($imgurl),
        //     'product_id'=>$produt->id
        // ]);
        
        for($i=0;$i<count($imgurl); $i++){
            Image::create([
                'image_path'=>$imgurl[$i],
                'product_id'=>$produt->id
            ]);
        }
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showCommentForm(){
        $products = Product::all();
        // return view('products.comments', compact('products'));
        return view('products.comments', ['products'=>$products]);
    }

    public function addComment(Request $request){
        // $request->user_id = ;
        Comment::create([
            'message'=>$request->message,
            'rating'=>$request->rating,
            'product_id'=>$request->product_id,
            'user_id'=>Auth::user()->id
        ]);
        return redirect()->back();
    }
}
