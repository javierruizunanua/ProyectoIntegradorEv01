<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/UserDAO.php');
require_once(dirname(__FILE__) . '/../../models/User.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //Llamo a la función en cuanto se redirige el action a esta página mediante metodo POST
    deleteAction();
}
// Función encargada de borrar 
function deleteAction() {
    $id = $_GET["iduser"];

    $userDAO = new UserDAO();
    $userDAO->delete($id);

    header('Location: ../../index.php');
}
?>

