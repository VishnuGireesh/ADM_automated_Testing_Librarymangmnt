<?php
include "connection.php";
session_start();

?>
<html>
    <head>
        <title>demo page</title>
        <link rel="stylesheet" href="issued_books.css">
        <script src="https://kit.fontawesome.com/8877312db4.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="container">
            <div class="row">
                
            <!-- Side bar navigation here -->

                <?php
                    include "sidebar.php";
                ?>

                <div class="column2">
                    <div class="row">

                        <!--  Top portion starts here -->

                        <?php
                            include "topbar.php";
                        ?>
                        
                        <!-- Main area starts here -->

                        <div class="colum3" style="background-color:darkgoldenrod;">

                        <div id="bookbox">
                            <?php

                                $uname=$_SESSION['student'];

                                $qury="select * from issue_books where s_uname='$uname'"  or die (mysqli_error($link));
                                $result=mysqli_query($link,$qury);
                                
                                  ?>


                                <div style="overflow-x:auto;">
                                <table>
                                    <tr>
                                    <th>Book Name</th>
                                    <th>Image</th>
                                    <th>Issued date</th>
                                    <th>Return Date</th>
                                    </tr>
    
                                    <?php
                                        while($row1=mysqli_fetch_array($result))
                                        {
                                            
                                            echo "<tr>";
                                            $bname=$row1["b_name"];
                                            echo "<td>";echo $row1["b_name"];echo "</td>";

                                            $qry="select * from books where name='$bname'"  or die (mysqli_error($link));
                                            $result2=mysqli_query($link,$qry);
                                            while($row=mysqli_fetch_array($result2))
                                        {
                                            $a=$row["image"];
                                            $b="books_image/";
                                            $c=$b.$a;
                                            echo "<td>";?> <img src="<?php echo $c; ?>" height="100px" width="100px"><?php echo "</td>";
                                        }

                                            echo "<td>";echo $row1["b_issue_date"];echo "</td>";
                                            echo "<td>";echo $row1["b_return_date"];echo "</td>";
                                            
                                        }
                                    ?>

                        </div>
                    </div>
                </div>
            </div>
            
           <!-- footer starts -->

            <?php
                include "footer.php";
            ?>
        </div>
    </body>
</html>