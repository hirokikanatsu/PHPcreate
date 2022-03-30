<?php 


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>home</title>
  </head>
  <body>

  <?php include('header.php'); ?>

    

  <div class="wrapper">
    <div class="wrapperHome">
      <h1 class="homeh1">～今日の献立を探そう～</h1>

      <h2 class="homeh1">1品300円以下限定の献立を数多く登録</h2>

      <div id="formContentHome">

        <div id="formFooter" style="margin-top:30px;">
          <button type="button" class="btn btn-info text-right pageback" style="font-size: 30px; width:350px;"><a href="login.php">ログイン画面に進む</a></button>
        </div>

        <div id="formFooter" style="margin-top:20px;">
          <button type="button" class="btn btn-info text-right pageback" style="font-size: 30px; width:350px; background-color:greenyellow;"><a href="signup.php">初めての方はこちらへ</a></button>
        </div>
      </div>
   </div>
  </div>
  <?php include('footer.php'); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>