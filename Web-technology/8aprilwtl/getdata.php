<?php

$mysqli = new mysqli("localhost", "root", "", "stud");


if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
} else {

    $sql = "SELECT * FROM BE";
    $res = mysqli_query($mysqli, $sql);

  
    if ($res) {
        ?>
        <table border="2">
            <tr>
                <th>Roll No</th>
                <th>Name</th>
            </tr>
        <?php
        
        while ($newarray = mysqli_fetch_array($res)) {
            $r = $newarray['roll']; 
            $n = $newarray['name']; 
            ?>
            <tr>
                <td><?php echo $r; ?></td>
                <td><?php echo $n; ?></td>
            </tr>
            <?php
        }
        ?>
        </table>
        <?php
    } else {
        
        echo "Error executing query: " . mysqli_error($mysqli);
    }
}
?>