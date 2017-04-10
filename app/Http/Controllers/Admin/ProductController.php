<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SkinnyDope\Interfaces\ProductInterface;

class ProductController extends Controller
{
    protected $product;

    public function __construct(ProductInterface $product){
        $this->product = $product;
    }

    // public function front(){
    //     // return "a random product";
    //     return $this->product->getRandomRecord();
    // }
     
    public function index()
    {
        $products = $this->product->getRecords();
        return view('admin.products.index', compact('products'));
    }

    public function create(){
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $product = $this->product->addRecord($request);
        return redirect()->route('products.show', $product)->with('message', 'Product successfully created.');
    }

    public function edit($id){
        $product = $this->product->getRecord($id);
        return view('admin.products.edit', compact('product'));
    }

    public function show($id)
    {
        $product = $this->product->getRecord($id);
        if($product) return view('admin.products.show', compact('product'));
        return redirect()->route('products.index')->with('error', 'Product does not exist.');
    }

    public function update(Request $request, $id)
    {
        $product = $this->product->updateRecord($request, $id);
        if($product) return redirect()->route('products.show', $product)->with('message', $product->name . ' was successfully updated.');
        return redirect()->route('products.index')->with('error', 'Was not able to update the product.');
    }

    public function destroy($id)
    {
        $product = $this->product->deleteRecord($id);
        if($product) return redirect()->route('products.index')->with('message', $product->name . ' was successfully deleted.');
        return redirect()->route('products.index')->with('error', 'Was not able to delete the product.');
    }
}
