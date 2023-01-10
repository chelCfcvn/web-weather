<?php
    require_once 'get_api.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <script src="js/all.min.js"></script>
    <script src="js/moment.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   <div class="container">
    <div class="form">
        <form style="width:100%;" method="post">
            <input type="text" class="text" placeholder="Enter city name" name="city" value="<?php echo $city ?>" />
            <input type="submit" value="Submit" class="submit" name="submit" />
            <?php echo $msg ?>
        </form>

    </div>
    <?php if($status=="yes"){?>
      <article class="widget">
         <div class="weatherIcon">
            <img src="http://openweathermap.org/img/wn/<?php echo $result['weather'][0]['icon']?>@4x.png"/>
         </div>
         <div class="weatherInfo">
            <div class="temperature">
               <span><?php echo round($result['main']['temp'])?>°</span>
            </div>
            <div class="description mr45">
               <div class="weatherCondition"><?php echo $result['weather'][0]['description']?></div>
               <div class="place"><?php echo $result['name']?></div>
            </div>
            <div class="description">
               <div class="weatherCondition">Wind</div>
               <div class="place"><?php echo $result['wind']['speed']?> M/H</div>
            </div>
         </div>
         <div class="date">
            <?php echo date('d M',$result['dt'])?> 
             
         </div>

      </article>
      <?php } ?>
      </div>
</body>

</html>