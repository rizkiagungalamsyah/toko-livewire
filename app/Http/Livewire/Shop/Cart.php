<?php

namespace App\Http\Livewire\Shop;

use App\Facades\Cart as FacadeCart;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = FacadeCart::get();
    }

    public function render()
    {
        return view('livewire.shop.cart');
    }

    public function removeFromCart($id)
    {
        FacadeCart::remove($id);
        $this->cart = FacadeCart::get();
        $this->emit('removeFromCart');
    }
}
