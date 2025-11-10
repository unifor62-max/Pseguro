<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $fillable = ['policy_number','customer_id','plan','sum_assured','premium','start_date','end_date','status'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
