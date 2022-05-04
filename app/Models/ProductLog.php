<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLog extends Model
{
    use HasFactory;
    protected $table = 'product_logs';


    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id','id');
    }
}
