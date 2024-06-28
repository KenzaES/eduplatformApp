<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cohensive\OEmbed\Facades\OEmbed;

class Module extends Model
{
    use HasFactory;

    protected $fillable = 
    [
    'title', 
    'video', 
    'content', 
    'module_image', 
    'course_id', 
    'user_id', 
    'moduleNumber'
    ];

    /**
     * Get the course that owns the module.
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get the user that owns the module.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getVideoAttribute($value)
    {
        $embed =OEmbed::get($value);
        if($embed){
            return $embed->html();
        }
        
    }
}
