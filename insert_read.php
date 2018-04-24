<?php
    session_start();
	include ("connect.php");
        $id=$_SESSION['paper_id'];
	$title=$_SESSION['title'];
	
if(!empty($_POST)){
 
        include ("connect.php");
        $summary = mysqli_real_escape_string($conn, $_POST['summary']);
         $summary = str_replace("\\r\\n", "\n", $summary);
	$username= $_SESSION['username'];
        $paper_id = $id;

	$dbh = new PDO("mysql:host=localhost;dbname=demo","root","");

	
        $stmt = $dbh->prepare("insert into Read_papers values('',?,?,?,?)");
        $stmt->bindParam(1,$username);
    	$stmt->bindParam(2,$title);
    	$stmt->bindParam(3,$summary);
	$stmt->bindParam(4,$paper_id);
    	$stmt->execute();

echo '<h4><b> My summary:</b></h4>
            <div  style="padding:15px 0px 0px 0px">
        <p> <h4>'.$summary.'</h4> </p>
            </div>';
            
        

   
}
?>


