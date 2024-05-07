<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Ramalan</title>
</head>

<body>
    <div class="container mt-1">
        <h2 class="text-center ">Form Ramalan Cuaca</h2>
        <form action="../../app/proses_ramalan.php" method="POST">
            <div class="form-group row mt-3">
                <label for="id" class="col-4 col-form-label">ID</label>
                <div class="col-8">
                    <input required id="id" name="id" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row mt-3">
                <label for="location_id" class="col-4 col-form-label">ID Lokasi</label>
                <div class="col-8">
                    <input required id="location_id" name="location_id" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="weather_type_id" class="col-4 col-form-label">Tipe Cuaca</label>
                <div class="col-8">
                    <input required id="weather_type_id" name="weather_type_id" type="text" class="form-control">

                </div>
            </div>
            <div class="form-group row">
                <label for="high_temperature" class="col-4 col-form-label">Tinggi Suhu</label>
                <div class="col-8">
                    <input required id="high_temperature" name="high_temperature" type="number" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="low_temperature" class="col-4 col-form-label">Rendah Suhu</label>
                <div class="col-8">
                    <input required id="low_temperature" name="low_temperature" type="number" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3 ">
                <label for="forecast_date" class="col-4 col-form-label">Tanggal Perkiraan</label>
                <div class="col-8">
                    <input required id="forecast_date" name="forecast_date" type="date" class="form-control">
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