<?php

namespace App\Models\Academic;

use Illuminate\Database\Eloquent\Model;

class ClassSection extends Model
{
    protected $fillable = [
        'class_id', 'name', 'status', 'created_by', 'updated_by'
    ];

    public function academicClass()
    {
    	return $this->belongsTo(AcademicClass::class, 'class_id');
    }
}
