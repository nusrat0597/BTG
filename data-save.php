<?php 
include "dbcon.php";
class Data_save{
    private $db;
    private $userTable;
    private $reviewTable;
    private $contentTable;
    private $destinationsTable;
    private $cityInnerTable; 
    private $topPlaceTable;
    private $conn;
    private $blogTable;
    private $blogDesTable;
    function __construct() {
        $this->db= new Db_connect;

        $this->userTable=$this->db->user_table;
        $this->reviewTable=$this->db->review_table;
        $this->contentTable=$this->db->content_table;
        $this->destinationsTable=$this->db->destinations_details;
        $this->cityInnerTable=$this->db->cityInnerDetails;
        $this->topPlaceTable=$this->db->topPlace;
        $this->blogTable=$this->db->blog;
        $this->blogDesTable=$this->db->blog_des;

        $this->conn= $this->db->db_connect;
    }

    function saveData($data){
        $user_name = $data['user_name'];
        $user_email = $data['user_email'];
        $user_password = $data['password'];
        $user_number= $data['user_number'];
        $sql = "SELECT email FROM `$this->userTable` WHERE email='$user_email'";

        $resultset = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_assoc($resultset);	
        if ($row !== null && isset($row['email'])) {	
            echo json_encode(['status' => 'error', 'message' => 'registered failed!']);
        } else {				
            $sql = "INSERT INTO `$this->userTable`(`username`, `email`, `phone`, `password`) VALUES ('$user_name', '$user_email', '$user_number', '$user_password')";
            mysqli_query($this->conn, $sql);
            $latest_inserted_id = mysqli_insert_id($this->conn);	
            $_SESSION['user_session'] = $latest_inserted_id;
            echo json_encode(['status' => 'success', 'message' => 'registered successfully!']);
        }
    }

    function login($data){
        $user_email = trim($data['user_email']);
        $user_password = trim($data['password']);
        $sql = "SELECT id, username, password, email FROM `$this->userTable` WHERE email='$user_email'";
        $resultset = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_assoc($resultset);	
        if($row['password']==$user_password){				
            echo json_encode(['status' => 'success', 'message' => 'login successfully!']);
            $_SESSION['user_session'] = $row['id'];
        } else {				
            echo "email or password does not exist."; // wrong details 
        }
    }

    function logout(){
        unset($_SESSION['user_session']);
        echo "ok";
    }

