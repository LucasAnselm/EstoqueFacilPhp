<?php


class conexãoBD
{

  var $servidor = "localhost";
  var $banco = "produtoEstoque";
  var $usuario = "root";
  var $senha = "ifrn.3101997151";
  var $lib;
  var $bd;


  function conectar(){
      $this-> lib = mysqli_connect('$servidor','$usuario','$senha','$banco');

        if($this->lib ->connect_error){
            printf('Erro!!!!');

        }
  }
}
?>