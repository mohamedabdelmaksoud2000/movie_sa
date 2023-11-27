<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'image_file'    => ['required','image'],
            'trailer_file'  => ['required','mimes:mp4'],
            'actors'        => ['required','array'],
            'actors.*'      => ['required','exists:actors,id'],
            'genres'        => ['required','array'],
            'genres.*'      => ['required','exists:genres,id'],
        ];
    }
}
