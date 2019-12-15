<!DOCTYPE html>
<html>
  <head>



  <!-- dependencies -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <!-- myscripts -->
  <link rel = "stylesheet" href = "style.css" />

  </head>

  
    <body>

    <?php 
        $user = $_POST['username'];
        $password =$_POST['password'];
        $file = fopen("txt/users.txt", "a") or die("can't open file");
        $line= $name.":".$password."\n";
        fwrite($file, $line);
        fclose($file);
        print("Welcome $user!");

    ?>
    </body>

  <footer class="page-footer font-small blue pt-4">
      <div class="footer-copyright py-3">© 2019 Junior Garcia
        </div>
  </footer>

</html>