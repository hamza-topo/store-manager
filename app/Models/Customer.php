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
        'first_name', 'last_name', 'email', 'phone', 'birth', 'sexe', 'store_id', 'user_id', 'created_at', 'updated_at'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function getFullNameAttribute()
    {
        return $this->firstname . " " . $this->lastname;
    }


}
