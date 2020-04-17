<?php
                //connect
                $con = mysqli_connect('localhost', 'root', 'admin');

                    mysqli_select_db($con, 'ffb_stats');

                $sql = "DELETE FROM player WHERE ID_PK='$_GET[id]'";

                //Execute the query
                if(mysqli_query($con, $sql))
                    header("refresh:l; url=deletepage.php");
                else
                    echo "Not Deleted";

?>