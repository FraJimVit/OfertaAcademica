<?php
/*
  echo ‘Conexion realizada’;
  }
  catch (PDOException $ex) {
    echo $ex->getMessage();
    exit;
  }

*/

  /* @var $_POST type */
  $nombre = "paco";
  $pass = "1234";

  $nombre= $_POST[“txtusuario”];
  echo $nombre;
  $pass= $_POST[“txtusuario”];
  echo $pass;

  if ($nombre == "paco" && $pass == "1234") {
      $nr = 0;
  }
  else {
    $nr = 1;
  }
  /*La busqueda en la base de datos se realiza de este modo para evitar las inyecciones sql*/
/*
  $query=(“SELECT UsuarioLog,PassLog FROM Login “
      . “WHERE UsuarioLog='”.mysql_real_escape_string($nombre).“‘ and “
      . “PassLog='”.mysql_real_escape_string($pass).“‘”);

  $rs= mysql_query($query);
  $row=mysql_fetch_object($rs);
  $nr = mysql_num_rows($rs);
*/

  if($nr == 1){
    // echo ‘No ingreso’;
  }
  else if($nr == 0) {
    // header('Location:index.html');
    echo "<script>location.href = 'index.html'; </script>";
  }
?>
