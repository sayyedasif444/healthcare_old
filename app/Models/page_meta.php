<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page_meta extends Model
{
    use HasFactory;
    public $table = 'page_meta';

    public $primaryKey = 'page_id';

    public $timestamp = true;
}
