<?php
include_once 'conexao.php';

$usuario = filter_input(INPUT_POST, 'palavra',FILTER_SANITIZE_STRING);

 $result_usuario = "SELECT * FROM pessoas WHERE nome LIKE '%$usuario%'";
 $resultado_usuario = mysqli_query($conn,$result_usuario);


 if(($resultado_usuario)AND ($resultado_usuario -> num_rows != 0)){
    while($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
        echo "ID:" . $row_usuario['id']."<br/>"; 
        echo "Nome:" . $row_usuario['nome']."<br/>";
        echo "Nascimento:" . $row_usuario['nascimento']."<br/>";
        echo "Sexo:" . $row_usuario['sexo']."<br/>";
        echo "Peso:" . $row_usuario['peso']."<br/>";
        echo "Altura:" . $row_usuario['altura']."<br/>";
        echo "Nacionalidade:" . $row_usuario['nacionalidade']."<br/><br/>";
        
   }
 }
 else
 {
     echo"nenhum usuario encontrado...";
}
?>