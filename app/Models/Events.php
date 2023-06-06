<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $primaryKey = 'id';


    protected $fillable = [
        'id',
        'name',
        'start_event',
        'end_event'
    ];
}
