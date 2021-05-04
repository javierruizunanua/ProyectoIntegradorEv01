<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/UserDAO.php');
require_once(dirname(__FILE__) . '/../../models/User.php');
require_once(dirname(__FILE__) . '/../../models/validations/ValidationsRules.php');

require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
            checkAction();        
}


function checkAction() {
    
    
    $user = new User();
    $user->setUsername($_POST["username"]);
    $user->setPassword($_POST["password"]); 
   
    
    //Creamos un objeto UserDAO para hacer las llamadas a la BD
    $userDAO = new UserDAO();
    
    //Comporbamos si existe en la BD para iniciar sesion en index privada o en index publica
    if($userDAO->check($user))
    {
        // Establecemos la sesión
        SessionUtils::startSessionIfNotStarted();
        SessionUtils::setSession($user);      
    
        header('Location: ../../private/views/index.php');    
    }
    else
    {
        
        header('Location: ../../public/views/user/login.php?error=<span class="error">No estás logueado</span><br><br>');    
    }
    
 
    
          
    
}
?>
    