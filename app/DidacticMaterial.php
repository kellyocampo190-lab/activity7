<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DidacticMaterial extends Model
{
    protected $fillable = [
        'title',
        'material_type',
        'file_path',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
