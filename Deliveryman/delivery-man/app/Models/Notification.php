<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Notification extends Model
{
    use HasFactory;
  public function customer()
  {
    {
        return $this->hasOne(Customer::class,'i_id','i_id');
    }
  }
    
}
