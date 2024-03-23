<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>URL compressor</title>
</head>
<body>
<h1>URL compressor</h1>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
<div class="col-lg-6">
    <form class="row gy-2 gx-3 align-items-center" method="POST" action="/">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="url" value="https://invmnt.site/articles/show/amazon-taps-stripe-to-power-just-walk-out-payments-in-canada-and-australia">
            <label for="floatingInput">Url for compressing</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="typeNumberHours" name="hours" min="0" max="24" value="1"/>
            <label for="typeNumberHours">Hours life</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="typeNumberCount" name="redirects" min="0" value="0"/>
            <label for="typeNumberCount">Count redirects</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
