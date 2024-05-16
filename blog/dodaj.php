<?php
include "db_connection.php";

// pobranie danych z formularza
$name = $_POST ["name"];
$descryption = $_POST ["descryption"];



// przygotowanie sql-insert into
$sql = "INSERT INTO `przepisy` (`name`, `descryption`) VALUES ('$name', '$descryption');";

// sql wykonanie sql
if($conn->query($sql) === TRUE) {
        echo "dodałeś przepis";
} else {
    echo "coś poszło nie tak :<";
}


$conn->close()

?>
