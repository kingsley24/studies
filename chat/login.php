<?php
include_once "header.php";
?>
 <body>
    <div class="wrapper">
        <section class="form login"></section>
        <header>RealTime Chat App</header>
        <form action="./php/login.php" enctype="multipart/form-data" autocomplete="off" method="post" >
            <div class="error-txt"></div>
            <div class="name-details">
                <div class="field input">
                    <label>Enail Address</label>
                    <input type="text" name="email" placeholder="Enter your Email">
                </div>
                <div class="field input">
                    <label>PassWord</label>
                    <input type="password" name="password" autocomplete="current-password" required="" id="id_password" placeholder="Enter your PassWord">
                    <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                    <div class="field button">

                        <input type="submit" value="Continue To Chat">
                    </div>
                </div>
        </form>
        <div class="link">Not Yet signed up? <a href="index.php">Signup now</a></div>
        </section>
        </div>

        <script src="js/pass-show-hide.js"></script>
        <script src="js/login.js"></script>
</body>

</html>