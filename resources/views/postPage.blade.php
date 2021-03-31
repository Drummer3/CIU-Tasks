<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post {{ $id }}</title>
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
        rel="stylesheet"
    />
</head>


<body style="background: #303030">
    <div class="container-fluid text-center">
        <a href="/" class='btn btn-primary' role='button'>Home</a>
        <a href="/info" class='btn btn-primary' role='button'>Info</a>
    </div>
    <div class="container" id="mainContainer">
    </div>
</body>

<!-- FETCH script -->
<script>
    // https://jsonplaceholder.typicode.com/guide/
    fetch('https://jsonplaceholder.typicode.com/posts/{{ $id }}')
        .then((response) => response.json())
        .then((json) => postGenerator(json));
</script>
<script
    type="text/javascript"
    src="../static/js/individualFetch.js"
></script>

<!-- BOOTSTRAP script -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>

</html>