<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $products;
    public function render()
    {
        return view('livewire.products');
    }

    public function mount(){
       $this->fetchProducts();
    }
    public function DeleteProduct($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        session()->flash('message','product deleted with success');
        $this->fetchProducts();
    }
    public function fetchProducts(){
        $this->products=Product::orderBy('created_at','desc')->get();
    }
    public function goto($id){
        return redirect('/product/update/'.$id);
    }

}