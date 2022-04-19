<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = 'districts';
    protected $fillable = [
        'id', 'name', 'province_id'
    ];

    public $timestamps = false;

    public function wards()
    {
        return $this->hasMany(Ward::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

}
