<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registro Nomina</title>

  <style type="text/css">
    #tabEmpleados{border-collapse: collapse; width: 60%;}
    #tabEmpleados td, #empleados th{border: 1px solid #800000; padding: 8px; background-color: white;}
    #tabEmpleados th{padding: 10px; background-color: lightblue; color: darkred;}
    #cuerpo{background-color: #00cc99;}
    #all{color: white; font-size: 20px;}
    #calc1{padding: 10px;}
  </style>
</head>
<body id="cuerpo">

  <?php 

    session_start();

    /*if(! isset($_SESSION['empleados']))
      $_SESSION['empleados'] = [];

    unset($_SESSION['empleados']);*/

    if(! isset($_SESSION['cedula'])){
      $_SESSION['cedula'] = [];
    }
    if(! isset($_SESSION['empleados'])){
      $_SESSION['empleados'] = [];
    }
    if(! isset($_SESSION['cantHoras'])){
      $_SESSION['cantHoras'] = [];
    }
    if(! isset($_SESSION['precio'])){
      $_SESSION['precio'] = [];
    }
    
    /*unset($_SESSION['cedula']);
    unset($_SESSION['empleados']);
    unset($_SESSION['cantHoras']);
    unset($_SESSION['precio']);*/
    

   ?>

  <form action="registroNomina.php" method="GET">
    <label id="all">Cedula</label>
    <input type="text" name="in1" id="inp1" style="margin-left: 87px;">
    <br>

    <label id="all">Empleado</label>
    <input type="text" name="in2" id="inp2" style="margin-left: 63px;">
    <br>

    <label id="all">Cantidad de horas</label>
    <input type="text" name="in3" id="inp3">
    <br>

    <label id="all">Precio</label>
    <input type="text" name="in4" id="inp4" style="margin-left: 94px;">

    <br><br>
    <button type="submit" name="calc" id="calc1" style="margin-bottom: 50px;">INGRESAR</button>

  </form>

  <?php 

    if(isset($_GET['in1'])){
      array_push($_SESSION['cedula'], $_GET['in1']);
    }
    //unset($_SESSION['cedula']);
    if(isset($_GET['in2'])){
      array_push($_SESSION['empleados'], $_GET['in2']);
    }
    //unset($_SESSION['empleados']);

    if(isset($_GET['in3'])){
      array_push($_SESSION['cantHoras'], $_GET['in3']);
    }

    if(isset($_GET['in4'])){
      array_push($_SESSION['precio'], $_GET['in4']);
    }

  ?>

   <table id="tabEmpleados">
      <tr>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Cant. horas</th>
        <th>Precio</th>
        <th>Totales</th>
      </tr>

      <?php 

        for ($i = 0; $i < count($_SESSION['cedula']); $i++) {
          echo "
            <tr>
              <td>". $_SESSION['cedula'][$i] . "</td>
              <td>". $_SESSION['empleados'][$i] . "</td>
              <td>". $_SESSION['cantHoras'][$i] . "</td>
              <td>". $_SESSION['precio'][$i] . "</td>
              <td>". $_SESSION['precio'][$i] * $_SESSION['cantHoras'][$i]. "</td>
            </tr>
          ";
        }


        /*echo "<pre>";
        var_dump($_SESSION['empleados']);*/

       ?>

    </table>

</body>
</html>