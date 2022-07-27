<?php
  include './services/connection.php';

      // Consulta SQL
     $id= $_GET['id'];
     $sql='SELECT * FROM sicrecetas WHERE id='.$id;
     $resultado = $conn->query($sql);
   
 
      ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=formfor, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<body>
  
    <div class="container">
  <main>
    
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Editar receta</h4>
        <?php
      // Entrega Resultados
      while($row = $resultado->fetch_assoc()) {
    ?>
        <form action="edit-receta.php" method="post" class="needs-validation" novalidate>

          <div class="row g-3">

          <input type="text" class="form-control visually-hidden" name="id" placeholder="" value='<?php echo $row['id']?>' readonly>

            <div class="col-12">
              <label for="receta" class="form-label">Nombre receta</label>
              <input type="text" class="form-control" name="receta" placeholder="" value='<?php echo $row['receta']?>' required>
              <div class="invalid-feedback">
                Falta Nombre receta
              </div>
            </div>

            <div class="col-12">
              <label for="minireceta" class="form-label">Subtitulo receta</label>
              <input type="text" class="form-control" name="minireceta" placeholder="" value='<?php echo $row['minireceta']?>' required>
              <div class="invalid-feedback">
                Falta Subtitulo
              </div>
            </div>

            <div class="col-12">
              <label for="infomini" class="form-label">Mini descripción receta</label>
              <input type="text" class="form-control" name="infomini" placeholder="" value='<?php echo $row['infomini']?>' required>
              <div class="invalid-feedback">
                Falta Mini descripción
              </div>
            </div>

            <div class="col-12">
              <label for="img" class="form-label">Link imagen receta</label>
              <input type="text" class="form-control" name="img" placeholder="" value='<?php echo $row['img']?>' required>
              <div class="invalid-feedback">
                Falta link imagen receta.
              </div>
            </div>
          </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Editar receta</button>
        </form>
        <?php
      }
     $conn->close();

      ?>

      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
</body>
</html>