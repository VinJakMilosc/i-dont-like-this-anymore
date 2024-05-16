<?php

include "db_connection.php";

 $sql = "SELECT `name` , `descryption` FROM `przepisy`";
 $result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
    echo '<div class="card text-center">';
    echo '<h3>' . $row["name"] . '</h1>';
    echo '<p>' . $row["descryption"] . '</h2>';
    echo '</div>';
}


 $conn->close()

?>