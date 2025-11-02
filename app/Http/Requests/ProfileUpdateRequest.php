<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            'nomor_kartu_mahasiswa' => [
                'required', 'string', 'max:50', Rule::unique('users', 'nomor_kartu_mahasiswa')->ignore($this->user()->id),
            ],
            'tahun_lulus' => ['required', 'integer', 'between:1950,2100'],
            'fakultas' => ['nullable', 'string', 'max:255'],
            'jurusan' => ['nullable', 'string', 'max:255'],
            'alamat' => ['nullable', 'string'],
            'phone' => ['nullable', 'string', 'max:50'],
            'linkedin' => ['nullable', 'url'],
            'cv' => ['nullable', 'file', 'mimes:pdf,docx', 'max:5120'],
            'privacy_settings' => ['nullable', 'array'],
            'privacy_settings.show_email' => ['nullable', 'boolean'],
            'privacy_settings.show_phone' => ['nullable', 'boolean'],
            'privacy_settings.show_linkedin' => ['nullable', 'boolean'],
            'privacy_settings.show_cv' => ['nullable', 'boolean'],
        ];
    }
}
