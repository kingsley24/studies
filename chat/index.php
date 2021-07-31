<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php
include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>RealTime Chat App</header>
            <form action="./php/signup.php" enctype="multipart/form-data" autocomplete="off" method="post" > 
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required >
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="field input">
                        <label>Enail Address</label>
                        <input type="text" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="field input">
                        <label>PassWord</label>
                        <input type="password" name="password" autocomplete="current-password" required="" id="id_password" placeholder="Enter your PassWord">
                        <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                    </div>
                    <div class="field imag">
                        <label>Select Image</label>
                    </div>
                    <div class="field image">
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue To Chat">
                    </div>
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>

</html>