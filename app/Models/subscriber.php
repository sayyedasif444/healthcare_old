<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscriber extends Model
{
    use HasFactory;

    public $table = 'subscriber';

    public $primaryKey = 'subscriber_id';

    public $timestamp = true;
}
