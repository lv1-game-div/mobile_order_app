<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PurchaseAmountFooter extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.purchase-amount-footer');
    }

    public $totalPrice = 0;
    public $count = 0;

    public function incrementCount($amount = 1)
    {
        $this->count += $amount;
    }

    public function addPrice($price)
    {
        $this->totalPrice += $price;
    }
}
