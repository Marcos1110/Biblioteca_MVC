<?php

namespace App\Controller;

use App\Model\Aluno;

final class AlunoController {

   public static function cadastro() : void
   {
      $model = new Aluno();
      //$model->id = 1;
      $model->nome = "Marcos";
      $model->ra=514118;
      $model->curso = "Sistemas de Informação";
      $model->save();

      echo "Aluno inserido";
   }

   public static function listar() : void
   {
      echo "Lista de Alunos cadastrados";
      $aluno = new Aluno();
      $lista = $aluno->getAllRows();

      var_dump($lista);
   }


}