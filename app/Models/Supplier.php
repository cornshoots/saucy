<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $primaryKey = 'supplier_id';

    public function product(){
        return $this->belongsToMany(Product::class,'product','supplier_id');
    }
    
}
