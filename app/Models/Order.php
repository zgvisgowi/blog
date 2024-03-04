<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function detail()
    {
        return $this->hasMany(OrderDetail::class,'order_id');
    }
    public function costumer():BelongsTo
    {
        return $this->belongsTo(Costumer::class,'costumer_id');
    }
    public function address():HasOne
    {
        return $this->hasOne(address::class);
    }
}
