<?php
include 'Header.php'?>
<!-- end of menu -->
<div id="banner">
    <div id="banner_section">
        <h2>Welcome Admin </h2>

    </div>
    <script>
        function Login_Validate()
        {
            var a=document.forms["Login"]["username"].value;
            var b=document.forms["Login"]["password"].value;
            if(a==null || a=="")
            {
                alert("Enter your username");
                loginform.username.focus();
                return (false);
            }
            if(b==null || b=="")
            {
                alert("Enter your password");
                loginform.password.focus();
                return (false);
            }
        }
    </script>

    <!-- banner section -->
</div>
<!-- end of banner -->
<div id="content_wrapper">
    <div id="content">
        <div id="main_column">
            <div class="cleaner_h50"></div>
            <div class="section_w590">
                <h2>Information</h2>
                <div class="section_w590_content">

                    <form name="Login" action="../check.php" method="post" onsubmit="return Login_Validate()">
                        <table>
                            <td>
                                <tr>Username<input type="text" name="username"></tr><br>
                                <tr>Password<input type="password" name="password"></tr>
                            </td>
                        </table>
                        <center><input type="submit" value="Login">

                            <a href="Register.php" ">
                            <h3>Join us to Pre Order your meals</h3>
                            <p>register to join us</p></a></center>

                    </form>

                </div>
                <!-- end of main column -->

                <!-- end of side column -->
                <div class="cleaner"></div>
            </div>
            <!-- end of content -->
            <div class="cleaner"></div>
            <div class="content_bottom"></div>
        </div>
        <!-- end of content wrapper -->
        <div id="footer">
            <ul class="footer_menu">
                <li><a href="index.php">Home</a></li>
                <li class="last_menu"><a href="Feedback.php">Feedback</a></li>
            </ul>
            Copyright amar </div>
    </div>
    <!-- end of container -->
</div>
</div>
</body>
</html>
