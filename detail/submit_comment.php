<?php

//memanggil database didalam koneksi
include 'koneksi.php';

// pemeriksaan form
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $comment =$_POST['comment'];

    //pencegahan SQL injection
    $stmt =$conn->prepare("INSERT INTO comments (name, comment, created_at) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $name, $comment);


    if($stmt->execute()){
        header('location: detail1.php');
        exit();
    }else{
        echo "Gagal" . $stmt->error;
    }
    $stmt->close();

}
$conn->close();
?>