<?php
require 'GenericDAO.php';

class UserDAO extends GenericDAO {

  //Se define una constante con el nombre de la tabla
  const USER_TABLE = 'usuarios';

  public function selectAll() {
    $query = "SELECT * FROM " . UserDAO::USER_TABLE;
    $result = mysqli_query($this->conn, $query);
    $users= array();
    while ($userBD = mysqli_fetch_array($result)) {
      $user = array(
        'iduser' => $userBD["iduser"],
        'user' => $userBD["user"],
        'pass' => $userBD["pass"],
      );
      array_push($users, $user);
    }
    return $users;
  }



  public function insert($user, $pass) {
    $query = "INSERT INTO " . UserDAO::USER_TABLE .
      " (user, pass) VALUES(?,?)";
    $stmt = mysqli_prepare($this->conn, $query);
    mysqli_stmt_bind_param($stmt, 'ss', $user, $pass);
    return $stmt->execute();
  }
  
  public function checkUserNameExists($user) {
      //"SELECT * FROM usuarios WHERE user='$user'"
    $query = "SELECT user FROM " . UserDAO::USER_TABLE . " WHERE user=?";
    $stmt = mysqli_prepare($this->conn, $query);
    mysqli_stmt_bind_param($stmt, 's', $user);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt); 
    $rows = mysqli_stmt_num_rows($stmt);
    if($rows>0)
     return true;
    else
      return false;
  }

  public function checkExists($user, $pass) {
    $query = "SELECT user, pass FROM " . UserDAO::USER_TABLE . " WHERE user=? AND pass=?";
    $stmt = mysqli_prepare($this->conn, $query);
    mysqli_stmt_bind_param($stmt, 'ss', $user, $pass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt); 
    $rows = mysqli_stmt_num_rows($stmt);
    if($rows>0)
      return true;
    else
      return false;
  }


  public function selectById($id) {
    $query = "SELECT user, pass FROM " . UserDAO::USER_TABLE . " WHERE iduser=?";
    $stmt = mysqli_prepare($this->conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $user, $pass);

    while (mysqli_stmt_fetch($stmt)) {
      $u = array(
        'iduser' => $iduser,
 				'user' => $user,
 				'pass' => $pass
 		);
       }

    return $u;
  }

  public function update($id, $user, $pass) {
    $query = "UPDATE " . UserDAO::USER_TABLE .
      " SET user=?, pass=?"
      . " WHERE iduser=?";
    $stmt = mysqli_prepare($this->conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssi', $user, $pass, $id);
    return $stmt->execute();
  }

  public function delete($id) {
    $query = "DELETE FROM " . UserDAO::USER_TABLE . " WHERE iduser =?";
    $stmt = mysqli_prepare($this->conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    return $stmt->execute();
  }

}

?>
