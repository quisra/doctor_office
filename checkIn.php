<!doctype html>
<html lang="en">
  <head>
    <title>Check In Information</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="navbar-brand" href="#">Dr. Shoe Clinic</a>
    </li>
  </ul>  
  </nav>

  <div style="padding: 1% ";></div>

<!-- Container for a heading -->
  <div style="border-bottom: solid 3px black;" class="container">
  <h2 class="text-center">Patient Check In List</h2>
  </div>

  <div style="padding: 1%"></div>

  <!-- Table Container -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
      <table class="table table-bordered table-hover">
      <thead class="thead-dark text-center">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Address</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>DOB</th>
          <th>Gender</th>
          <th>Ethnicity</th>
          <th>Race</th>
          <th>Marital Status</th>
          <th>No. Of Children</th>
          <th>Status</th>
          <th>Check In Time</th>
        </tr>
      </thead>

      <?
        include 'process.php';

        selectPt();
      ?>
    </table>

      </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>