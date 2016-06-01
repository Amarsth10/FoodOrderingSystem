<?php
include 'Header.php';?>            <!-- end of menu -->
<script>

    function removeRow(button){
        var tr = button.parentElement.parentElement;
        var tbody = tr.parentElement;
        tbody.removeChild(tr);
    }
</script>
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
                <h2>FeedBack</h2>
                <div class="section_w590_content">

<H1>Delete By Item Name</H1>

                    <div class="menu-item"><form name="deleteItem" action="Delete.php" method="post" >
                            <table >
                                <tr>
                                    <td>Item Name<input type="text" name="name"></td>
                                    <td><input type="button" value="x" onclick="removeRow(this)"></td>
                                </tr>
                            </table>
                            <center><input type="submit" value="Delete"></center>
                        </form>
                        <h1>Delete All Item</h1>
                        <form name="deleteItem" action="DeleteAll.php" method="post" >
                            <input type="submit" value="Delete all Items"></center>

                        </form>
                    </div>

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
