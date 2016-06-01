<?php
include 'Header.php';?>            <!-- end of menu -->
<script>
    function drawTable(){
        var noOfItems = parseInt(document.getElementById("item-no").value);
        var table = document.getElementById('list-table').firstElementChild;//tbody
        for(var i = 0; i < noOfItems;i++){
            var tr = document.createElement("tr");
            tr.innerHTML =  "<td>Item Name<input type=\"text\" name=\"name[]\"></td>" +
            "<td>Item Quantity<input type=\"text\" name=\"qty[]\"></td>" +
            "<td>Item Price<input type=\"text\" name=\"price[]\"></td>" +
            "<td>Item Image<input type=\"file\" name=\"image[]\"></td>" +
            "<td><input type=\"button\" value=\"x\" onclick='removeRow(this)'></td>";
            table.appendChild(tr)
        }
    }
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
                    <h1>Add Single Item</h1>
                    <div class="menu-item"><form name="addItem" action="menu.php" method="post" enctype="multipart/form-data">
                            <table >
                                <tr>
                                    <td>Item Name<input type="text" name="name[]"></td>
                                    <td>Item Quantity<input type="text" name="qty[]"></td>
                                    <td>Item Price<input type="text" name="price[]"></td>
                                    <td>Item Image<input type="file" name="image[]"></td>
                                    <td><input type="button" value="x" onclick="removeRow(this)"></td>
                                </tr>
                            </table>
                            <center><input type="submit" value="submit">
                        </form>
                    </div>
                    <h1>Add Multiple item</h1>
                    <div class="no-of-item">
                       No of Items: <input type="text" name="item-no" id="item-no" >
                        <button onclick="drawTable()">Submit</button>
                    </div>

                    <div class="menu-item"><form name="menu" action="menu.php" method="post" enctype="multipart/form-data">
                            <table id="list-table">
                                <tr>
                                    <td>Item Name<input type="text" name="name[]"></td>
                                    <td>Item Quantity<input type="text" name="qty[]"></td>
                                    <td>Item Price<input type="text" name="price[]"></td>
                                    <td>Item Image<input type="file" name="image[]"></td>
                                    <td><input type="button" value="x" onclick="removeRow(this)"></td>
                                </tr>
                            </table>
                            <center><input type="submit" value="submit">
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
