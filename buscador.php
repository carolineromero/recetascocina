<?php
include "./services/connection.php";
$sql = "SELECT * FROM sicrecetas";
$result = $conn->query($sql);
include './services/connect_test_db.php';
$searchErr = '';
$recetas_busca='';
if(isset($_POST['search']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("SELECT * from sicrecetas WHERE receta like '%$search%' or ingredientes like '%$search%'");
        $stmt->execute();
        $recetas_busca = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($art_details);
    }
    else
    {
        $searchErr = "Introduce algun campo para buscar";
    }
}
$conn->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Carousel Template · Bootstrap v5.2</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
   

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

    

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <?php
      
      
                 if(!$recetas_busca)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{
                    foreach($recetas_busca as $key=>$value)
                    {
                        ?>
    
        

    <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?php echo $value['img']?>" class="d-block mx-lg-auto img-fluid img-receta" alt="" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $value['receta']?></h1>
        <p class="lead"><?php echo $value['ingredientes']?></p>
        <p class="lead"><?php echo $value['procedimiento']?></p>
        <p class="lead"><?php echo $value['web']?></p>
        
      </div>
    </div>
  </div>
  <?php
                    }
                 }
                ?>
  <hr class="featurette-divider">
 

  </div>


  <?php
  include './estructura/footer.php';
  ?>

  </body>
</html>