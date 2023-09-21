<?php

namespace App\Http\Requests;

use App\Models\Siswa;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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
            'nisn' => ['required', Rule::unique(Siswa::class)->ignore($this->siswa)],
            'nis' => ['required', Rule::unique(Siswa::class)->ignore($this->siswa)],
            'nama' => 'required',
            'kelas_id' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'spp_id' => 'required',
        ];
    }
}
