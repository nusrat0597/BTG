<?php
include ('db.php');

if(isset($_GET['message'])){
    $message = $_GET['message'];

    $stmt = $conn->prepare("SELECT response FROM messages WHERE text = ? LIMIT 1");
    $stmt->bind_param('s', $message);

    if($stmt->execute()){
        $stmt->bind_result($response_message);
        $stmt->store_result();

        if($stmt->num_rows == 1){
            $stmt->fetch();
            $result = ['response_message' => $response_message];
            echo json_encode($result);
        } else {
            echo json_encode(['response_message' => 'what!']);
        }
    } else {
        echo json_encode(['response_message' => 'what!']);
    }

    // Close the prepared statement
    $stmt->close();
}
?>
