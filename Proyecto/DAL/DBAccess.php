<?php
class DBAccess
{
  private $conn;
  private $host = "localhost";
  private $dbname = "cuestionario";
  private $user = "root";
  private $pass = "admin";
  
  public function __CONSTRUCT()
  {
    try {
      $this->conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e ) {
      echo "error:" .$e->getMessage();
    }
 }

  public function get_connection()
  {
    return $this->conn;
  }
}
 ?>
