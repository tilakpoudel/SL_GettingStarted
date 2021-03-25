<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>

<body>
    Name: <input type="text" name="fullname"><br>
    Email: <input type="text" name="email"> <br>
    <p>Click or move the mouse pointer over this paragraph.</p> <br>
    <p>If you double-click on me, I will disappear.</p> <br>
    <p id="showhide_p">If you click on the "Hide" button, I will disappear.</p>
    <button id="hide">Hide</button>
    <button id="show">Show</button> <br> <br>
    <button id="fadebtn">Click to fade out boxes</button><br><br>
    <div id="div1" style="width:80px;height:80px;background-color:red;"></div><br>
    <div id="div2" style="width:80px;height:80px;background-color:green;"></div><br>
    <div id="div3" style="width:80px;height:80px;background-color:blue;"></div>
    <br>
    <button id="animate_btn">Start Animation</button>
    <div id="animate_div" style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>
</body>
<script>
    $(document).ready(function(){
            //CHANGE STYLE
            $("input").focus(function(){
                $(this).css("background-color", "yellow");
            });
            $("input").blur(function(){
                $(this).css("background-color", "green");
            });
            // MOUSE EVENTS
            $("p").on({
                mouseenter: function(){
                    $(this).css("background-color", "lightgray");
                },
                mouseleave: function(){
                    $(this).css("background-color", "lightblue");
                },
                click: function(){
                    $(this).css("background-color", "yellow");
                }
            });
            $("p").dblclick(function(){
                $(this).hide();
            });
            // HIDE AND SHOW ELEMENTS
            $("#hide").click(function(){
                $("#showhide_p").hide();
            });
            $("#show").click(function(){
                $("#showhide_p").show();
            });
            // animation effect
            $("#fadebtn").click(function(){
                $("#div1").fadeOut();
                $("#div2").fadeOut("slow");
                $("#div3").fadeOut(3000);
            });
            $("#animate_btn").click(function(){
            $("#animate_div").animate({left: '250px'});
            });
        });
</script>

</html>