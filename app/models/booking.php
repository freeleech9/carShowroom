<?php 

Class Booking 
{

function book($POST)
	{

		$DB = new Database();

		$_SESSION['error'] = "";
		if(isset($POST['name']) && isset($POST['email']))
		{


			$arr['name'] = $POST['name'];
			$arr['email'] = $POST['email'];
			$arr['nid'] = $POST['nid'];
			$arr['model'] = $POST['model'];
			$arr['address'] = $POST['address'];
			$arr['date'] = date("Y-m-d H:i:s");
			$arr['url_address'] = get_random_string_max(60);
			
			show($arr);

			$query = "insert into books (name,email,nid,model,address,date,url_address) values (:name,:email,:nid,:model,:address,:date,:url_address)";
			$data = $DB->write($query,$arr);
			if($data)
			{
				
				header("Location:". ROOT . "home");
				die;
			}
			else{

			$_SESSION['error'] = "please enter a valid username and password";
		}

		}
	}

}