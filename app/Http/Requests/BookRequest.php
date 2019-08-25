<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator; 
use Illuminate\Http\Exceptions\HttpResponseException;

class BookRequest extends FormRequest
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
            'title' => 'required',
            'author' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須項目です',
            'author.required' => '著者名は必須項目です',
        ];
    }

    protected function failedValidation( Validator $validator )
    {
        $response['errors']  = $validator->errors()->toArray();

        throw new HttpResponseException(
            response()->json( $response )
        );
    }

    public function response( array $errors)
    {
        $response = [
            'errors' => $errors
        ];
        return new JsonResponse( $response );
    }
}
