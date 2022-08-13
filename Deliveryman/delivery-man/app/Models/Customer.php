<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Notification;

class Customer extends Model
{
    use HasFactory;

    public function notification()
    {
        return $this->belongsTo(Notification::class,'i_id','i_id');
    }
}
