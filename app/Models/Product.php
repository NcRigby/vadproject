<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','type_products_id','price','best_before_date','manufacturer_id'];
    
    public function type_products() {
        return $this->belongsTo(Type_products::class,'type_products_id','id');
    } 
    
    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class,'manufacturer_id','id');
    }
}
