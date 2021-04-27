<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cause extends Model
{
    use HasFactory;

    public $table = 'causes';

    public $primaryKey = 'cause_id';

    public $timestamp = true;
}
