<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id',
        'activity_id',
        'logo',
        'name',
        'phone',
        'contact',
        'address',
        'tva',
        'status',
        'invoice_message',
        'sender_id',
    ];


    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function store(){
        return $this->belongsTo(User::class);
    }
}
