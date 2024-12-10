<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'image_url',
    ];

    /**
     * Get the created_at timestamp in a human-readable format.
     *
     * @return string
     */
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('F j, Y'); // Example: November 21, 2024
    }

    public function scopePublished($query)
    {
    return $query->where('is_published', true);
    }

    public function author()
    {
    return $this->belongsTo(User::class, 'user_id');
    }


}
