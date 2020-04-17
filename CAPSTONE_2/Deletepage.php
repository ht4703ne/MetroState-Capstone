<html>
<head>
    <title>Delete Players </title>
</head>
    <body>
        <h1> Delete Players </h1>

        <section>
            <button><a href="#"> </a>Admin Page</button>
        </section>
        
        <br>

        <table border =1 cellpadding=1 cellspacing=1>
            <tr>
                <th> Name </th> 
                <th> Delete </th>
            </tr>
            <?php
                //connect
                $con = mysqli_connect('localhost', 'root', 'admin');

                    mysqli_select_db($con, 'ffb_stats');

                $sql = "SELECT * FROM player";

                //Execute the query
                $records = mysqli_query($con, $sql);

                while($row = mysqli_fetch_array($records))
                {
                    echo "<tr>";
                    echo "<td>" .$row['NAME'] . "</td>";
                    echo "<td><a href=delete.php?id=" .$row['ID_PK'] .">Delete</a></td>";
                }

            ?>
        </table>

    </body>

</html>