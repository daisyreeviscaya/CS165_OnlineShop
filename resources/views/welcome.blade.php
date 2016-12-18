<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Black Market</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background: #4D545D; color: white">
    <!-- <body> -->
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Black Market
                </div>

                <div class="links">

                  <div>  <i>"Where you can buy everything that is forbidden"</i> </div>
                    <div>  <i>"We sell products that can only be found here."</i> </div>
                    <div>  <i>"They say the best things in life are free. But our products are not/costy/costly."</i> </div>
                      <br>
                      <a  style ="color: #e6c79c" href="{{ url('/login') }}">  <span class="glyphicon glyphicon-user"></span>Login</a>
                        <a style = "color: #6fd08c" href="{{ url('/register') }}"> <span class="glyphicon glyphicon-log-in"></span> Register</a>

                </div>
            </div>
        </div>
    </body>
</html>
