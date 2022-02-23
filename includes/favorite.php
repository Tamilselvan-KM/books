<?php
session_start();
//connection
$con = mysqli_connect('localhost', 'root', '', 'ebookstore'); 
//fetch book name
if(isset($_GET['id'])){
    $favid = $_GET['id'];
}
if(isset($_GET['title'])){
    $favtitle = $_GET['title'];
}
if (isset($_SESSION['id'])) {
    $session_id = $_SESSION['id'];
}
$sql = "INSERT INTO favorite (userid, fav_movie, fav_title) VALUES ('$session_id', '$favid', '$favtitle')";
$result = mysqli_query($con, $sql);
if($result){
    echo '<script>
        alert("This Book has been add as a Favorite");
         location.href = "updateprofile.php";
  </script>
';
}else{
    echo "error".mysqli_error($con);
}


?>