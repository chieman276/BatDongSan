<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserGroup extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'user_groups';
    protected $fillable = ['id', 'name', 'description'];

    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function roles() {
        return $this->belongsToMany(Role::class,'user_group_role','user_group_id','role_id');
    }
}
