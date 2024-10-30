<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTicket extends Model
{
    use HasFactory;

    protected $table = 'book_tickets';

    protected $fillable = [
        'place',
        'ticket_name',
        'price',
    ];
}
