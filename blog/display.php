<?php

include "db_connection.php";

 $sql = "SELECT `name` , `descryption` FROM `przepisy`";
 $result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
    echo '<h1>' . $row["name"] . '</h1>';
    echo '<h2>' . $row["descryption"] . '</h2>';

}


 $conn->close()

?>