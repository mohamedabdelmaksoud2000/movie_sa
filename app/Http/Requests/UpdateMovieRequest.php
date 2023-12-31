<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'          => ['required'],
            'rate'          => ['required','max:10'],
            'description'   => ['required'],
            'status'        => ['required'],
            'year'          => ['required'],
            'image_file'    => ['nullable','image'],
            'trailer_file'  => ['nullable','mimes:mp4'],
            'actors'        => ['required','array'],
            'actors.*'      => ['required','exists:actors,id'],
            'genres'        => ['required','array'],
            'genres.*'      => ['required','exists:genres,id'],
        ];
    }
}
