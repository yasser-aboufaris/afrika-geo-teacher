<?php
include("connect.php");

$id= $_GET['id'];
echo    ''.$id.'';

$query ="DELETE FROM pays WHERE id_Pays=$id";

$result = mysqli_query($conn,$query);

if ($result) {
    echo "deleted succesfuly ";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}else {
    echo "somthing wint wrong";
}