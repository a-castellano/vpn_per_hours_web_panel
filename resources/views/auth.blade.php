<html>
<head>
    <meta charset="UTF-8">
    <title>VPN hourly - Register</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
</head>

<body>



<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bin/materialize.js"></script>


<div class="container">
    @yield('content')
</div>

<script>
    $( document ).ready(function(){
        $('select').material_select();
    })

</script>
</body>
</html>