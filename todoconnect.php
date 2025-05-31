<?php

$conn = new mysqli("localhost:3307", "root", "", "todo");
if ($conn -> connect_error){
    die("Connection failed");
}
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add"])){

$task = $_POST["task"];
if(!empty($task)){

    $sql = "INSERT INTO tasks (task) VALUES ('$task')";
     $conn -> query($sql);
}
}
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])){

$id = $_POST["id"];

$sql = "DELETE FROM tasks WHERE id = $id";

$conn -> query($sql);

}
$sql = "SELECT * FROM tasks ORDER BY id DESC";

$result = $conn -> query($sql);

if ($result->num_rows > 0){
    # loop
    while($row = $result -> fetch_assoc()){

       
        echo "<li>" . $row["task"] . "
<form method = 'POST'>
<input type = 'hidden' name = 'id' value = '" . $row["id"] . "'>
<button type = 'submit' name = 'delete' class = 'delete'> Delete </button>
</form>
</li>
" ;
    }
    

    }
?>