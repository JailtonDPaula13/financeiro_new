<?php
    error_reporting(0);
    session_start();
    if(isset($_POST['nm_login'])){
        $login = $_POST['nm_login'];
        $senha = $_POST['nm_senha'];
        $returnConexao = mysqli_connect('localhost',$login,$senha,'db_tiopatinhas');
        if(mysqli_connect_error()){
            $retorno_json['error']= true;
            $retorno_json['msg']  = 'Aconteceu um erro ao solicitar conexão';
            $retorno_json['cod']  = mysqli_connect_error();
        }
        else{
            $consulta  = "select id_usuario, rs, login from tb_usuario where login = '$login'";
            $resultado = mysqli_query($returnConexao, $consulta);
            if(!$resultado){
                $retorno_json['error']= true;
                $retorno_json['msg']  = 'Consulta não obteve retorno';
                $retorno_json['cod']  = mysqli_error($returnConexao);
            }
            else{
                $dados = mysqli_fetch_object($resultado);
                $_SESSION['login']    = $login;
                $_SESSION['nome']     = $dados->rs;
                $_SESSION['id']       = $dados->id_usuario;
                $retorno_json['error']= false;
            }
        }
        $print = json_encode($retorno_json);
        echo($print);
    }
?>