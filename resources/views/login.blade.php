<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
 
    <div class="container">
        <div clas="row">
            <div class="col-6 mx-auto mt-10">
                <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                @csrf
                    <div class="card">
                        <div class="card-body">

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>


                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-secondary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</body>

</html>
