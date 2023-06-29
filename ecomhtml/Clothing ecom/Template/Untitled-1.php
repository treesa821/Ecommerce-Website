
//DBController.php file
<?php
class DBController   
{
    // Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = 'ThinkPad9#';
    protected $database = "shop";

    // connection property   
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail".$this->con->connect_error;
        }
        
    }

    public function __destruct()
    {
        $this->closeConnection();
    }
            
    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}


//functions.php

<?php

//require mysql connection//

require('database/DBController.php');
require('database/product.php');

$db = new DBController();

//product object
$product = new product($db);


print_r($product->getData());

?>

//easy db


<?php
 
// Database Connection Properties
$servername = 'localhost';
$username = 'root';
$password = 'ThinkPad9#';
$database = "shop";


$conn = mysqli_connect($servername,$username,$password,$database);

echo 'connection is stable';


    
<?php

//require mysql connection//

require('functions.php');


?>







