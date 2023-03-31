<?php

class webform 
{


public function f_start($id,$act)
{
	$id  = $this -> $id;
	$act = $this -> $act;
	$mth = $this -> $mth;

	echo "<form method='post' id=".$id." name=".$id." action=".$act." >";	
}

public function f_end()
{	
 	echo "</form>";
}

public function f_btn()
{	
 	echo "<input type='submit' value='Godner'>";
}

public function f_input()
{	
 	echo "<input type='text' value='Godner' name='sa'>";
}

}

?>