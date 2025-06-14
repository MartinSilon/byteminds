<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketClient extends Model
{
    use HasFactory;

    protected $table = 'ticket_client';

    protected $fillable = [
        'name',
    ];
}
