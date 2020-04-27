<?php       

    include "connection.php";

?>

<html>
    <head>
        <title>demo page</title>
        <link rel="stylesheet" href="book_details_with_student.css">
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

                        <div class="colum3">
                            <div id="display">
                                <h4>Book With Details</h4>

                                <div style="overflow-x:auto;">
                            <table>
                                <tr>

                                <?php
                                    $i=0;
                                    $res=mysqli_query($link,"select * from books where a_qty>0");
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        $a=$row["image"];
                                            $b="books_image/";
                                            $c=$b.$a;
    
                                        $i=$i+1;
                                        echo "<td>";?> <img src="<?php echo $c; ?>" height="100px" width="100px">  <?php 
                                        echo "<br><b>"; echo $row["name"]; echo "</b></br>";
                                        echo "<b>Available : "; echo $row["a_qty"]; echo "</b></br>";
                                        echo "<b>Total : "; echo $row["qty"]; echo "</b></br>";
                                        echo "<b>"; ?> <a href="book_borrowers.php?bname=<?php echo $row["name"];  ?>">Current Borrowers</a><?php echo "</b></br>";
                                        echo "</td>";

                                        if($i==4)
                                        {
                                            echo "</tr>";
                                            echo "<tr>";
                                        }

                                    }
                                ?>
                                </table>
                        </div>

                            </div>
s
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