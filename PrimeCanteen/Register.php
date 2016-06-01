<?php
include 'Header.php'?>
<!-- end of menu -->
<div id="banner">
    <div id="banner_section">
        <h2>Welcome to Prime Gourmet </h2>
        <p>Your own college canteen.We provide you quality dishes at reasonable cost with great service</p>
    </div>
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
                    <script>
                        function validateForm(theform)
                        {
                            var a=theform.fname.value;
                            var b=theform.lname.value;
                            var c=theform.prog.value;
                            var d=theform.roll.value;
                            var e=theform.phn.value;
                            var f=theform.username.value;
                            var g=theform.password.value;
                            var h=theform.sem.value;
                            var i=theform.b_time.value;
                            if(a==null||a==""||b==""||b==null)
                            {
                                alert ("Enter your name");
                                theform.fname.focus();
                                theform.lname.focus();
                                return (false);
                            }
                            if(c==null||c=="")
                            {
                                alert ("Enter your Program");
                                theform.prog.focus();
                                return (false);
                            }
                            if(d==null||d=="")
                            {
                                alert ("Enter your Roll number");
                                theform.roll.focus();
                                return (false);
                            }
                            if(e==null || e=="")
                            {
                                alert("Enter your Phone number");
                                theform.phn.focus();
                                return (false);
                            }

                            if(f==null||f=="")
                            {
                                alert ("Enter your username");
                                theform.username.focus();
                                return (false);
                            }
                            if(g==null||g=="")
                            {
                                alert ("Enter your password");
                                theform.password.focus();
                                return (false);
                            }
                            if(h==null||h=="")
                            {
                                alert ("Enter your Semester");
                                theform.sem.focus();
                                return (false);
                            }
                            if(i==null||i=="")
                            {
                                alert ("Enter your Break Time");
                                theform.b_time.focus();
                                return (false);
                            }
                        }
                    </script>


                    <form name="order" action="insert.php" method="post" onsubmit="validateForm(this)">
                        <table>
                            <td>
                                <tr>First Name<input type="text" name="fname"> Last Name<input type="text" name="lname"><br></tr>
                                <tr>Program<select name="prog"><option></option>
                                        <option>BIM</option>
                                        <option>BBA</option>
                                        <option>BCSIT</option>
                                        <option>BBS</option></select>
                                    Semester<select name="sem"><option></option>
                                        <option>1st</option>
                                        <option>2nd</option>
                                        <option>3rd</option>
                                        <option>4th</option>
                                        <option>5th</option>
                                        <option>6th</option>
                                        <option>7th</option>
                                        <option>8th</option></select><br></tr>
                                <tr>Roll no<input type="text" name="roll"> Phn no<input type="text" name="phn"><br></tr>
                                Break Time<select name="b_time"><option></option>
                                    <option>12:00</option>
                                    <option>1:30</option>
                                    <option>2:30</option>
                                </select><br>
                                <tr>Username<input type="text" name="username"></tr><br>
                                <tr>Password<input type="password" name="password"></tr>
                            </td>
                        </table>
                        <center><input type="submit" value="submit">
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
