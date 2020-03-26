<?
namespace libs;
use PDO;


/**
 * 
 */
class Database 
{
	
	function __construct()
	{
		try {
   		 $dbh = new PDO('mysql:host=db;dbname=myDb;charset=utf8', 'user', 'test');
		} catch (PDOException $e) {
		    die('Подключение не удалось: ' . $e->getMessage());
		}
	}
}