<?php

namespace App\Models;

use App\Notifications\ClientConfirmation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Client extends Model
{
    use HasFactory;
    // use Notifiable;
    
    protected $fillable = [
        'name',
        'firstName',
        'number',
        'email',
        'calendrier',
        'services',
        'message',
    ];

    // public function notify($instance)
    // {
    //    $this->notify(new ClientConfirmation($this));
    // }
}
