<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Delivery;

class Authentication extends Model
{
    use HasFactory;
    
    public function delivery()
    {
        return $this->belongsTo(Delivery::class,'a_email','i_email');
    }
}
