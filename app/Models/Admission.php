<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $fillable = ['date','provider_id','total_document_amount','admission_table_id'];

    public function provider() {
        return $this->belongsTo(provider::class,'provider_id','id');
    }

    public function admission_table() {
        return $this->belongsTo(admission_table::class,'admission_table_id','id');
    }
}
