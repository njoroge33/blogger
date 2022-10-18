<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Subscribers extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'sub_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];

}