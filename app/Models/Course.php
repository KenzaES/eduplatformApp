<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'duration',
        'language',
        'complexity',
        'price',
        'requirement',
        'description',
        'course_image',
        'user_id',
    ];

    /**
     * Get the modules for the course.
     */
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
  
    // This function will delete the course along with its modules
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($course) {
            $course->modules()->delete();
        });
    }
    
    /**
     * Get the user that owns the course.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //to be able to user as instructor user priority
    public function instructor() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
