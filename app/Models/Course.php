<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function platform(){
        return $this->belongsTo(platform::class);
    }

    public function series(){
        return $this->belongsTo(platform::class);
    }

    public function topics(){
        return $this->belongsToMany(Topic::class, 'course-topic', 'course_id', 'topic_id');
    }

    public function authors(){
        return $this->belongsToMany(Author::class, 'course-author', 'course_id', 'author_id');
    }
}
