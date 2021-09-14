<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class District_council extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable =[
        'districtName',
        'regionId'
    ];

     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
