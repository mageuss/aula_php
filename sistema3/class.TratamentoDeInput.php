<?php
/*
class TratamentoDeInput
{

    private $caracteresIndesejaveis = array('"', "'", '<', '>', '--');

    public function caraterInvalido($informacao)
    {
        foreach ($this->caracteresIndesejaveis as $item) {
            if (str_contains($informacao, $item)) {
                return true;
            }
        }
        return false;
    }
}
*/
class TratamendoDeInput
{
    private $caracteresIndesejaveis = array('"', "'", '<', '>', '--');

    public function caracterInvalido($informacao)
    {
        foreach ($this->caracteresIndesejaveis as $item) {
            if(strstr($informacao, $item))
            {
                return true;
            }
        }
        return false;
    }
}



/*
class ValidarSenha extends TratamendoDeInput
{

    public function validarSenha($valor)
    {
        if (!parent::caracterInvalido($valor)) {
            echo "tem um caracter invalido na sua senha";
        }

        return true;
    }
}

$itemDeTeste = new TratamendoDeInput();
var_dump($itemDeTeste->caracterInvalido('a'));
*/
