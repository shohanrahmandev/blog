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
    <section class="d-flex justify-content-center">

        <div class="border mt-5 shadow p-3 mb-5 bg-body rounded " style="width: 30%">
            <div class="text-center mt-5">

                <h1>Blog Post </h1>
            </div>

            <div class="d-flex justify-content-center mt-5 p-4">


                <form action="/store" style="width: 100%">
                    <div class="mb-3">
                        <label for="date" class="form-label">Date :</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title :</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="details" class="form-label">Details :</label>
                        <textarea name="details" id="details" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <a href="/" type="submit" class="btn btn-dark">Cancel</a>
                        <button type="submit" class="btn btn-success">submit</button>
                    </div>
                </form>


            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
