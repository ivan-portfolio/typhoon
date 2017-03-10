<!DOCTYPE html>
<html>
    <head>
        <title>Typed Demo</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="{{ asset("js/typed.js") }}" type="text/javascript"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                padding-top: 40px;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-image: url( "{{ asset("asset/bg.jpg") }}" );
                background-size: cover;
            }

            .container {
                text-align: center;
                display: table-cell;
            }
            
            pre {
                padding-left: 20px;
                text-align: left;
            }


            .title {
                font-size: 96px;
                font-weight: 500;
            }
        </style>
        <script>
            var i = 1;
            $(function(){
                $(".pretty").typed({
                    strings: ["Community", "Connect", "Compassion"],
                    typeSpeed: 5,
                    loop: true,
                    showCursor: false,
                    preStringTyped: function() {
                        var color = "#DDC5E7";
                        switch(i) {
                            case 1:
                                color = "#8098B2";
                                i++;
                                break;
                            case 2:
                                color = "#F5FFA0";
                                i++;
                                break;
                            case 3:
                                i = 1;
                                    color = "#F35951";
                                break;
                            }
                        $("span").css("color",color);
                    }
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Empathy & <span class="pretty">Company</span><span>.</span></div>
                </br>
                </br>
                <div class="col-lg-4 col-lg-offset-4">
                    <pre>
//HEAD
&lt;script&gt;
  $(function(){
    $(".type").typed({
      strings: ["Community", "Connect", "Compassion"],
      typeSpeed: 5,
      loop: true,
      showCursor: false
    });
  });
&lt;/script&gt;

//BODY
&lt;div class="title"&gt;Empathy & &lt;span class="type"&gt;Company&lt;/span&gt;.&lt;/div&gt;
                    </pre>
                </div>
            </div>
        </div>
    </body>
</html>
