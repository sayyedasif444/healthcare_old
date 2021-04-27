<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cause_contact extends Model
{
    use HasFactory;

    public $table = 'cause_contacts';

    public $primaryKey = 'contact_id';

    public $timestamp = true;
}
