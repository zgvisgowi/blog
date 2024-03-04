<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class address extends Model
{
    use HasFactory;
    protected $fillable=['costumer_id','street','city','state','postal_Code'];



    public function costumer():BelongsTo
    {
        return $this->belongsTo(Costumer::class);
    }
}
