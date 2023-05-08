<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 9</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/style.css">

</head>

<body>
  <section class="body">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form>
            <div class="mb-3">
              <label for="weightInput" class="form-label">Weight (kg):</label>
              <input type="number" class="form-control" id="weightInput" name="weightInput"
                aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
              <label for="heightInput" class="form-label">Height (cm):</label>
              <input type="number" class="form-control" id="heightInput" name="heightInput"
                aria-describedby="emailHelp">

            </div>
            <button type="button" id="calculateBtn" class="btn btn-primary">Calculate BMI</button><br><br>

            <div class="mb-3">
              <label for="result" class="form-label">Result:</label>
              <input type="text" class="form-control" id="result" readonly>

            </div>

          </form>
        </div>
      </div>
    </div>
</section>




  <script src="assets/js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>