<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;

class Checkout extends Component
{
    public $firstname;
    public $last_name;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $postal_code;
    public $formCheckout;

    public function mount()
    {
        $this->formCheckout = true;
    }

    public function render()
    {
        return view('livewire.shop.checkout');
    }

    public function checkout()
    {
        $this->validate([
            'firstname' => 'required|min:3',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postal_code' => 'required',

        ]);
    }
}
