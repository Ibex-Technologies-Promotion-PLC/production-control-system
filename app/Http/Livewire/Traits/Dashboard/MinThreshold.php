<?php

namespace App\Http\Livewire\Traits\Dashboard;

use App\Models\Product;
use Illuminate\Support\Facades\Log;

trait MinThreshold
{
    public function getCriticalStockProductsProperty()
    {
        $products = [];
        foreach (Product::withThreshold()->get() as $product) {
            if($product->totalStock['amount'] < $product->prd_min_threshold) {
                $products[] = $product;
                 Log::info('pro '.$product);
            }
        }
        return collect($products);
    }
}
