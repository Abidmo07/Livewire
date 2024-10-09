<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class CreateProducts extends Component
{
    public $name,$description,$price;
    public function render()
    {
        return view('livewire.create-products');
    }

    public function store(){
     /*  dd($this->all()); */
      $data=$this->validate([
        'name'=>'required|max:20',
        'description'=>'required|min:3',
        'price'=>'required'
      ]);
      Product::create($data);
      session()->flash('message','Product created succesfully');
      $this->name='';
      $this->description='';
      $this->price='';

    }
    public function home(){
        return redirect('/product');
    }



}