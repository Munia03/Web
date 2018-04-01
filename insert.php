<?php 
 $connect = mysqli_connect("localhost", "root", "", "fairuz");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $first_name = mysqli_real_escape_string($connect, $_POST["first_name"]);  
      $last_name = mysqli_real_escape_string($connect, $_POST["last_name"]);  
      $institution = mysqli_real_escape_string($connect, $_POST["institution"]);  
      $profession = mysqli_real_escape_string($connect, $_POST["profession"]);  
      $research_field = mysqli_real_escape_string($connect, $_POST["research_field"]);  
      $published_paper = mysqli_real_escape_string($connect, $_POST["published_paper"]);  
      $ongoing_work = mysqli_real_escape_string($connect, $_POST["ongoing_work"]);  
      $joined_group = mysqli_real_escape_string($connect, $_POST["joined_group"]);  
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE profile  
           SET first_name='$first_name',   
           last_name='$last_name',   
           institution='$institution',   
           profession = '$profession',   
           research_field = '$research_field', 
           published_paper = '$published_paper',   
           ongoing_work = '$ongoing_work',   
           joined_group = '$joined_group'   
           WHERE id='".$_POST["employee_id"]."'";
      }  
      else  
      {  
           $query = "  
           INSERT INTO profile(first_name, last_name, institution, profession, research_field, published_paper, ongoing_work, joined_group)  
           VALUES('$first_name', '$last_name', '$institution', '$profession', '$research_field', '$published_paper', '$ongoing_work', '$joined_group');  
           ";  
             
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM profile";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Username</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {
                $output .= '  
                     <tr>  
                          <td>' . $row["username"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>