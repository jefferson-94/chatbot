<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WhatsappAccount extends Model
{
    use HasFactory;

    protected $table = 'whatsapp_accounts';

    protected $fillable = [
        'name',
        'phone_number',
        'phone_number_id',
        'access_token',
    ];

    public function conversations()
    {
        return $this->hasMany(Conversation::class);
    }
}
