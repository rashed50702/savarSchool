<?php

namespace App\Http\Requests\Academic;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Academic\AcademicClass;
use Auth;

class CreateClassesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:191|unique:academic_classes',
            'code' => 'required',
            'status' => 'required'
        ];
    }

    public function createClass()
    {
        $class = AcademicClass::create([
            'name' => $this->name,
            'code' => $this->code,
            'status' => $this->status,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id()
        ]);

        return $class;
    }
}
