<?php
    include "connection.php";
    session_start();
?>

<html>
    <head>
        <title>demo page</title>
        <link rel="stylesheet" href="return_books.css">
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
                            <h4>Return Book</h4>
                            <div id="formbox">
                                <form name="f1" method="post">
                                    <select name="enoo" id="ee">
                                        <option>--Choose eno--</option>
                                        <?php
                                            $res=mysqli_query($link,"select s_eno from issue_books where b_return_date=' '");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                echo "<option>";
                                                echo $row["s_eno"];
                                                echo"</option>";
                                            }
                                        ?>
                                    </select>
                                <button type="submit" name="sub">SELECT</button>

                                </form>
    
                            </div>

                            <div id="tablebox">

                            <table>
                                <tr>
                                <th>Enrollement</th>
                                <th>Name</th>
                                <th>Sem</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Bookname</th>
                                <th>Issue Date</th>
                                <th></th>
                                </tr>
                            <?php

                                            if(isset($_POST["sub"]))
                                            {
                                                $res=mysqli_query($link,"select * from issue_books where s_eno=$_POST[enoo]");
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>"; echo $row["s_eno"]; echo "</td>";
                                                    echo "<td>"; echo $row["s_name"]; echo "</td>";
                                                    echo "<td>"; echo $row["s_sem"]; echo "</td>";
                                                    echo "<td>"; echo $row["s_contact"]; echo "</td>";
                                                    echo "<td>"; echo $row["s_email"]; echo "</td>";
                                                    echo "<td>"; echo $row["b_name"]; echo "</td>";
                                                    echo "<td>"; echo $row["b_issue_date"]; echo "</td>";
                                                    echo "<td>";?> <a href="return.php?id=<?php echo $row["id"] ?>"> Return Book </a> <?php echo "</td>";
                                                    echo "</tr>";

                                                }

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