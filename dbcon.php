<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "sign_up";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
    <script>
        alert ("Connection Successful");
        </script>
 
        <?php
}else{

    ?>
    <script>
        alert (" No Connection");
        </script>

        <?php 
}

?>

<?php 

class Db_connect{
    private $userName="root";
    private $password="";
    private $db="sign_up";
    private $host="localhost";
    public $db_connect=false; 
    public $user_table="registration";
    public $review_table="review_table";
    public $content_table="content";
    public $destinations_details="destination_details";
    public $cityInnerDetails="city_inner_details";
    public $topPlace="top_place";
    public $blog="blog";
    public $blog_des="blog_description";

    function __construct(){
        $this->connect();
    }

    private function connect(){
        //show all type of error
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        if(!$this->db_connect){
            $conn=new mysqli($this->host,$this->userName,$this->password,$this->db);

            if($conn->connect_errno){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->db_connect = $conn;
            }
        }
    }
}