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

    public function submittedBy(){
        return $this->belongsTo(User::class, 'submitted_by');
    }


    public function topics(){
        return $this->belongsToMany(Topic::class, 'course-topic', 'course_id', 'topic_id');
    }

    public function authors(){
        return $this->belongsToMany(Author::class, 'course-author', 'course_id', 'author_id');
    }

    public function series(){
        return $this->belongsToMany(Series::class, 'course-series', 'course_id', 'series_id');
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }



    // duration
    public function duration($value){

        if($value == 1){
            return "5-10 hours";
        }elseif($value == 2){
            return "10+ hours";
        }else{
            return "1-5 hours";
        }
    }

    // difficultyLevel
    public function difficultyLevel($value){

        if($value == 1){
            return "Intermediate";
        }elseif($value == 2){
            return "Advanced";
        }else{
            return "Beginner";
        }
    }



}

