<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/index.style.css')
</head>

<body>
    <div class="container my-5 pt-1 ms-auto me-auto">
        <div class=" text-center">
            <img class="img1 mt-5 img-thumbnail w-50" src="{{ Vite::asset('resources/images/Welcome GIF.gif') }}"
                alt="pembuka">
        </div>
        <div class="col-md-2 ms-auto me-auto">
            <div class="d-grid gap-2 mt-5">
                <a class="btn btn-dark" href="{{ url('/home') }}">Home</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
