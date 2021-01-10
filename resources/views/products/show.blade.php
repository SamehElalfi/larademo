<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $product->name }}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-transition: 0.2s ease-in-out;
            -moz-transition: 0.2s ease-in-out;
            -o-transition: 0.2s ease-in-out;
            transition: 0.2s ease-in-out;
            font-family: "proxima-nova", sans-serif;
            font-weight: 300;
            color: #444B54;
        }

        *:focus {
            outline: none;
        }

        #wrapper {
            position: absolute;
            top: 50%;
            margin-top: -240px;
            left: 0;
            width: 100%;
        }

        #container {
            width: 990px;
            height: 480px;
            margin: 0 auto;
            box-shadow: 5px 5px 20px 0px rgba(0, 0, 0, 0.7);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            position: relative;
            background: #dadfe1;
            background: -moz-linear-gradient(45deg, #dadfe1 0%, #e8edef 30%, #f9feff 100%);
            background: -webkit-linear-gradient(45deg, #dadfe1 0%, #e8edef 30%, #f9feff 100%);
            background: linear-gradient(45deg, #dadfe1 0%, #e8edef 30%, #f9feff 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#dadfe1', endColorstr='#f9feff', GradientType=1);
        }

        #img-wrap {
            width: 550px;
            height: 100%;
            float: left;
            position: relative;
        }

        #img-wrap .images {
            width: 60%;
            overflow: hidden;
            margin: 270px auto 0 auto;
        }

        #img-wrap .images li {
            list-style: none;
            width: 33.33%;
            float: left;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            opacity: 0.7;
        }

        #img-wrap .images li img {
            width: 80%;
        }

        #img-wrap .images li:nth-child(4) {
            padding-top: 25px;
        }

        #img-wrap .images li:hover {
            opacity: 1;
        }

        #img-wrap .images .big-img {
            width: 75%;
            float: none;
            padding: 0;
            text-align: center;
            opacity: 1;
            position: absolute;
            top: 50px;
            left: 0;
        }


        .colors {
            width: 125px;
            margin: 20px auto;
        }

        .colors li {
            width: 25px;
            height: 25px;
            margin-right: 25px;
            list-style: none;
            float: left;
            background: #F3C9BF;
            cursor: pointer;
            position: relative;
            position: relative;
            opacity: 0.7;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            -ms-border-radius: 100%;
            border-radius: 100%;
            -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.3);
        }

        .colors li:nth-child(2) {
            background: #87E8C6;
        }

        .colors li:nth-child(3) {
            margin-right: 0;
            background: #BFE6EC;
        }

        .colors li:hover,
        .colors li.target {
            opacity: 1;
            -webkit-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.5);
            -moz-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.5);
            box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.5);
        }

        .info {
            width: 440px;
            height: 100%;
            float: right;
            padding: 0px 50px 0 0;
            background-position: 80% 0%;
            background-size: 65%;
        }

        .info h1 {
            font-size: 1.5em;
            font-weight: 400;
            float: left;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .info h2 {
            font-size: 1em;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 5px 0 20px 0;
            float: left;
            color: #8199A3;
        }

        .info p {
            clear: both;
            margin-bottom: 7px;
            line-height: 1.5em;
            font-size: 1em;
            letter-spacing: 0.5px;
        }

        .info #pricing,
        .info #coloring {
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9em;
            color: #D64541;
        }

        .info #price {
            margin-top: 15px;
            float: none;
        }

        .important {
            width: 50%;
            float: left;
            margin-top: 15px;
        }

        .form {
            width: 50%;
            float: right;
            margin-top: 15px;
        }

        .form .color {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding: 0 20px;
            width: 100%;
            height: 40px;
            border: none;
            background: #F0C2C2;
            font-size: 0.9em;
            letter-spacing: 1px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            color: #444B54;
            cursor: pointer;
            font-weight: 400;
        }

        .form .color:hover {
            background: #efb7b7;
        }

        button {
            width: 100%;
            margin-top: 10px;
            border: none;
            background: #1abc9c;
            padding: 20px 0;
            font-size: 1.1em;
            line-height: 1.1em;
            letter-spacing: 1px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            color: #F2F2F2;
            cursor: pointer;
        }

        button:hover {
            background: #16a085;
        }

        @media screen and (max-width: 1440px) {
            #wrapper {
                transform: scale(0.7);
            }
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <div id="container">

            <div id="img-wrap">

                <ul class="images">
                    <li class="big-img">
                        <img src="{{ asset("/assets/img/products/".$product->photo) }}" />
                    </li>
                </ul>

            </div>

            <div class="py-3">
                <a href="{{ request()->headers->get('referer') ?? route("products.index") }}">&#8592; Go Back</a>
            </div>
            <div class="info">

                <h1>{{ $product->name }}</h1>

                <p>{{ $product->description }}</p>
                <small>All of our products are original and have <b>Free Shipping</b></small>

                <div class="important">
                    <p id="pricing">Price
                        <p>
                            <h1 id="price">$ {{ $product->price }}</h1>
                </div>

                <div class="form">
                    <button>Add to cart</button>
                </div>

            </div>

        </div>
    </div>

</body>

</html>
