<?php
include_once("../config/connect.php");

class structure
{
	private $link;
	function __construct()
	{
		$this->

link = mysql_connect(config::host,config::username,config::password);
		mysql_select_db(config::database,$this->link) or die(mysql_error());
		
	}
	function __distruct()
	{
		mysql_close($this->link);
	}
	 public function insert($table,$values,$rows = null)

    {
	
	  $insert = 'INSERT INTO '.$table;
	 
            if($rows != null)

            {

                $insert .= ' ('.$rows.')';

            }
			 $insert .= ' VALUES ('.$values.')';



            $ins = @mysql_query($insert);

		
            if($ins)

            {

                return true;

            }

            else

            {
                echo mysql_errno($this->link);
                return false;

            }

    }
			
			
	
	
}
?>