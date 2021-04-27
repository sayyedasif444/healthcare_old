<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_contact extends Model
{
    use HasFactory;
    public $table = 'event_contacts';

    public $primaryKey = 'contact_id';

    public $timestamp = true;
}
