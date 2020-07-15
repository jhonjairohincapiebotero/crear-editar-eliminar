<?php 
//**************************************************************//
/*Autor:Jhon Jairo Hincapié Botero
  Agradecimieto: Todos los programadores que enseñan su código enseñanzas en youtube y demas buscadores*/

 //**************************************************************//

//conexion a la base de datos
 include_once('inc/conexion.php');

//conexion a tabla de base de datos 
// variable global fetchAll

$cnx_leer = 'SELECT * FROM yt_colores';
$jver = $mbd->prepare($cnx_leer);
$jver->execute();
$resultado = $jver->fetchAll();
//var_dump($resultado);

//Agregar variable global $_POST de formulario 

if ($_POST) {
   $color = $_POST['color'];
   $descripcion = $_POST['descripcion'];

//Agragar INSERT INTO VALUES tabla a escoger signo (? )para la seguridad 
   $cnx_agregar = 'INSERT INTO yt_colores (color,descripcion) VALUES (?,?)';
   $jintroduce = $mbd->prepare($cnx_agregar);
   $jintroduce->execute( array($color,$descripcion));

   //Cerrar conexión a base de datos y sentencia
   $jintroduce =null;
   $mbd = null;
   header('location:index.php');
   }

//AGREGAR ID
   if($_GET){

        $id = $_GET['id'];

        $cnx_unico = 'SELECT * FROM yt_colores WHERE id=?';
        $junico = $mbd->prepare($cnx_unico);
        $junico->execute(array($id));
        $resultado_unico = $junico->fetch();


}


?>


    
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--link icono-->

   <script src="https://kit.fontawesome.com/675ae0e76f.js" crossorigin="anonymous"></script>

  <!--fin icono-->

    <title>Conexion PHP</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <?php foreach ($resultado as $dato): ?> 
         <div class="alert alert-<?php echo $dato['color'] ?> text-uppercase" 
         role="alert">
           <?php echo $dato['color'] ?>
           -
           <?php echo $dato['descripcion'] ?>
           <a href="borrar.php?id=<?php echo $dato['id'] ?>" class = "float-right ml-3"  ><i class="fas fa-trash"></i></a>

           <a href="index.php?id=<?php echo $dato['id']  ?>" class="float-right"><i class="far fa-edit"></i></a>
          </div>
            <?php endforeach ?>
        </div>
        
        <div class="col-md-6">
          
          <?php if(!$_GET): ?>
            <h2>Agregar Elemento</h2>
          <form method="POST">
            <input type="text" class="form-control" name="color">
            <input type="text" class="form-control mt-3" name="descripcion">
            <button class="btn- btn-primary mt-3">Agregar Elemento</button>
            
          </form>
          <a href="ruleta.php" class="btn btn-large btn-success mt-3">Ver ruleta</a>
        <?php endif ?>

        <?php if($_GET): ?>
          <h2>Editar Elemento</h2>
          <form method="GET" action="editarindex.php">
            <input type="text" class="form-control" name="color" value="<?php echo $resultado_unico['color'] ?>">
            <input type="text" class="form-control mt-3" name="descripcion" value="<?php echo $resultado_unico['descripcion'] ?>">
            <input type="hidden" name="id" value="<?php echo $resultado_unico['id'] ?>">
            <button class="btn- btn-primary mt-3">Editar Elemento</button>
          </form>

        <?php endif ?>
        </div>
      </div>
    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
$junico = null;
$mbd = null;


?>