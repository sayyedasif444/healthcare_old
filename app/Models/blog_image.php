<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_image extends Model
{
    use HasFactory;
    public $table = 'blog_images';

    public $primaryKey = 'img_id';

    public $timestamp = true;
}
