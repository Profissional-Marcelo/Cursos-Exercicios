<?php
    // error_reporting(0);

header("content-type: application/json");

// include("../controller/PessoaController.php");
// $res = PessoaController::listarUsuarios();
$linhas = array();


$conn = mysqli_connect("localhost","root","","cadastro");
if( $conn ) {
    $res = mysqli_query($conn, " SELECT * FROM usuario ORDER BY nomeUser");

    while ($row = mysqli_fetch_assoc($res)) {
        $linhas[] = $row;
    }
    
        echo json_encode( $linhas );
}

?>