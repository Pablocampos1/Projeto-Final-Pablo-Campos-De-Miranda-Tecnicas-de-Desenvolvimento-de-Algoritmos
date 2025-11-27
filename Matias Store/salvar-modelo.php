<?php

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST['nome_modelo'];
        $cor = $_POST['cor_modelo'];
        $tipo = $_POST['tipo_modelo'];

        $sql = "INSERT INTO modelo 
        (nome_modelo, cor_modelo, tipo_modelo) 
        VALUES ('{$nome}', '{$cor}', '{$tipo}')";

        $res = $conn->query($sql);

        if($res==true){
            print"<script>alert('Cadastrou com sucesso');</script>";
            print"<script>location.href='?page=listar-modelo';</script>";
        }
        else {
            print"<script>alert('Não cadastrou');</script>";
            print"<script>location.href='?page=listar-modelo';</script>";
        }
        break;

    case 'editar':
        $nome = $_POST['nome_modelo'];
        $cor = $_POST['cor_modelo'];
        $tipo = $_POST['tipo_modelo'];

        $sql = "UPDATE modelo SET nome_modelo='{$nome}', cor_modelo='{$cor}', tipo_modelo='{$tipo}'  WHERE id_modelo=".$_REQUEST['id_modelo'];

        $res = $conn->query($sql);

        if($res == true){
            print"<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-modelo';</script>";
        }else{
            print"<script>alert('Não editou');</script>";
            print"<script>location.href='?page=listar-modelo';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM modelo WHERE id_modelo=".$_REQUEST['id_modelo'];

        $res = $conn->query($sql);

        if($res == true){
            print"<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-modelo';</script>";
        }else{
            print"<script>alert('Não excluiu');</script>";
            print"<script>location.href='?page=listar-modelo';</script>";
        }
        break;
}