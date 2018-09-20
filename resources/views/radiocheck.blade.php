<html>
<head></head>
<body>
<script type="text/javascript">
    var btnname = ['chapter1', 'chapter2', 'chapter3', 'chapter4'];
        var game=['index.html','page.html','game3','game4'];
            function r3() {
                for (var i = 0; i < btnname.length; i++) {
                    var btn = document.createElement("button");
                    var btn_name = document.createTextNode(btnname[i]);
                    btn.appendChild(btn_name);
                    btn.style.width = "200px";
                    document.body.appendChild(btn);
                    btn.addEventListener("click", function (event) {
                        var game_name ="";
                        for (var j = 0; j< btnname.length; j++) {
                            if(btnname[j]==event.target.game[j]) {
                                game_name = game_name + game[j];
                                  // event.target.load("gamename");
                                $('#demo').event.target.load('index.html');
                            }
                        }
                    });
                }
            }
    r3();
</script>
<div id="demo"></div>

</body>
</html>