    function saveImage($data){
        $currentDir = __DIR__;
        $parentDir = dirname($currentDir);

        $uploadDir = $parentDir.'/admin/upload/img/';

        if (!empty($data['slider_image']['name'])) {

            $fileName = basename($data['slider_image']['name']);
            $targetPath = $uploadDir . $fileName;
            $previewPath= 'upload/img/' . $fileName;
        
            if (move_uploaded_file($data['slider_image']['tmp_name'], $targetPath)) {
                $sql = "INSERT INTO `$this->contentTable`(`slider_image`) VALUES ('$fileName')";
                mysqli_query($this->conn, $sql);
                echo json_encode(['status' => 'success', 'message' => 'Image uploaded successfully!', 'file' => $previewPath]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to upload image.']);
            }

            
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Please select an image to upload.']);
        }
    }

    function getSliderImage(){
        $sql = "SELECT `slider_image` FROM `$this->contentTable` WHERE `slider_image` IS NOT NULL ORDER BY id DESC LIMIT 5";
        
        $result = mysqli_query($this->conn, $sql);
    
        if ($result) {
                $images = array();
                while ($row = mysqli_fetch_assoc($result)) {
                    $images[] = $row['slider_image']; // Add each image to the array
                }
               return $images;
           
        } else {
            // Handle the query error if needed.
            echo json_encode(['status' => 'error', 'message' => 'Failed to retrieve the last image.']);
        }
    }

    function saveVideo($data){
        $currentDir = __DIR__;
        $parentDir = dirname($currentDir);

        $targetDir = $parentDir.'/admin/upload/img/video';
        $fileName = basename($data["videoFile"]["name"]);
        $targetFile = $targetDir . $fileName;
        $uploadOk = 1;
        $videoFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, the file already exists.";
            $uploadOk = 0;
        }

        // Check file size (adjust as needed)
        if ($data["videoFile"]["size"] > 50000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($videoFileType != "mp4" && $videoFileType != "avi" && $videoFileType != "mov" && $videoFileType != "mkv") {
            echo "Sorry, only MP4, AVI, MOV, and MKV files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($data["videoFile"]["tmp_name"], $targetFile)) {
                $sql = "INSERT INTO `$this->contentTable`(`video`) VALUES ('$fileName')";
                mysqli_query($this->conn, $sql);
                echo "The file " . $fileName . " has been uploaded.";

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    function getVideo(){
        $sql = "SELECT `video` FROM `$this->contentTable` WHERE `video` IS NOT NULL ORDER BY id DESC LIMIT 1";
        
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                $lastVideo = $row['video'];
            
                return $lastVideo;
            }
            
        } else {
            // Handle the query error if needed.
            echo json_encode(['status' => 'error', 'message' => 'Failed to retrieve the last image.']);
        }
    }

    function saveDestination($file=false,$data=false){
        $thumbnailFileName = '';

        if(!empty($file['Thumbnail_image']['name'])){
            $currentDir = __DIR__;
            $parentDir = dirname($currentDir);
            $uploadDir = $parentDir.'/admin/spotlight_destination/thumbline/';

            $fileName = basename($file['Thumbnail_image']['name']);
            $targetPath = $uploadDir . $fileName;
            $previewPath= 'spotlight_destination/thumbline/' . $fileName;

            if (move_uploaded_file($file['Thumbnail_image']['tmp_name'], $targetPath)) {
                $thumbnailFileName = $fileName;
            }
        }
        
        if(!empty($data['des_name']) or !empty($data['des_hour'])){
            $name = $data['des_name']? $data['des_name']:'';
            $hrs = $data['des_hour'] ? $data['des_hour']:'';

            $sql = "INSERT INTO `$this->destinationsTable`(`thumbnail`, `name`, `hour`) VALUES ('$thumbnailFileName', '$name', '$hrs')";
            
            if(mysqli_query($this->conn, $sql)){
                echo json_encode(['status' => 'success', 'message' => 'Data saved successfully!','file' => $previewPath]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to save data.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Incomplete data.']);
        }

    }

    function getDestination(){
        $sql = "SELECT * FROM `$this->destinationsTable` WHERE `name` IS NOT NULL OR `name` != '' ";
        
        $result = mysqli_query($this->conn, $sql);
    
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                // Fetch data and store it in the $data array
                while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = array(
                        'id'   => $row['id'],
                        'name' => $row['name'],
                        'image' => $row['thumbnail'],
                        'hour' =>   $row['hour']
                    );
                }
                return $data;
            }
            // mysqli_free_result($result);
           
        } else {
            // Handle the query error if needed.
            echo json_encode(['status' => 'error', 'message' => 'Failed to retrieve the last image.']);
        }
    }

    function saveCityInnerDetails($file,$data){
        

        $thumbnailFileName = '';

        if(!empty($file['des_back_image']['name'])){
   
            $currentDir = __DIR__;
            $parentDir = dirname($currentDir);
            $uploadDir = $parentDir.'/admin/spotlight_destination/touristPlace/';

            $fileName = basename($file['des_back_image']['name']);
            $targetPath = $uploadDir . $fileName;
            $previewPath= 'spotlight_destination/touristPlace/' . $fileName;

            if (move_uploaded_file($file['des_back_image']['tmp_name'], $targetPath)) {
                $thumbnailFileName = $fileName;
            }
        }

        if(!empty($data['mainDestination'])){
            $city = $data['mainDestination']? $data['mainDestination']:'';
            $description = mysqli_real_escape_string($this->conn, $data['destinationDescription']);

            $sql = "INSERT INTO `$this->cityInnerTable`(`rel_id`, `back_image`, `description`) VALUES ('$city', '$thumbnailFileName', '$description')";
            if(mysqli_query($this->conn, $sql)){
                echo json_encode(['status' => 'success', 'message' => 'Data saved successfully!','file' => $previewPath]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to save data.']);
            }
        } else {
            // echo json_encode(['status' => 'error', 'message' => 'Incomplete data.']);
        }
    }

    function getCityInnerDetails($id){
        $sql = "SELECT `$this->cityInnerTable`.*, `$this->destinationsTable`.`name` FROM `$this->cityInnerTable`
        LEFT JOIN `$this->destinationsTable` ON `$this->cityInnerTable`.`rel_id` = `$this->destinationsTable`.`id`
        WHERE `$this->cityInnerTable`.`rel_id` = '$id'";
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            // Handle the query error if needed.
            echo json_encode(['status' => 'error', 'message' => 'Failed to retrieve data.']);
            return [];
        }
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
        
    }

