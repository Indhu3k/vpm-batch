<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Feedback Form</title>
</head>
<body class="d-flex vh-100 align-items-center justify-content-center bg-primary">
    <div class="container w-25 bg-light p-4 rounded-3">
        <form action="get_feedback" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Feedback</label>
                <textarea name="feedback" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>
