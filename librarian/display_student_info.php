<?php
include "connection.php";
include "headder.php";

if(!(isset($_SESSION['admin'])))
{?>
     <script>
            window.location="adminlogin.php";
        </script>
<?php
}



?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
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
                                <h2>Students Info</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                            <?php
                                $res=mysqli_query($link,"select * from studreg");
                            ?>
                            <div style="overflow-x:auto;">
                            <table class="table table-bordered">
                                <tr>
                                <th>Name</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>MobileNo</th>
                                <th>Semester</th>
                                <th>EnrollementNo</th>
                                <th>Status</th>
                                <th colspan=2>Action</th>
                                </tr>

                                <?php
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        echo "<tr>";
                                        echo "<td>";echo $row["name"];echo "</td>";
                                        echo "<td>";echo $row["uname"];echo "</td>";
                                        echo "<td>";echo $row["email"];echo "</td>";
                                        echo "<td>";echo $row["phone"];echo "</td>";
                                        echo "<td>";echo $row["sem"];echo "</td>";
                                        echo "<td>";echo $row["eno"];echo "</td>";
                                        echo "<td>";echo $row["status"];echo "</td>";
                                        echo "<td>";?><a href="aproove.php?id=<?php echo $row["id"]; ?>">Aproove</a><?php echo "</td>";
                                        echo "<td>";?><a href="reject.php?id=<?php echo $row["id"]; ?>">Reject</a><?php echo "</td>"; 
                                    }
                                ?>
                            </table>
                            </div>
                            <?php
                            ?>
                               
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