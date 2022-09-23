<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Blogs extends Model
{
    use HasFactory;
    
    protected $table = 'article';
    protected $primaryKey = 'article_id';

    protected $fillable = [
        'article_body',
        'title',
        'image_url',
    ];

}
