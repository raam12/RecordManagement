<?php
     include_once('config.php');
     error_reporting(E_ERROR);

    

		$sql = "SELECT * FROM list";
		$res = mysql_query($sql);
		$result = array();

		while( $row = mysql_fetch_array($res) )
		 array_push($result, array('id' => $row[0],'firstname'=> $row[1],'lastname'=> $row[2],'skype'=> $row[3],'slack'=> $row[4]
			       ,'email' => $row[5],'mobile' => $row[6],'title' => $row[7],'profile' => $row[8]
			       ,'language' => $row[9],'isactive' => $row[10],'confirmcode' => $row[11]));
			
			 echo json_encode(array("result" => $result));
?>