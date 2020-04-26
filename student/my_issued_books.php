<?php

include "connection.php";
include "headder.php";
if(!(isset($_SESSION['student'])))
{?>
     <script>
            window.location="login.php";
        </script>
<?php
}

?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                            <?php

                                $uname=$_SESSION['student'];

                                $qury="select * from issue_books where s_uname='$uname'"  or die (mysqli_error($link));
                                $result=mysqli_query($link,$qury);
                                
                                  ?>

<table class="table table-bordered">
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

</table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <?php
            include "footer.php";
        ?>