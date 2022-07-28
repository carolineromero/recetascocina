<?php
   include './services/connection.php';

      // Consulta SQL
     $sql='SELECT * FROM sicrecetas';
     $resultado = $conn->query($sql);
      ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Something is Cooking</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/custom.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
  <?php
  include './estructura/header.php';
  ?>

<main>

  <?php
  include './estructura/carrusel.php';
  ?>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

  <?php
  include './estructura/promo-cercle.php';
  ?>

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

   
      <?php
      // Entrega Resultados
      while($row = $resultado->fetch_assoc()) {
        ?>
        

      
       <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1"><?php echo $row['receta']?> <span class="text-muted"><?php echo $row['minireceta']?></span></h2>
        <p class="lead"><?php echo $row['infomini']?></p>
        
        <a href="edit.php?id=<?php echo $row['id']?>">
            <button class="btn btn-secondary editar" href="#">Editar &raquo;</button>
      </a>
         <a href="delete-receta.php?id=<?php echo $row['id']?>">
        <button class="btn btn-secondary eliminar" href="#">Eliminar &raquo;</button>
      </div>
      <div class="col-md-5">
        <a href="receta.php?id=<?php echo $row['id']?>">
        <img src="<?php echo $row['img']?>" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
      </a>
      </div>
    </div>

    <hr class="featurette-divider">
    <?php
      }
     $conn->close();

      ?>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <?php
  include './estructura/footer.php';
  ?>
      </main>
  </body>
</html>
