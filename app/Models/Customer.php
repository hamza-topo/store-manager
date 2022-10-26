<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'firstname', 'lastname', 'email', 'phone', 'birth', 'sexe', 'storeId', 'userId', 'created_at', 'updated_at'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'storeId');
    }

    public function getFullNameAttribute()
    {
        return $this->firstname . " " . $this->lastname;
    }

    // public function invoices(){
    //     return $this->hasMany('App\Models\Invoice','customer_id');
    // }
}
