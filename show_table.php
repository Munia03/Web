<?php
include('connect.php');

$table=$_SESSION['table'];
$output="";
$display = mysqli_query($conn,"select count(title) from Resources where field='".$table."'");
$row = mysqli_fetch_array($display);
$output="";
$total = $row[0];

if($total==0)
{
	$output.='<h3>Nothing added yet in this section.</h3>';

}
else{
//$display = mysqli_query($conn,"select * from Resources where field='".$table."'") ;*/
$dbh = new PDO("mysql:host=localhost;dbname=demo","root","");

$STM = $dbh->prepare("SELECT  * FROM Resources where field='$table'");
$output="";

$STM->execute();			
$STMrecords = $STM->fetchAll();


?>


      <table class="table table-striped">  
                    <thead style="text-align:center">
         <tr>
            <th> <h3>Paper Title</h3></th>

         </tr>
         </thead>
          <tbody>

 <?php
     foreach($STMrecords as $row)
{

 $output.="   
      
 <tr>
	
	<td align='middle'><a href='viewpaper/pdfviewer.php?id=".$row['id']."' target='_blank'> <h4>".$row['title']."</a></h4> </td>
       
	
      </tr>
      " ;
     
     }
    
    
  $output.= "</tbody>";


  	//echo $output; 

}

 $output.= "</table>";

  	echo $output; 



?>







  	
	
	
