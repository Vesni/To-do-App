<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f7f6; 
    align-items: center;
    justify-content: center;
    height: auto; 
    padding: 20px;
    
}
h1 {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
    background-color: #e0e0e0; 
    padding: 15px 30px;
    border-radius: 10px; 
    width  : 200px;
    place-items: center;
    margin-left : 540px;
    
}

form {
    display : flex;
    margin-bottom: 20px;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px; 
    width : 250px;
    margin-left : 540px;

    
    
}
button {
    padding: 12px 25px;
    font-size: 16px;
    background-color: #85f3d7; 
    color: white;
    border: none;
    border-radius: 8px; 
    transition:0.2s;
    
}

button:hover {
    background-color: #f7ff85;
    color :#333; 
    
}


ul {
    list-style-type: none; 
    width: 500px; 
text-align : center;
/* margin-bottom : 20px;   */
    padding: 50px; 
     /* border: 1px solid lightgray; 
    background-color: #f9f9f9;  */
    margin : 0 auto;
}
li{

background-color: #f9f9f9;
margin-bottom : 15px;
padding : 10px;
border-radius : 5px;
display : flex;
justify-content : space-between;
align-items : center;
box-shadow : 0px 2px 5px rgba(0,0,0, 0.1);



}

delete{
  background-color: red;
  color: white;
  border: none;
  padding: 6px 10px;
  border-radius: 5px;
  cursor: pointer;
}



</style>
    <title>To Do List</title>

</head>
<body>
   <h1> To Do List</h1>
   <br><br>
    <form method="post">
        <input type="text" name="task" placeholder="Enter a task" required>
        <button type="submit" name="add">Add</button>
</form>
    <ul>
<?php

include 'todoconnect.php';


?>

<!-- in a php file (any file with php extension) , html code can be present
but in a html file, php code cannot be present -->
    </ul>


</body>
</html>