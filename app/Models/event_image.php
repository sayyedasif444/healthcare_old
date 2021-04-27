<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_image extends Model
{
    use HasFactory;


    public $table = 'event_images';

    public $primaryKey = 'img_id';

    public $timestamp = true;
}
