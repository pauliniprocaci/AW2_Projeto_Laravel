<?php

namespace FlCobrancas;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    protected $fillable = [
        'data_vencimento',
        'descricao',
        'status',
        'valor'
    ];

    public $timestamps = false;

    /**
     * @param $value string
     * @return string
     */
    public function getDataVencimentoAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setDataVencimentoAttribute($value)
    {
        $this->attributes['data_vencimento'] = preg_replace('/^(\\d{2})\/(\\d{2})\/(\\d{4})$/', '$3-$2-$1', $value);
    }

    /**
     * @param $value double
     * @return string
     */
    public function getValorAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setValorAttribute($value)
    {
        $this->attributes['valor'] = str_replace(['.', ','], ['', '.'], $value);
    }

    /**
     * @param $value string
     */
    public function setDescricaoAttribute($value)
    {
        $this->attributes['descricao'] = strtoupper($value);
    }
}
