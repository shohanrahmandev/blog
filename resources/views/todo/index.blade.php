<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand ms-5">
            <h3>Blog</h3>
        </a>
        <div class="d-flex justify-content-end me-5 ">
            <div style="height:50px" class="mt-4">

                <a href="{{ url('/') }}"
                    class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-success me-5">Home</a>
            </div>

            <div style="height:50px" class="mt-4">

                <a href="{{ url('/create') }}"
                    class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-success me-5">Create</a>
            </div>




            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-info me-5">Dashboard</a>
                @else
                <a href="{{ route('login') }}"
                    class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-success me-5">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-success me-5">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>

    </nav>



    <div class="text-center  bg-success p-2 text-white bg-opacity-75 ">

        <h1>Our Blog Post</h1>
    </div>




    <div class="row">


        @foreach ($todos as $todo )


        <div class="col-4">
            <div class="text-center bg-info mt-3 p-3 text-white bg-opacity-25">

                <h2 class="text-danger">

                    <p>Log In User {{ $todo->user_name }}</p>
                </h2>
                <hr class="text-danger">
                <h3 class="text-dark">
                    <p>{{ $todo->title }}_{{ $todo->date }}</p>
                </h3>
                <h4 class="text-dark">
                    <p>{{ $todo->details }}</p>
                </h4>

            </div>
        </div>









        @endforeach
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
