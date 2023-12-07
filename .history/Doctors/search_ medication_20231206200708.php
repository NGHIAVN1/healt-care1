<?php
include 'header.php';
include "lib/connection.php";
$medicineName = $_POST['medicineName'];
$sql = "SELECT * FROM medicine WHERE name LIKE '%$medicineName'";
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
</html>