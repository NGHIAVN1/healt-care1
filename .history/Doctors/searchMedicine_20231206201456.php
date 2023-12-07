<?php

include "lib/connection.php";
$name = $_POST['medicineName'];
$sql = "SELECT * FROM medication WHERE name LIKE '%$name'";
$result = $conn->query($sql);
?>
<html>
    <head>
        <title>Search Medicine</title>
        <link rel="stylesheet" href="css/pending_orders.css">
    </head>
    <script>  
    src="https://code.jquery.com/jquery-3.5.1.min.js" 
    jQuery(document).ready(function($){
        $('.live-search-list li').each(function(){
        $(this).attr('data-search-term', $(this).text().toLowerCase());
        });

        $('.live-search-box').on('keyup', function(){

        var searchTerm = $(this).val().toLowerCase();

            $('.live-search-list li').each(function(){

                if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }

            });

        });

    });
    </script>
<body>
    <div class="container">
        <div class="card p-3 ">
            <h4>Search Medicine</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="inputs"> <label>Medicine Name</label> <input type="text" name="medicineName"  value="<?php echo $row['name']; ?>" > </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="live-search-list">
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <li><a href=""><?php echo $row['name']; ?></a></li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</html>