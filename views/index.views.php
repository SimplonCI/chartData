<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ChartChallenge</title>
    <style type="text/css">
      #chart-container {
        width: 900px;
        height: auto;
      }

      #annee{
        width:300px;  
        padding: 10px 32px; 
        font-size: 16px;
      }
      .button{
        background-color: #4684ee;
        border: none;
        color: white;
        padding: 13px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        /* margin: 4px 2px; */
        cursor: pointer;
      }
    </style>
</head>
<body>
    <center>
        <form action="index.php" method="post" class="">
            <select name="annee" id="annee" class="">
                <option value="" selected disabled> Annee</option>
                <?php while($rows = mysqli_fetch_assoc($annees)): ?>
                    <option value="<?php echo $rows['annee'] ?>"><?php echo $rows['annee'] ?></option>
                <?php endwhile?>
            </select>


            <input type="submit" value="AFFICHER" name="search" class="button">
        </form>

        <?php if(isset($chartdata)): ?>
            <h4>Max: <?php echo max($chartdata);;?></h4>
            <h6>ANNEE: <?php echo $_POST['annee'] ;?></h6>
        <?php endif?>


        <div id="chart-container">
        <canvas id="mycanvas"></canvas>
        </div>

    </center>
    
  
       

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script>
         var content = new Array();
            <?php if(isset($chartdata)): ?>
            <?php foreach($chartdata as $key => $val){ ?>
                content.push('<?php echo $val; ?>');
            <?php } ?>
            <?php endif?>
        var ctx = document.getElementById('mycanvas').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
                datasets: [{
                    label: 'Pluviométrie',
                    data: content,
                    fill: false,
                    borderColor: "rgb(255, 99, 132)",
                    backgroundColor: "rgb(255, 99, 132)"
                }]
            }
        });

    </script>
    
</body>
</html>