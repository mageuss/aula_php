<?php
require_once("class.BancoDeDados.php");

class Aluno extends BancoDeDados
{
    public function listarAlunos()
    {
        $arrayAluno = $this->retornaArray("select * from aluno");

        return $arrayAluno;
    }

    public function listarAluno($idaluno)
    {
        $arrayAluno = $this->retornaArray("select * from aluno where idaluno=" . $idaluno);

        return $arrayAluno;
    }
}

$aluno = new Aluno();

dumpF($aluno->listarAlunos());
dumpF($aluno->listarAluno(1));
