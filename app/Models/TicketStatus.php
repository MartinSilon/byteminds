<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model
{
    use HasFactory;

    protected $table = 'ticket_status';
    protected $fillable = [
        'name',
        'color',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'status_id');
    }
}
