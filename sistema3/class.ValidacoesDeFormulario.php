<?php
require_once('class.TratamentoDeInput.php');

class ValidacoesDeFormulario extends TratamendoDeInput
{
    const _MAXNOME = 20;
    const _MINNOME = 10;

    const _MAXSENHA = 15;
    const _MINSENHA = 6;

    public function validarNome($nome)
    {
        if (!parent::caracterInvalido($nome)) {
            if (strlen($nome) > self::_MAXNOME) return false;
            if (strlen($nome) < self::_MINNOME) return false;
        }
        return true;
    }

    public function validarEmail($email)
    {
        
    }

    public function validarSenha($senha)
    {
    }

}

// $validar = new ValidacoesDeFormulario();
// var_dump($validar->validarNome('mateussantos'));