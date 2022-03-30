<?php 
session_start();
require_once(ROOT_PATH.'Controllers/MenuController.php');

$menu = new MenuController;
$menu->quitpagemove();
$menu->checktoken();
$result = $menu->createconfirm();




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

    <title>createend</title>
  </head>
  <body>
  <?php include('user_header.php'); ?>

<div class='indexwrapper'>   
    <div class="endwrap">
        <h1 class='endh1'>「<?php echo $_POST['menuname'] ?>」を登録しました</h1>

        <div class="d-grid gap-2 col-6 btnwrap">
            <button type="button" class="btn btn-light endbtn" style="background-color:#ecef99; font-size:30px;" ><a href="mypage.php" style="color:black">my献立一覧画面に戻る</a></button>
            <button type="button" class="btn btn-secondary btn-lg endbtn" style="font-size:30px;"><a href="index.php" style="color:black" >献立メイン画面に戻る</a></button>
            <?php if($_SESSION['user']['role'] == 1): ?>
              <button type="button" class="btn btn-secondary btn-lg endbtn" style="font-size:30px;"><a href="allpage.php" style="color:black" >全献立画面に戻る</a></button>
            <?php endif; ?>
        </div>
    </div>

    <?php include('footer.php'); ?>
</div>


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