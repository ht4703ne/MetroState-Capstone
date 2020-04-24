<?php
                //connect
                $con = mysqli_connect('localhost', 'root', '');

                    mysqli_select_db($con, 'ffb_stats');



                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    // sql to delete a record
                    $sql = "DELETE FROM player WHERE [NAME]=$id"; 
                    
                    if (mysqli_query($conn, $sql)) {
                        mysqli_close($conn);
                        header('Location: deletepage.php'); //If book.php is your main page where you list your all records
                        exit;
                    } else {
                        echo "Error deleting record";
                    }

?>