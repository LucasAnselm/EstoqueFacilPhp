<?php

class Usuario
{

    var $login;
    var $senha;


    public function setLogin($login)
    {
        $this->login = $login;
    }


    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    public function getLogin()
    {
        return $this->login;
    }


    public function getSenha()
    {
        return $this->senha;
    }

    function testa(){

        if($this->login =='lucas'){

            header('Location: PaginaCadastro.php');


        }

    }



}