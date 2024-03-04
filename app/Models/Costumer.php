<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Costumer extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'password'
    ];

    public function orders():HasMany
    {
        return $this->hasMany(Order::class,'costumer_id');
    }
    public function address():HasMany
    {
        return $this->hasMany(address::class);
    }


}
