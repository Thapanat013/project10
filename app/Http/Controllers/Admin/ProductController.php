<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class ProductController extends Controller
{
    public function index(){
        $product = Product::orderBy('created_at','desc')->Paginate(10);
        return view('backend.product.index',compact('product'));
    }
    public function create(){
        $category = Category::all();
        return view('backend.product.create',compact('category'));
    }
    public function insert(Request $request){


        $validate = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ],
        [
            'name.required' => 'กรุณากรอกข้อมูลสินค้า',
            'name.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'description.required' => 'กรุณากรอกข้อมูลรายละเอียดสินค้า',
            'image.mimes' => 'อัพโหลดภาพที่มีนามสกุล .jpg .jpeg .png ได้เท่านั้น',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.
            $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(
                public_path().'/backend/product/',
                $filename);Image::make(public_path().'/backend/product/'.
                $filename)->resize(200,200)->save(public_path().'/backend/product/resize/'.$filename);
            $product->image = $filename;

        }else{
            $product->image = "no image.jpg";
        }
        $product->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','ข้อมูลนี้ถูกบันทึกแล้ว');
        return redirect('admin/product/index');
    }

    public function edit($product_id){
        $product = Product::find($product_id);
        $cat = Category::all();
        return view('backend.product.edit',compact('product','cat'));
    }

    public function update(Request $request,$product_id)
    {
        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if($request->hasFile('image')){
            if($product->image != 'no_image.jpg'){
                File::delete(public_path().'/backend/product/'.$product->image);
                File::delete(public_path().'/backend/product/resize/'.$product->image);
        }
            $filename = Str::random(10). '.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/product/',$filename);
            Image::make(public_path().'/backend/product/'.$filename)->resize(250,250)->save(public_path().'/backend/product/resize/'.$filename);
            $product->image = $filename;

        }
        $product->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','ข้อมูลนี้ถูกบันทึกแล้ว');
         return redirect('admin/product/index');

    }
    public function delete($product_id){
        $product = Product::find($product_id);
        if($product->image != 'no_image.jpg'){
            File::delete(public_path().
            '/backend/product/'.$product->image);
            File::delete(public_path().
            '/backend/product/resize/'.$product->image);
        }
        $product->delete();
        alert()->success('ลบข้อมูลสำเร็จ','ข้อมูลนี้ถูกลบแล้ว');
        return redirect('admin/product/index');
    }
        
}
