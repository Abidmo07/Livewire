<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class UpdateProduct extends Component
{
    public $ProductId,$name,$description,$price;
    public function render()
    {
        return view('livewire.update-product');
    }

    public function update($id){
        $product=Product::where('id',$id)->first();
       $data= $this->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);
        $product->update($data);
        session()->flash('message','upadated with success');
       return redirect('/product');

    }

    public function mount($id){
        $product=Product::where('id',$id)->first();
        $this->ProductId=$product->id;
        $this->name=$product->name;
        $this->description=$product->description;
        $this->price=$product->price;
    }

}