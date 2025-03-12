<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket';
    protected $fillable = [
        'name',
        'client_id',
        'status_id',
        'employee_id',
        'url',
        'description',
        'created_at',
        'updated_at',
    ];

    public function status()
    {
        return $this->belongsTo(TicketStatus::class, 'status_id');
    }


    public function client()
    {
        return $this->belongsTo(TicketClient::class, 'client_id');
    }
}
