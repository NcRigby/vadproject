<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumption extends Model
{
    use HasFactory;
    protected $fillable = ['date','seller_id','total_document_amount','consumption_table_id'];

    
    public function seller() {
        return $this->belongsTo(Seller::class,'seller_id','id');
    }
    public function consumption_table() {
        return $this->belongsTo(Consumption_table::class,'consumption_table_id','id');
    }
}
