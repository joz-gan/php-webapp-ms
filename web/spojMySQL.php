<?php

class spojMySQL {
	
	          //definovanie adribútov
			  public $host;
			  public $user;
			  public $pass;
			  public $menoDB;
			  
			  
	        // definovanie konštruktora
			
			public function __construct($host,$user,$pass,$menoDB)
			    {
					$this->host=$host;
					$this->user=$user;
					$this->pass=$pass;
					$this->menoDB=$menoDB;
				}


		  // definovanie metódy
		   public function pripojMySQL() 
		        {
					mysql_connect($this->host,$this->user,$this->pass)
					or die ("skonrolujte pripojenie k serveru MySQL");
					
					$nastavenie = mysql_select_db($this->menoDB)
                    or die ("uvedená databáza neexistuje");			
				}
}
?>