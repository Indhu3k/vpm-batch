<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Feedbacks</title>
</head>
<body class="d-flex vh-100 align-items-center justify-content-center bg-primary">
    <div class="container w-50 bg-light p-4">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-borderless table-primary align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Feedback</th>
                        <th>IP Address</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($customerFeeds as $customerFeed)
                        <tr class="table-primary" >
                            <td>{{$customerFeed->Name}}</td>
                            <td>{{$customerFeed->Feedback}}</td>
                            <td>{{$customerFeed->ipAddress}}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>

    </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>
