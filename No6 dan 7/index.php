<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="assets/boostrap/css/bootstrap.css">
    <script src=""assets/boostrap/js/bootstrap.js""></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Arkademy Exam</a>
    </div>
  </div>
</nav>
<div class='container'>
<?php
include_once 'koneksi.php';
$view = $conn->prepare("SELECT * FROM posts");
$view->execute();
$view->bind_result($id,$title,$content,$createdBy);
while ($view->fetch()){

echo "


    <div class='panel panel-primary'>
    <div class='panel-heading'><h1 class='text-center'>{$title}</h1></div>
    <div class='panel-body'>{$content}</div>
".
"
</div>


";
$ID = $id;
}


echo "<div class=''>
    <h4>Komentar</h4>
<ul class='list-group list-group-flush'>";

$sql = "SELECT * FROM comments Where postId = $ID";
$query = $conn->query($sql) or die($conn->error);
while ($data = $query->fetch_assoc()) {
    echo "
        <li class='list-group-item'>{$data['comment']}</li>
    ";
};

echo "</ul></div>";
?>
</div>
<nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Trian &copy; <?php echo date('Y');?></a>
    </div>
</nav>
</body>
</html>