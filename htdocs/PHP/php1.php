<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <h2 class="tieude">nhap thong tin dang ky</h2>
    <form action="php1.php" method="post">
      <input type="text" name="mssv" id="" /><br />
      <input type="text" name="ten" id="" /><br />
      <input type="text" name="email" id="" /><br />
      <input type="text" name="dienthoai" id="" /><br />
      <input type="submit" name="dangky" value="dang ky" />
    </form>
    <?php
    if((isset($_POST['dangky']))&&($_POST['dangky'])){
    // if($_POST['dangky']){
    $mssv=$_POST['mssv'];
    $ten=$_POST['ten'];
    $email=$_POST['email'];
    $dienthoai=$_POST['dienthoai'];
    $kq='<h2 class="tieude"> KET QUA TIM KIEM</h2>
    <p>
    ten: <span>'.$ten.'</span>
    <p>
    MSSV: <span>'.$mssv.'</span>
    <p>
    Email: <span>'.$email.'</span>
    <p>
    Lop: <span>'.$dienthoai.'</span>
    <p>';
    echo $kq;
    }
    ?>
  </body>
</html>
