<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ip_address',
        'page_visited',
        'is_registered',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}