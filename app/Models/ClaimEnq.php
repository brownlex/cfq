<?php

namespace App\Models;

use App\Events\TicketUpdated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimEnq extends Model
{
    use HasFactory;

    protected $table = 'claim';

    protected $fillable = [
        'type',
        'client',
        'inQueue'
    ];


}
