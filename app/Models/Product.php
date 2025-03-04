<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock_quantity',
        'category',
        'image'
    ];

    public function scopeFiltered($query,array $filters)
    {
        $query
        ->when(isset($filters['name']), fn ($query) => $query->whereLike('name',"%{$filters['name']}%"))
        ->when(isset($filters['description']), fn ($query) => $query->whereLike('description',"%{$filters['description']}%"))
        ->when(isset($filters['category']), fn ($query) => $query->whereLike('category',"%{$filters['category']}%"))
        ->when(isset($filters['stock_quantity']), fn ($query) => $query->where('stock_quantity',$filters['stock_quantity']))
        ->when(isset($filters['min_price']), fn ($query) => $query->where('price', '>=', $filters['min_price']))
        ->when(isset($filters['max_price']), fn ($query) => $query->where('price', '<=', $filters['max_price']));

        return $query;
    }

}
