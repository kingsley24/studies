<?php
session_start();
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) ){
    //checking if user email is valid or not
 if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        //if it exist in database or not
    $sql =   mysqli_query($conn, " SELECT email FROM users WHERE email= '{$email}'");
       if(mysqli_num_rows($sql) > 0){
         echo "$email - This email already exist";
         header("Location: ../users.php");
     } 
     else{     
        /*if user uploads file or not*/
         if(isset($_FILES['image'])){ //if file is uploaded or not
            $img_name = $_FILES['image']['name']; //gettinguser upload img name
            $tmp_name = $_FILES['image']['tmp_name']; // used to save/move file in our folder
                        //exploding image and get last extension like JPG PNG JPEG
                        $img_explode = explode('.', $img_name); //extension of user uploaded file
                        $img_ext = end($img_explode); //getting user uploaded extension

                        $extensions= ['JPG', 'jpeg','png', 'jpg']; //valid extensons stored in array
                        if(in_array($img_ext, $extensions) === true){ 
                            $time = time(); //this return current time/
                            //move user uploaded img to our particular folder
                            $new_img_name =$time.$img_name;
                            
                            if(move_uploaded_file($tmp_name, "images/" .$new_img_name)){ //uploaded image will be moved to our folder
                            $status ="Active now"; // when user signs up status will be active
                            $random_id = rand(time(), 1000000000); //creating random id for user
                            //entering all user data inside table
                            $sql2 = mysqli_query($conn, "INSERT INTO users(unique_id, fname, lname, email, password, img, status)
                                                   VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                                                   if($sql2){ //if these data s inserted
                                                   $sql3= mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                                       if(mysqli_num_rows($sql3) >0 ){
                                                           $row = mysqli_fetch_assoc($sql3);
                                                           $_SESSION['unique_id'] = $row['unique_id']; //using this session we used user unique_id in other php file
                                                           header("Location: ../users.php");
                                                       }
                                                   }else{
                                                    echo "something went wrong try again"; 
                                                   }
                            }

                           
                        }else{
                            echo "Please select an image file -jpeg, jpg, png";
                        }
         }else{
             echo "Please select an image file";
         }
     }
    }else{
        echo"$email - This is not valid email";
    }
}else{
    echo"All input fields are required";
}

?>