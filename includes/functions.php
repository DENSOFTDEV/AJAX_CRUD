<?php 
require_once 'connection.php';

function InsertRecord()
{
	global $con;
	$UserName = $_POST['UName'];
	$UserEmail = $_POST['UEmail'];
	
	$query = "insert into user_record (UserName, UserEmail) values ('$UserName','$UserEmail')";
	$result = mysqli_query($con,$query);

	if ($result) 
	{
		echo "Your record has been saved in the database";
	}
	else
	{
		echo "Please Check Your Query";
	}

}

//dispaly data function
function display_record()
{
	global $con;
	$value = "";
	$value = ' <table class="table table-bordered">
			 	<tr>
			 		<td>User ID</td>
			 		<td>User User</td>
			 		<td>User Email</td>
			 		<td>Edit</td>
			 		<td>Delete</td>
			 	</tr>';

 $query = "select * from user_record";
 $result = mysqli_query($con,$query);

 while ($row= mysqli_fetch_assoc($result)) 
 {
 	$value.='<tr>
			 		<td>'.$row['ID'].'</td>
			 		<td>'.$row['UserName'].'</td>
			 		<td>'.$row['UserEmail'].'</td>
			 		<td><button class="btn btn-success" id="btn_edit" data-id='.$row['ID'].'><span class="fa fa-edit"></span></button></td>
			 		<td><button class="btn btn-danger" id="btn_delete" data-id1='.$row['ID'].'><span class="fa fa-trash"></span></button></td>
			 	</tr>';
 }
 $value.='</table>';
 echo json_encode(['status'=>'success','html'=>$value]);
}

//Get Particular Record
function get_record()
{
	global $con;
	$UserID = $_POST['UserID'];
	$query = "select * from user_record where ID = '$UserID'";
	$result = mysqli_query($con,$query);

	while ($row= mysqli_fetch_assoc($result))
	{
		$User_data = array();
		$User_data[0] = $row['ID'];
		$User_data[1] = $row['UserName'];
		$User_data[2] = $row['UserEmail'];
	}
	echo json_encode($User_data);
}

//Update Fuction

function update_value()
{
	global $con;
	$Update_ID = $_POST['U_ID'];
	$Update_User = $_POST['U_User'];
	$Update_Email = $_POST['U_Email'];

	$query = "update user_record set UserName='$Update_User', UserEmail='$Update_Email' where ID ='$Update_ID'";
	$result = mysqli_query($con,$query);

	if ($result) 
	{
		echo "your record has been updated";
	}
	else
	{
		echo "Please check your Query";
	}

}

//delete function
function delete_record()
{
	global $con;
	$Del_Id = $_POST['Del_ID'];
	$query = "delete from user_record where ID = '$Del_Id'";
	$result = mysqli_query($con,$query);

	if ($result) 
	{
		echo "your record has been deleted";
	}
	else
	{
		echo "please check your query";
	}

}

 ?>

