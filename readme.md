### This is learning purpose forjec for result calculation system. I use same programing lanaguage here.

####  language use
- HTML 5
- CSS3
- PHP
- jQuery 
- MySql
- PDO

#### Database class design 

```php

require_once "../../config.php";
	namespace App\support;
	use PDO;

	abstract class DataDase
	{

		/**
		 * Server information
		 */

		private $host = HOST;
		private $user = USER;
		private $pass = PASS;
		private $db = DB;
		private $connection;

		private	function connection()
		{
			$this -> connection = new PDO("mysql:host =".$this -> host.";dbname=".$this -> db, $this -> user , $this -> pass );
		}

	}


```