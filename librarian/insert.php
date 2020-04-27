<?php
include "connection.php";

$a=$_POST["enumber"];
$b=$_POST["names"];
$c=$_POST["sems"];
$d=$_POST["phones"];
$e=$_POST["emails"];
$f=$_POST["book"];
$g=$_POST["idate"];
$h=$_POST["unames"];


mysqli_query($link,"insert into issue_books (s_eno,s_name,s_sem,s_contact,s_email,b_name,b_issue_date,s_uname) values ($a,'$b',$c,'$d','$e','$f','$g','$h')");
mysqli_query($link,"update books set a_qty=a_qty-1 where name='$f'");

?>

<script>
    alert("BOOK ISSUED SUCESSFULLY");
    window.location="issue_books.php";
</script>

