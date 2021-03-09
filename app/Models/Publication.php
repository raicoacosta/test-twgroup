<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'title',
        'user_id',
    ];

    public function comments()
    {	
        return $this->hasMany(\App\Models\Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function getPublicationTimeAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
