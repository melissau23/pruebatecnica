<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<nav>
<ul class="navbar-nav">
   
    
    <li class="nav-item">
      <a class="nav-link" href="#"><img src="s.jpg" alt="SOFTLINE S.A"  class="rounded" height="100"  width="500" ></a>
      <li class="nav-item">
      <h1 >PRUEBA TECNICA</h1>
    </li>
    </li>
  </ul>
</nav>
<br>
    <form action="prueba.php" method="post">
      <label>Identificación:</label>
    <input type="number" name="id" >
    <br>
    <label>email:</label>
    <input type="texte" name="email" >
    <br>
  
    <label >Nombres:</label>
    <input type="text" name="firstname">
    <br>
    <label>Apellido:</label>
    <input type="text" name="lastname">
    <br>
    
  
    <input type="submit" name="consultar" value="Consultar informacón" class="btn btn-success">


    </form>
    <?php
   
    if(isset($_POST['consultar']))
    {
        //1.Traer la conexion de la base de datos
        include("pruebaconexion.php");
        //2.Declarar Varibles-Llamar a los campos de la tabla.
        $id=$_POST['id'];
        //3.Comprobar que el campo Id no estuviera vacio y que si esta vacio imprima un mensaje
        //Verificar que se agregue una identificacion obligatoriamente
        if($id=="")
        {
            echo "Debes digitar una identificación para poder consultar la información";

        }
        else
        {
            $consultar=mysqli_query($conexion,"SELECT * FROM acceso WHERE id=$id");
            //Esta es la consulta a la tabla.
            while($resultado=mysqli_fetch_array($consultar))//Devolve un registro-fila de acuerdo a la consulta
            //mysqli_fetch_array es una funcion de php que me permite devolver un registros de acuerdo la consulta
            {
                //Vamos a imprimir el resultado de la consultaa por medio de una tabla 
                echo"
                <table width='100%' border='3'>
                <tr>
                <td>id</td>
                <td>email</td>
                <td>firstname </td>
                <td>lastname</td>
             
                </tr>
                <tr>
                <td>".$resultado['id']."</td> 
                <td>".$resultado['email']."</td>
                <td>".$resultado['firstname']."</td>
                <td>".$resultado['lastname']."</td>
               
                </tr>
                ";
            }
        }
    }
   
    ?>
</body>
</html>