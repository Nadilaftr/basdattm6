<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Mengizinkan request ini untuk semua user
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
            'nama' => 'required|string|max:255',  // Nama kontak harus ada, maksimal 255 karakter
            'email' => 'required|email|unique:contacts,email',  // Email harus ada, format email valid, dan unik di tabel contacts
            'telepon' => 'nullable|string|max:20',  // Nomor telepon opsional, jika ada harus string maksimal 20 karakter
            'alamat' => 'nullable|string|max:500',  // Alamat opsional, maksimal 500 karakter
            'instansi' => 'nullable|string|max:255',  // Nama perusahaan opsional, maksimal 255 karakter
        ];
    }

    /**
     * Get custom messages for validation errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nama.required' => 'Nama kontak wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email ini sudah terdaftar.',
            'telepon.max' => 'Nomor telepon maksimal 20 karakter.',
            'alamat.max' => 'Alamat maksimal 500 karakter.',
            'instansi.max' => 'Nama perusahaan maksimal 255 karakter.',
        ];
    }
}
