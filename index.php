<?php 
    include 'config/database.php';

    $annees = mysqli_query($db,"SELECT * FROM data");

    
   if(isset($_POST['search'])){
    $annee = $_POST['annee'];
    $query = sprintf("SELECT janvier , fevrier , mars , avril , mai , juin , juillet , aout, septembre, octobre, novembre, decembre FROM data WHERE annee='$annee'");
    $resultat =  mysqli_query($db,$query);

    $data = array();

    foreach($resultat as $row){
        $data[] = $row;
       
    }

    $chartdata = array();
    foreach ($data as $row){
        array_push($chartdata,(int)$row['janvier']);
        array_push($chartdata,(int)$row['fevrier']);
        array_push($chartdata,(int)$row['mars']);
        array_push($chartdata,(int)$row['avril']);
        array_push($chartdata,(int)$row['mai']);
        array_push($chartdata,(int)$row['juin']);
        array_push($chartdata,(int)$row['juillet']);
        array_push($chartdata,(int)$row['aout']);
        array_push($chartdata,(int)$row['septembre']);
        array_push($chartdata,(int)$row['octobre']);
        array_push($chartdata,(int)$row['novembre']);
        array_push($chartdata,(int)$row['decembre']);
    }

  
   }
?>

<?php include 'views/index.views.php'; ?>

