<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Laporan Cuaca</title>
</head>

<body>
    <div class="container mt-2">
        <h2 class="text-center">Form Laporan Cuaca</h2>
        <form action="../../app/proses_laporan.php" method="POST">
            <div class="form-group row mt-3 ">
                <label for="id" class="col-4 col-form-label">Id</label>
                <div class="col-8">
                    <input required id="id" name="id" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="location_id" class="col-4 col-form-label">Location Id</label>
                <div class="col-8">
                    <input required id="location_id" name="location_id" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="weather_type_id" class="col-4 col-form-label">Weather Type</label>
                <div class="col-8">
                    <input required id="weather_type_id" name="weather_type_id" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="temperature" class="col-4 col-form-label">Temperature</label>
                <div class="col-8">
                    <input required id="temperature" name="temperature" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="humidity" class="col-4 col-form-label">Humidity</label>
                <div class="col-8">
                    <input required id="humidity" name="humidity" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="wind_speed" class="col-4 col-form-label">Wind Speed</label>
                <div class="col-8">
                    <input required id="wind_speed" name="wind_speed" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="observation_time" class="col-4 col-form-label">Observation Time</label>
                <div class="col-8">
                    <input required id="observation_time" name="observation_time" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>