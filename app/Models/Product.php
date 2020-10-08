<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'productname',
        'product_description',
        'price',
        'supplier_id',
        'productimage'

    ];

    public function supplier(){
        return $this->belongsTo(Supplier::class,'supplier_id');
    }

    public function url()
    {
    	return route('product.show', $this->id);
    }
}
