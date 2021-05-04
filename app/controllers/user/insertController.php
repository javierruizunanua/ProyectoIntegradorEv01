<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/UserDAO.php');
require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');
require_once(dirname(__FILE__) . '/../../models/User.php');
require_once(dirname(__FILE__) . '/../../models/validations/ValidationsRules.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Llamo a la función en cuanto se redirija el action a esta página
    createAction();
}

function createAction() {
    
    $username = ValidationsRules::test_input($_POST["username"]);
    $password = ValidationsRules::test_input($_POST["password"]);
    
    $user = new User();
    $user->setUsername($username);
    $user->setPassword($password);

    //Creamos un objeto UserDAO para hacer las llamadas a la BD
    $userDAO = new UserDAO();
    if(!$userDAO->check($user)){
        
        $userDAO->insert($user);
    
    // Establecemos la sesión
    SessionUtils::startSessionIfNotStarted();
    SessionUtils::setSession($user);

    header('Location: ../../private/views/index.php');
    
    } else {
        
        header('Location: ../../public/views/user/signup.php?error=<span class="error">Ese usuario ya se ha registrado</span><br><br>'); 
    }
  
    
}
?>

