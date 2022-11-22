<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipanteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'sobrenome' => 'required|min:3',
            'email' => 'required|unique:participantes|email',
            'data_nascimento' => 'required',
        ];
    }
    public function messages()
    {
      return [
        'nome.required'=>'O nome é obrigatório',
        'nome.min'=>'O nome precisa de ao menos 3 letras',
        'sobrenome.required'=>'O sobrenome é obrigatório',
        'sobrenome.min'=>'O sobrenome precisa de ao menos 3 letras',
        'email.required'=>'O email é obrigatório',
        'email.unique'=>'Esse email já está sendo utilizado.',
        'email.email'=>'Insira um email valido',
        'data_nascimento.required'=>'Data de nascimento é obrigatória',
      ];
    }
}
