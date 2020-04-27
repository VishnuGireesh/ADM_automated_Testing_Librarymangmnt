<?php
    include "connection.php";
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

                        <div id="returnbox">
                            <form name="return"  method="post">
                                <select name="eno" id="eno">
                                    <option>a</option>
                                    <option>b</option>
                                </select>
                                <button type="submit" name="sub" id="su">Login</button>
                            </form>
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




