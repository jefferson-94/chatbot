<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JsonLog extends Model
{
    use HasFactory;

    protected $table = 'json_logs';

    protected $fillable = [
        'entry_id',
        'message_id',
        'type',
        'payload',
    ];

    protected $casts = [
        'payload' => 'array',
    ];
}
