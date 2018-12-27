<?php

namespace App\Http\Requests\Academic;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Academic\Subject;
use Auth;

class CreateSubjectsRequest extends FormRequest
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
            'name' => 'required|string|max:191',
            'code' => 'required',
            'className' => 'required',
            'status' => 'required'
        ];
    }

    public function createSubject()
    {
        $subject = Subject::create([
            'name' => $this->name,
            'code' => $this->code,
            'class_id' => $this->className,
            'status' => $this->status,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id()
        ]);

        return $subject;
    }
}