    function saveTopPlace($file,$data){
        $thumbnailFileName = '';

        if(!empty($file['tourPlaceImage']['name'])){
            $currentDir = __DIR__;
            $parentDir = dirname($currentDir);
            $uploadDir = $parentDir.'/admin/spotlight_destination/top-image/';

            $fileName = basename($file['tourPlaceImage']['name']);
            $targetPath = $uploadDir . $fileName;
            $previewPath= 'spotlight_destination/top-image/' . $fileName;

            if (move_uploaded_file($file['tourPlaceImage']['tmp_name'], $targetPath)) {
                $thumbnailFileName = $fileName;
            }
        }

        if(!empty($data['mainDest'])){
            $city = $data['mainDest']? $data['mainDest']:'';
            $name = $data['tr_name'] ? $data['tr_name']:'';

            $sql = "INSERT INTO `$this->topPlaceTable`(`rel_id`, `name`, `image`) VALUES ('$city', '$name', '$thumbnailFileName')";
            
            if(mysqli_query($this->conn, $sql)){
                echo json_encode(['status' => 'success', 'message' => 'Data saved successfully!','file' => $previewPath]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to save data.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Incomplete data.']);
        }
    }

    function getTopPlace($id){
        $sql = "SELECT * FROM `$this->topPlaceTable` WHERE `rel_id`='$id'";
        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                // Fetch data and store it in the $data array
                while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = array(
                        'id'   => $row['id'],
                        'rel_id' => $row['rel_id'],
                        'name' => $row['name'],
                        'image' => $row['image'],
                    );
                }
                mysqli_free_result($result);
                return $data;
            }
            
           
        } else {
            // Handle the query error if needed.
            echo json_encode(['status' => 'error', 'message' => 'Failed to retrieve the last image.']);
        }
    }

    function getPlace($id){
        $sql = "SELECT * FROM `$this->topPlaceTable` WHERE `rel_id`='$id'";
        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                // Fetch data and store it in the $data array
                while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = array(
                        'id'   => $row['id'],
                        'name' => $row['name']
                    );
                }
                mysqli_free_result($result);
                // return $data;
                echo json_encode(['status' => 'success', 'data' => $data]);
            }else{
                echo json_encode(['status' => 'error', 'message' => "there is no data"]);
            }
            
           
        } else {
            // Handle the query error if needed.
            echo json_encode(['status' => 'error', 'message' => 'Failed to retrieve the last image.']);
        }
    }

    function saveBlogDetails($file,$data){

        if(!empty($file['blogImage']['name'])){
            $currentDir = __DIR__;
            $parentDir = dirname($currentDir);
            $uploadDir = $parentDir.'/admin/spotlight_destination/blog-image/';

            $fileName = basename($file['blogImage']['name']);
            $targetPath = $uploadDir . $fileName;
            $previewPath= 'spotlight_destination/blog-image/' . $fileName;

            if (move_uploaded_file($file['blogImage']['tmp_name'], $targetPath)) {
                $thumbnailFileName = $fileName;
            }
        }

        $placeId= $data['tourPlace']? $data['tourPlace']:'';
        if(!empty($data['tourPlace']) && isset($thumbnailFileName)){

            $sql = "INSERT INTO `$this->blogTable`(`rel_id`, `image`) VALUES ('$placeId','$thumbnailFileName')";
            mysqli_query($this->conn, $sql);
        }

        if (!empty($data['blogHeading']) || !empty($data['blogDes'])) {
            $heading = isset($data['blogHeading']) ? $data['blogHeading'] : '';
            $description = isset($data['blogDes']) ? $data['blogDes'] : '';
        
            $sql = "INSERT INTO `$this->blogDesTable` (`rel_id`, `heading`, `description`) VALUES (?, ?, ?)";
            
            $stmt = mysqli_prepare($this->conn, $sql);
            mysqli_stmt_bind_param($stmt, 'iss', $placeId, $heading, $description);
            
            if(mysqli_stmt_execute($stmt)){
                echo json_encode(['status' => 'success', 'message' => 'Data saved successfully!']);
            }else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to save data.']);
            }
            
            mysqli_stmt_close($stmt);
        }
    }

    function getBlog($id){
        $sql = "SELECT * FROM `$this->blogTable` WHERE `rel_id`='$id' LIMIT 1";
        $result = mysqli_query($this->conn, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }

    function getDescription($id){
        $sql = "SELECT * FROM `$this->blogDesTable` WHERE `rel_id`='$id'";
        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                // Fetch data and store it in the $data array
                while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = array(
                        'id'   => $row['id'],
                        'rel_id' => $row['rel_id'],
                        "heading"=>$row['heading'],
                        "description"=>$row['description']
                    );
                }
                mysqli_free_result($result);
                return $data;
            }else{
                echo json_encode(['status' => 'error', 'message' => "there is no data"]);
            }
            
           
        } else {
            // Handle the query error if needed.
            echo json_encode(['status' => 'error', 'message' => 'Failed to retrieve the last image.']);
        }
    }


}