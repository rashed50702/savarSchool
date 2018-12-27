<?php

namespace App\Http\Requests\Academic;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Academic\ClassSection;
use Auth;

class CreateSectionsRequest extends FormRequest
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
            'className' => 'required',
            'name' => 'required|string|max:191',
            'status' => 'required'
        ];
    }

    public function createSection()
    {
        $section = ClassSection::create([
            'class_id' => $this->className,
            'name' => $this->name,
            'status' => $this->status,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id()
        ]);

        return $section;
    }
}
