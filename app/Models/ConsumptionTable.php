<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumptionTable extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','amount','price','sum','warranty_cost'];

    public function product() {
        return $this->belongsTo(product::class,'product_id','id');
    }
}
