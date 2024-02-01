<?php
// app/Http/Requests/ClientRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class ClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'max:255',
            'identidade' => 'max:15',
            'cpf' => 'max:13',
            // Adicione outras regras para outros campos, se necessário
        ];
    }

    public function messages()
    {
        return [
            'nome.max' => 'O campo identidade não pode ter mais de :max caracteres.',
            'identidade.max' => 'O campo identidade não pode ter mais de :max caracteres.',
            'cpf.max' => 'O campo identidade não pode ter mais de :max caracteres.',

            // Adicione outras mensagens conforme necessário
        ];
    }
}
