<?php

namespace App\Models\Academic;

use Illuminate\Database\Eloquent\Model;

class AcademicClass extends Model
{
    protected $fillable = [
        'name', 'code', 'status', 'created_by', 'updated_by'
    ];

    public function classSection()
    {
    	return $this->hasMany(ClassSection::class);
    }
}
