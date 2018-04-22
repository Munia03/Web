<?php
//fetch.php
if(isset($_POST["query"]))
{
 $connect = mysqli_connect("localhost", "root", "", "fairuz");
 $request = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM profile 
  WHERE username LIKE '%".$request."%' 
  OR first_name LIKE '%".$request."%' 
  OR last_name LIKE '%".$request."%'
 ";
 $result = mysqli_query($connect, $query);
 $data =array();
 $html = '';
 $html .= '
  <table class="table table-bordered table-striped">
   <tr>
    <th>UserName</th>
    <th>First Name</th>
    <th>Last Name</th>
	<th>Institution</th>
	<th>Profession</th>
	<th>Research Field</th>
   </tr>
  ';
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $data[] = $row["username"];
   $data[] = $row["first_name"];
   $data[] = $row["last_name"];
   
   $html .= '
   <tr>
    <td>'.$row["username"].'</td>
    <td>'.$row["first_name"].'</td>
    <td>'.$row["last_name"].'</td>
	<td>'.$row["institution"].'</td>
	<td>'.$row["profession"].'</td>
	<td>'.$row["research_field"].'</td>
   </tr>
   ';
  }
 }
 else
 {
  $data = 'No Data Found';
  $html .= '
   <tr>
    <td colspan="3">No Data Found</td>
   </tr>
   ';
 }
 $html .= '</table>';
 if(isset($_POST['typehead_search']))
 {
  echo $html;
 }
 else
 {
  $data = array_unique($data);
  echo json_encode($data);
 }
}

?>
