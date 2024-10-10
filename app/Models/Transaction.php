<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function scopeSearch($query, $searchQuery)
    {
        return $query->whereHas('product', function ($q) use ($searchQuery) {
            $q->where('prd_name', 'like', '%' . $searchQuery . '%');
        })->orWhereHas('company', function ($q) use ($searchQuery) {
            $q->where('cmp_name', 'like', '%' . $searchQuery . '%');
        });
    }


}
