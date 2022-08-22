<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calculator</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<body>
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-md-5 m-auto">
                <form action="calculation" method="POST">
                    @csrf
                    <div class="card" style="background-color: black">
                        <div class="card-body m-auto">
                            <h1 class="text-center text-light">Arithmetic Calculator</h1>
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input type="number" name="firstNumber" class="form-control"
                                        placeholder="Enter First Number" required="">
                                </div>
                            </div>
                            <br>
                            <div class=" form-group">
                                <div class="col-md-11">
                                    <input type="number" name="secondNumber" class="form-control"
                                        placeholder="Enter Second Number" required="">
                                </div>
                            </div>
                            <br>
                            <div class=" form-group">
                                <div class="col-md-11">
                                    <select name="operator" class="form-control">
                                        <option>----Select Operator----</option>
                                        <option value="+">+</option>
                                        <option value="-">-</option>
                                        <option value="*">*</option>
                                        <option value="/">/</option>
                                        <option value="%">%</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="btn" class="btn btn-outline-warning btn-lg font-weight-bold"
                            value="Enter">
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4 m-auto">
            @if (session('message'))
                <div class="alert alert-warning">
                    <h1 class="text-center">{{ session('message') }}</h1>
                </div>
            @endif
        </div>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

</html>
