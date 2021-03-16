<?php

$dbhost  = 'localhost';    // Probablemente no necesite modificación
$dbname  = 'usuarios_db';   // Modificar esto..
$dbuser  = 'root';   // ...las variables según
$dbpass  = '';   // ...tu instalación
$appname = "GameStore"; // ...y configuración

// Cuando se llama a este script se realiza la conexión con la base de datos
$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error) die($connection->connect_error);

/***
 * Función que lanza una consulta SQL contra la base de datos,
 * si ha ido bien devuelve la respuesta.
 */
function queryMysql($query)
{
  global $connection;
  $result = $connection->query($query);
  if (!$result) die($connection->error);
  return $result;
}

/***
 * Función para destruir la sesión
 */
function destroySession()
{
  $_SESSION=array();

  if (session_id() != "" || isset($_COOKIE[session_name()]))
    setcookie(session_name(), '', time()-2592000, '/');

  session_destroy();
}
