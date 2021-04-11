<!doctype html>
<html>

<head>
    <!-- cdn of jquery-3 
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script> --}}
    -->
    <script src="juerycdn.js"></script>
</head>

<body>
    <form id="loginform" method="post">
        <div>
            Username:
            <input type="text" name="username" id="username" />
            Password:
            <input type="password" name="password" id="password" />
            <input type="submit" name="loginBtn" id="loginBtn" value="Login" />
        </div>
    </form>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        // let data= $(this).serialize();
        // let name = $("#username").val();
        // console.log("data in form is",name);
        $.ajax({
            type: "POST",
            url: 'login.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
  
                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                    location.href = 'dashboard.php';

                }
                else
                {
                    alert('Invalid Credentials!');
                }
           },
           error: function(err){
               alert(err);
           }
       });
     });
});
    </script>
</body>

</html>