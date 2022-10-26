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
        'ownerId',
        'activityId',
        'logo',
        'name',
        'phone',
        'contact',
        'address',
        'tva',
        'status',
        'invoice_message',
        'senderId',
    ];


    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
