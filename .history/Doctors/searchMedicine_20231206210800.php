<?php

//process_data.php

if(isset($_POST["query"]))
{
	include('')

	$data = array();

	if($_POST["query"] != '')
	{
		$condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);
		$condition = trim($condition);
		$condition = str_replace(" ", "%", $condition);

		$sample_data = array(
			':name'		=>	'%' . $condition . '%',
			
		);

		$query = "
		SELECT name, post_description 
		FROM post 
		WHERE name LIKE :name 
		ORDER BY id DESC
		";

		$statement = $connect->prepare($query);

		$statement->execute($sample_data);

		$result = $statement->fetchAll();

		$replace_array_1 = explode("%", $condition);

		foreach($replace_array_1 as $row_data)
		{
			$replace_array_2[] = '<span style="background-color:#'.rand(100000, 999999).'; color:#fff">'.$row_data.'</span>';
		}

		foreach($result as $row)
		{
			$data[] = array(
				'name'			=>	str_ireplace($replace_array_1, $replace_array_2, $row["name"])
			);
		}
	}
	else
	{
		$query = "
		SELECT name
		FROM post 
		ORDER BY id DESC
		";

		$result = $connect->query($query);

		foreach($result as $row)
		{
			$data[] = array(
				'name'			=>	$row["name"],
				'post_description'		=>	$row["post_description"]
			);
		}
	}

	echo json_encode($data);
}

?>