<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Engrain Dev Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <?php include 'main.php' ?>
    <div class="title">
      <h1>Property Info:</h1>
    </div>
    <div class="display">

      <div id="bigDiv" class="col-md-6">
             <h2>Larger Properties:</h2>
             <div class="indiv">
               <?php
                foreach($information['data'] as $pizza){
                  if($pizza['area'] > 1){
                    echo 'Square Footage: ' . $pizza['area'] . '<br>';
                    echo 'Unit Number: ' . $pizza['unit_number'] . '<br>';
                    echo 'Last Updated: ' . date("d-m-Y", strtotime($pizza['updated_at'])) . '<br>'.'<br>';
                  }
                }
                ?>
             </div>
      </div>

      <div id="smallDiv" class="col-md-6">
        <h2>Smaller Properties:</h2>
        <?php
         foreach($information['data'] as $pizza){
           if($pizza['area'] <= 1){
             echo 'Square Footage: ' . $pizza['area'] . '<br>';
             echo 'Unit Number: ' . $pizza['unit_number'] . '<br>';
             echo 'Last Updated: ' . date("d-m-Y", strtotime($pizza['updated_at'])) . '<br>'. '<br>';
           }
         }
         ?>
      </div>

  </body>
</html>
