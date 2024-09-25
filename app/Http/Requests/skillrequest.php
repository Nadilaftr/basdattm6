<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Ubah menjadi 'true' untuk mengizinkan permintaan ini diproses.
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
            'skill_name' => 'required|string|max:255', // Wajib, string, maksimal 255 karakter
            'proficiency' => 'required|integer|min:1|max:5', // Wajib, nilai harus antara 1-5
            'description' => 'nullable|string', // Opsional, string
        ];
    }

    /**
     * Custom error messages for validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'skill_name.required' => 'Nama keterampilan wajib diisi.',
            'skill_name.string' => 'Nama keterampilan harus berupa teks.',
            'skill_name.max' => 'Nama keterampilan tidak boleh lebih dari 255 karakter.',
            'proficiency.required' => 'Tingkat keahlian wajib diisi.',
            'proficiency.integer' => 'Tingkat keahlian harus berupa angka.',
            'proficiency.min' => 'Tingkat keahlian minimal 1.',
            'proficiency.max' => 'Tingkat keahlian maksimal 5.',
            'description.string' => 'Deskripsi harus berupa teks.',
        ];
    }
}
