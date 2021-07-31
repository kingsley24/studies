<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    include_once "config.php";
    $output = "";
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $sql = "SELECT * FROM `message` WHERE (outgoing_msg_id = {$outgoing_id} AND  incoming_msg_id = {$incoming_id})
                    OR (outgoing_msg_id = {$incoming_id} AND  incoming_msg_id = {$outgoing_id}) ORDER BY message_id";

    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            if ($row['outgoing_msg_id'] == $_SESSION['unique_id']) { //if this is equal then he is msg sender
                $output .= '<div class="chat outgoing">
                                            <div class="details">
                                            <p>' . $row['message'] . '</p>
                                            </div>
                                            </div>';
            } else { // message receiver
                $output .= '<div class="chat incoming">
                                            <img src="./img.JPG" alt="">
                                            <div class="details">
                                                <p>' . $row['message'] . '</p>
                                            </div></div>';
            }
        }
        echo $output;
    }
}