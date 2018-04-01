<?php
include('connect.php');

$table=$_SESSION['table'];
$output="";
$display = mysqli_query($conn,"select count(title) from Resources where field='".$table."'");
$row = mysqli_fetch_array($display);

$total = $row[0];

if($total==0)
{
	$output.='<h3>Nothing added yet in this section.</h3>';

}
else{
//$display = mysqli_query($conn,"select * from Resources where field='".$table."'") ;

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
     
    }
    $output .= '</tbody></table>';


    echo $output;







?>
    	
	
	
