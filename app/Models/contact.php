<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    public $table = 'contact_form';

    public $primaryKey = 'contact_id';

    public $timestamp = true;
}
