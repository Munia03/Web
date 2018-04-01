<?php
session_start();
$table = $_SESSION['table'];

include ('connect.php');



if(!empty($_POST)){
$title = mysqli_real_escape_string($conn, $_POST['title']);

$link = mysqli_real_escape_string($conn, $_POST['link']);

if(!($title=="" || $link=="")){

$sql = "INSERT INTO Resources (field, title, link) VALUES ( '$table','$title', '$link')";

//echo $sql;
$output="";
if(mysqli_query($conn, $sql))
    {
    
     $select_query = "SELECT * FROM Resources where field= '". $table."'";
     $result = mysqli_query($conn, $select_query);
     $output .= '
      <table class="table table-striped">  
                    <thead>
         <tr>
            <th> <h3>Paper Title</h3></th>
            <th><h3>Link</h3></th>
       
         </tr>
         </thead>
          <tbody>

     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
 <tr>
	<td> <h4>'. $row["title"] . '</h4> </td>
        <td> <a href="'.$row["link"].'"><h4>'.$row["link"].'</h4></a> </td>
	
      </tr>
       
      ';
     }
     $output .= '</tbody></table>';
    }
    echo $output;

}
}
?>


