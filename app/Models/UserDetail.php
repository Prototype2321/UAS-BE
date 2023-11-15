<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUser', // Add the foreign key if you plan to mass-assign it
        'socialMedia',
        'address',
        'country',
        'phoneNumber',
        'postalCode',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
}
