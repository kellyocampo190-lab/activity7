<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_key',
        'title',
        'cover',
        'content',
        'robotics_kit_id',
    ];

    public function roboticsKit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    public function didacticMaterial()
    {
        return $this->hasOne(DidacticMaterial::class);
    }
}
