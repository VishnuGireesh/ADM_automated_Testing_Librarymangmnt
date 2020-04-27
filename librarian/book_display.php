<?php
    include "connection.php";
    session_start();
?>

<html>
    <head>
        <title>demo page</title>
        <link rel="stylesheet" href="book_display.css">
        <script src="https://kit.fontawesome.com/8877312db4.js" crossorigin="anonymous"></script>
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

                        <div class="colum3">
                        <!-- search box starts -->
                        <div id="search box">
                            <form name="ss" method="POST">
                            <input type="text" name="key" placeholder="Enter keyword" required><br>
                            <button type="submit" name="sub">SEARCH</button>
                            </form>
                        </div>

                        <div id="bookbox">
                            <?php
                            if(isset($_POST["sub"]))
                            {
                                $qury="select * from books where name like ('%$_POST[key]%')"  or die (mysqli_error());
                                $result=mysqli_query($link,$qury);
                                
                                $count=0;
                                $count=mysqli_num_rows($result);

                                ?>
                                <div style="overflow-x:auto;">
                                <table>
                                    <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Author</th>
                                    <th>Publication</th>
                                    <th>Quantity</th>
                                    <th>Available Quantity</th>
                                    </tr>
    
                                    <?php
                                        while($row1=mysqli_fetch_array($result))
                                        {
                                            $a=$row1["image"];
                                            $b="books_image/";
                                            $c=$b.$a;
    
                                            echo "<tr>";
                                            echo "<td>";echo $row1["name"];echo "</td>";
                                            echo "<td>";?> <img src="<?php echo $c; ?>" height="100px" width="100px"><?php echo "</td>";
                                            echo "<td>";echo $row1["author"];echo "</td>";
                                            echo "<td>";echo $row1["publication"];echo "</td>";
                                            echo "<td>";echo $row1["qty"];echo "</td>";
                                            echo "<td>";echo $row1["a_qty"];echo "</td>";
                                            echo "</tr>";
                                            $count=$count-1;
                                            
                                        }
                                    ?>
                                </table>
                                    <?php } 
                            else{
                            $res=mysqli_query($link,"select * from books");

                            ?>
                            <div style="overflow-x:auto;">
                            <table>
                                <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Author</th>
                                <th>Publication</th>
                                <th>Quantity</th>
                                <th>Available Quantity</th>
                                </tr>

                                <?php
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        $a=$row["image"];
                                        $b="books_image/";
                                        $c=$b.$a;

                                        echo "<tr>";
                                        echo "<td>";echo $row["name"];echo "</td>";
                                        echo "<td>";?> <img src="<?php echo $c; ?>" height="100px" width="100px"><?php echo "</td>";
                                        echo "<td>";echo $row["author"];echo "</td>";
                                        echo "<td>";echo $row["publication"];echo "</td>";
                                        echo "<td>";echo $row["qty"];echo "</td>";
                                        echo "<td>";echo $row["a_qty"];echo "</td>";
                                        
                                    }
                                ?>
                            </table>
                            <?php
                         } 
                         ?>
                        </div>

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