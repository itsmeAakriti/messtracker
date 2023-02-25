<?php      
session_start();          
require 'database_connection.php'; 
$display_query = "select * from mealsinfo where srl_id = ".$_SESSION['login'];             
$results = mysqli_query($con,$display_query);   
$count = mysqli_num_rows($results);  
if($count>0) 
{
	$data_arr=array();
    $i=1;
	while($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC))
	{	
	$data_arr[$i]['id'] = $data_row['id'];
	$data_arr[$i]['srl_no'] = $data_row['srl_id'];
	$data_arr[$i]['date'] = $data_row['date'];
	$data_arr[$i]['meal'] = $data_row['meal'];
	if($data_row['meal']=='breakfast')
	{
		$data_arr[$i]['color'] = 'yellow';
    }
	elseif($data_row['meal']=='lunch')
	{
		$data_arr[$i]['color'] = 'blue';
	}
	else
	{
		$data_arr[$i]['color'] = 'green' ;
	}
	// $data_arr[$i]['color'] = '#'.substr(uniqid(),-6); // 'green'; pass colour name
	$i++;
	}

	$data = array(
                'status' => true,
                'msg' => 'successfully!',
				'data' => $data_arr
            );
}
else
{
	$data = array(
                'status' => false,
                'msg' => 'Error!'				
            );
}
echo json_encode($data);
?>