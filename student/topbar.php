<?php

include "connection.php";
//session_start();
$n=$_SESSION['student'];
?>

<div id="pad">
<div class="colum3" style="background-color:black;">
    <div class="row" id="top">
        <div class="subcolumn1">
            <i class="fas fa-user-circle"> &nbsp;&nbsp;Welcome&nbsp;<?php echo $n; ?></i>
        </div>
        <div class="subcolumn2"></div>
        <div class="subcolumn3"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbspLogOut</div>
    </div>
</div>
</div>