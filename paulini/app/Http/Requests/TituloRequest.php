<?php

namespace FlCobrancas\Http\Requests;

use FlCobrancas\Http\Requests\Request;

class TituloRequest extends Request
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
            'descricao'         => 'required|min:3',
            'data_vencimento'   => 'required|date_format:d/m/Y|regex:/^\\d{2}\/\\d{2}\/\\d{4}$/',
            'status'            => 'required|in:PENDENTE,PAGO',
            'valor'             => 'required|regex:/^(\\d{1,3})(\\.\\d{3})?(,\\d{2})$/'
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'Atenção! O campo "DESCRIÇÃO" é obrigatório!',
            'data_vencimento.required' => 'Atenção! O campo "DATA DE VENCIMENTO" é obrigatório!',
            'status.required' => 'Atenção! O campo "STATUS" é obrigatório!',
            'status.in' => 'O campo STATUS deve ser preenchido com: PENDENTE ou PAGO.',
            'valor.required' => 'Atenção! O campo "VALOR" é obrigatório!'
        ];
    }


}
