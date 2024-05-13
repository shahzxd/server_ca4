<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome</div>

                    <div class="card-body">
                        <p>Welcome to our book review system!</p>
                        <p>Please <a href="{{ route('login') }}">login</a> to access the system.</p>
                        <p>If you do not have an account, you can <a href="{{ route('register') }}">register here</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
