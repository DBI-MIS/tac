<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use HasFactory;
    use Notifiable;
    
    protected $cast = [
        'review' => 'boolean',

    ];

    protected $fillable = [
        'name',
        'subject',
        'contact_no',
        'email',
        'message',
        'status',
        'review',
    ];


}
