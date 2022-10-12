<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Testimonies extends Model
{
    use HasFactory;
    
    protected $table = 'testimonies';
    protected $primaryKey = 'testimony_id';

    protected $fillable = [
        'testimony_body',
        'testimony_owner',
    ];

}