<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error {{ $error['code'] }}</title>

    <style>
        body {
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            box-sizing: border-box;
        }

        .container-center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url("{{ asset('img/bc-error.jpg') }}");
            background-size: cover;
        }

        .text-center {
            text-align: center;
        }

        .error-code {
            font-size: 10rem;
            font-weight: bold;
        }

        .error-message {
            font-size: 4rem;
        }
    </style>
</head>
<body>
    <div class="container-center">
        <p class="text-center">
            <span class="error-code">{{ $error['code'] }}</span><br>
            <span class="error-message">{{ $error['message'] }}</span>
        </p>
    </div>
</body>
</html>
