<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakeRequests extends Model
{
    use HasFactory;

    protected $fillable=[
        'userId',
        'startDate',
        'endDate',
        'source',
        'destination',
        'requestType',
        'requestDesc',
        'requestStatus',
        'approveStatus'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
