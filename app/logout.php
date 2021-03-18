<?php

require_once(dirname(__FILE__) . '/../templates/header_app.php');
require_once(dirname(__FILE__) . '/../utils/SessionHelper.php');

if (isset($_SESSION['user']))
{
  SessionHelper::destroySession();
  echo "<div class='main'>Has salido de tu sesión. " ;
  // redirección a la pantalla principal
  header('Location: ./../index.php');
}
else echo "<div class='main'><br>" .
  "No puedes salir de sesión por que no estas registrado";
// redirección a la pantalla principal
  header('Location: ./../index.php');
?>
<br><br></div>
</body>
</html>