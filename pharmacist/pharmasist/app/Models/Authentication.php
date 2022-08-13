<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pharmacy;

class Authentication extends Model
{
    use HasFactory;
    
    public function pharmacist()
    {
        return $this->belongsTo(pharmacy::class,'email');
    }
}
