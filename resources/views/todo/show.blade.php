<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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



    <section class="d-flex justify-content-center mt-5">
        <div class="container">
            <h1>{{ $todo->title }}</h1>
            <h5>Date:- {{ $todo->date }}</h5>
            <p>{{ $todo->details }}</p>
            <br>
            <p>User name: <i>{{ $todo->user_name }}</i></p>
        </div>


    </section>

    <div class="d-flex justify-content-center">

        <div class="container">
            <span>
                <i class="fas fa-thumbs-up"></i>
                <span class="ms-2">Like</span> <i class="fas fa-thumbs-down ms-4"></i> <span class="ms-2">Unlike</span>

            </span>
        </div>
    </div>




    <section>
        <div class="container my-3 py-2 ms-5 ">
            <div class="row d-flex justify-content-center">

                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card">
                        <section class="d-flex justify-content-start ">

                            <div class="  shadow  mb-5 bg-body rounded container my-3 py-2 " style="width: 100%">
                                <div class="d-flex justify-content-center mt-5 ">

                                    <form action="/todo/{{  $todo->id }}/comment" method="POST" style="width: 100%">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="comment" class="form-label">Message :</label>
                                            <textarea name="comment" id="comment" class="form-control"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-success">Post Comment</button>
                                        </div>
                                    </form>







                                </div>
                            </div>

                        </section>
                        @foreach ($todo->comments as $comment)


                        <div class="m-2">
                            <h5>{{ $comment->user->name }}</h5>
                            <hr>
                            <p>{{ $comment->comment }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
