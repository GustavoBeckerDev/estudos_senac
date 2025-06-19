<?php
require_once 'db.php';

function cadastrarUsuario()
{
    echo "Informe os dados\n";
    $dados[]=readline("Informe o Login:\n");
    $dados[]=sha1(readline("Informe o Senha:\n"));
    $dados[]=readline("Informe o Nome:\n");
    $dados[]=readline("Informe o Email:\n");
    $dados[]=readline("Informe o Função:\n");
    $query = "INSERT INTO usuario (login,senha,nome,email,funcao) values (?,?,?,?,?)";
    $db = conectar();
    $result = cadastrar($db,$query,$dados);
    desconectar($db);
    if($result){
        echo "\n✅ Usuário cadastrado com sucesso!\n";
    } else {
        echo "\n❌ Erro ao cadastrar usuário, tente novamente!\n";
    }
}

function listarUsuarios()
{
    $query =  "SELECT * FROM usuario";
    $db = conectar();
    $listaUsuarios = listar($db,$query);
    desconectar($db);
    echo "LOGIN | NOME | E-MAIL| FUNÇÃO |\n";
    foreach($listaUsuarios as $usuario){
        // echo "| $usuario[3] | $usuario[4] | $usuario[5] |\n";
         echo "|". $usuario['login'] ."|". $usuario['nome'] ."|". $usuario['email'] . "| ". $usuario['funcao'] ."|\n";
    }
}
function editarUsuario(){
    echo "Qual usuário deseja alterar?\n";
    $login = readline("Informe o login:");
    $usuario = buscarUsuario($login);

    $campos = ['id', 'login', 'senha', 'nome', 'email', 'funcao'];
    $valores = [];

    echo "\n=== EDITAR USUÁRIO ===\n";
    echo "Pressione ENTER para manter o valor atual\n\n";

    for($i=1;$i<count($usuario);$i++){
        echo $campos[$i] . ": " . $usuario[$i] . " = Novo" . ($campos[$i]) . ": ";
        $valor = readline("");
        if($valor == ""){
            $valores[] = $usuario[$i];
        } else {
            // Se é senha, criptografa
            if($campos[$i] == 'senha'){
                $valores[] = sha1($valor);
            } else {
                $valores[] = $valor;
            }
        }
    }

    $valores[] = $usuario[0];
    $db = conectar();
    $query = "UPDATE usuario SET login=?,senha=?,nome=?,email=?,funcao=? where id=?";
    $result = editar($db,$query,$valores);
    desconectar($db);

    if($result){
        echo "\n✅ Usuário editado com sucesso!\n";
    } else {
        echo "\n❌ Erro ao editar usuário!\n";
    }
}


function excluirUsuario(){
    echo "Qual usuário deseja excluir?\n";
    $login[] = readline("Informe o login:");
    $query = "DELETE FROM usuario WHERE login=?";
    $db = conectar();
    $result = excluir($db,$query,$login);
    desconectar($db);
    if($result){
        echo "Usuario excluido com sucesso";
    }else{
        echo "Erro ao excluir";
    }

}

function buscarUsuario($valor)
{
    $query = "SELECT * FROM USUARIO WHERE login=?";
    $db = conectar();
    $usuario = buscarUser($db,$query,array($valor));
    desconectar($db);
    if(!$usuario){
        echo "Login Não encontrado!";
        return false;
    }
    return $usuario;

}