<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Authentication;

class Delivery extends Model
{
    use HasFactory;
    public function authentication()
    {
        return $this->hasOne(Authentication::class,'a_email','i_email');
    }
}
