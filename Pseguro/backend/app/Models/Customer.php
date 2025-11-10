<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','email','document_type','document_number','birthdate','phone'];

    public function policies()
    {
        return $this->hasMany(Policy::class);
    }
}