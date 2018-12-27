<?php

namespace App\Models\Academic;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $fillable = [
	    'name', 'code', 'class_id', 'status', 'created_by', 'updated_by'
	];
    public function academicClass()
    {
    	return $this->belongsTo(AcademicClass::class, 'class_id');
    }
}
