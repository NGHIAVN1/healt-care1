
<!DOCTYPE html>
<html>
<head>
    <title>Live Search Medication</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#search').keyup(function(){
                var query = $(this).val();
                if(query != ''){
                    $.ajax({
                        url: 'search.php',
                        method: 'POST',
                        data: {query: query},
                        success: function(data){
                            $('#result').html(data);
                        }
                    });
                } else {
                    $('#result').html('');
                }
            });
        });
    </script>
</head>
<body>
    <h1>Live Search Medication</h1>
    <input type="text" id="search" name="name" placeholder="Search medication...">
    <div id="result"></div>
</body>
</html>
