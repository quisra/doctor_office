<!doctype html>
<html lang="en">
  <head>
    <title>Doctor's Check In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Style Sheet -->
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
    
    <div class="container-fluid">
    <div class="row">

    <div class="col-sm-3"></div>

      <div class="col-sm-6 justify-content-center">
      <?php
          include 'process.php';

          if(isset($_POST['submit'])) {
            insertPt();
          }
        ?>


      </div>

      <div class="col-sm-3"></div>
    </div>
      <div class="row">


      <!-- Left space -->
        <div class="col-sm-3"></div>


        <!-- Work Space -->
        <div style="padding: 2%;" class="col-sm-6 rounded bg-secondary text-white">


        <h1 class="text-center text-white">Check In</h1>
        <form action="index.php" method="POST" class="was-validated">
          <div class="form-row">
            <div class="form-group col-sm-6 ">
              First Name:          
              <input class="form-control" type="text" name="firstname" placeholder="Insert First Name" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group col-sm-6 ">
              Last Name:          
              <input class="form-control" type="text" name="lastname" placeholder="Insert Last Name" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-sm-8">
            Street Address:
            <input class="form-control" type="text" name="street1" placeholder="1234 Main Strt" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group col-sm-4" >
              Unit Number (if any):
              <input class="form-control" type="number" name="unitnum" placeholder="12" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          </div>
          <div class="form-row">
                <div class="form-group col-sm-4">
                  City:
                  <input type="text" class="form-control" name="city" placeholder="New York" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group col-sm-4">
                  State:
                  <select class="form-control" name="state" id="state" required>
                            <option selected>Choose...</option>
                            <option value="AL">AL</option>
                            <option value="AK">AK</option>
                            <option value="AZ">AZ</option>
                            <option value="AR">AR</option>
                            <option value="CA">CA</option>
                            <option value="CO">CO</option>
                            <option value="CT">CT</option>
                            <option value="DE">DE</option>
                            <option value="FL">FL</option>
                            <option value="GA">GA</option>
                            <option value="HI">HI</option>
                            <option value="ID">ID</option>
                            <option value="IL">IL</option>
                            <option value="IN">IN</option>
                            <option value="IA">IA</option>
                            <option value="KS">KS</option>
                            <option value="KY">KY</option>
                            <option value="IA">IA</option>
                            <option value="KS">KS</option>
                            <option value="KY">KY</option>
                            <option value="LA">LA</option>
                            <option value="ME">ME</option>
                            <option value="MD">MD</option>
                            <option value="MA">MA</option>
                            <option value="MI">MI</option>
                            <option value="MN">MN</option>
                            <option value="MS">MS</option>
                            <option value="MO">MO</option>
                            <option value="MT">MT</option>
                            <option value="NE">NE</option>
                            <option value="NV">NV</option>
                            <option value="NH">NH</option>
                            <option value="NJ">NJ</option>
                            <option value="NM">NM</option>
                            <option value="NY">NY</option>
                            <option value="NC">NC</option>
                            <option value="ND">ND</option>
                            <option value="OH">OH</option>
                            <option value="OK">OK</option>
                            <option value="OR">OR</option>
                            <option value="PA">PA</option>
                            <option value="RI">RI</option>
                            <option value="SC">SC</option>
                            <option value="SD">SD</option>
                            <option value="TN">TN</option>
                            <option value="TX">TX</option>
                            <option value="UT">UT</option>
                            <option value="VT">VT</option>
                            <option value="VA">VA</option>
                            <option value="WA">WA</option>
                            <option value="WV">WV</option>
                            <option value="WI">WI</option>
                            <option value="WY">WY</option>                  
                    </select>
                
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group col-sm-4">
                  Zipcode:
                  <input class="form-control" type="text" name="zipcode" id="zipcode" placeholder="32215" required>
                  <!-- Validation -->
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
          </div>
          <div class="form-row">
                <div class="form-group col-sm-6">
                  Email:
                  <input class="form-control" placeholder="godoctor@email.com" type="email" name="email" id="email" required>
                    <!-- Validation -->
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group col-sm-6">
                  Phone Number:
                  <input class="form-control" placeholder="9041234567" type="tel" name="phone" id="phone" required>
                    <!-- Validation -->
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>

                </div>
          </div>

          <div class="form-row">
            <div class="col-sm-8 ">
              Date of Birth:
              <div class="form-row ">
                <div class="form-group  col-sm-4">
                  Month:
                  <select class="form-control" name="birthmonth" id="birthmonth" required>
                    <?php
                    $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                    foreach($months as $month) {
                    echo '<option value="'.$month.'">'.$month.'</option>';
                    }?>
                  </select>

                </div>

                <div class="form-group col-sm-4">
                  Day:
                  <select class="form-control" id="birthday" name="birthday" required>
                    <?
                    $x = 1;
                    while($x <= 31) {
                    echo '<option value="'.$x.'">'.$x.'</option>';
                    $x++;
                    } ?>
                  </select>
                </div>

                <div class="col-sm-4 form-group">
                    Year:
                  <select class="form-control" id="birthyear" name="birthyear"  required>
                    <?
                    $x = 1920;
                    $year = date('Y');
                    while($year >= $x) {
                    echo '<option value="'.$year.'">'.$year.'</option>';
                    $year--;
                    }
                    ?>
                  </select>
                </div>
            </div>

            </div><!-- Don't remember why this is there. If not there, it messes up the site-->
            <div class="col-sm-4">
                Gender:
                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" value="Male" name="gender" id="male">Male
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" value="Female" name="gender" id="female">Female
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" value="Other" name="gender" id="other" >Other
                    </label>
                </div>

            </div>
                  </div><!-- Don't remember why this is there. It only works as a closer for the form-row-->

            <div class="form-row">
              <div class="form-group col-sm-5 ">
                    Ethnicity:
                    <div class="form-row ">
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" value="Hispanic" name="ethnic" id="hispanic">Hispanic
                        </label>
                      </div>

                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" value="Non-Hispanic" name="ethnic" id="non-hispanic">Non-Hispanic
                        </label>
                      </div>

                    </div>


              </div>

              <div class="col-sm-2"></div>

              <div class="col-sm-5 form-group">
                Race:
                <select class="form-control" name="race" id="race" required>
                  <?php
                    $races= array( "African American", "American Indian", "Alaskan Native", "Asian", "Caucasian", "Native Hawaiian", "Pacific Islander");
                    foreach ($races as $race){
                      echo '<option value="'.$race.'">'.$race.'</option>';
                    }
                  ?>
                </select>
              </div>

          </div>

          <div class="form-row">
            <div class="col-sm-6 form-group">
              Marital Status:
              <select class="form-control" name="mstatus" id="mstatus">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Seperated">Seperated</option>
                <option value="Widowed">Widowed</option>

              </select>
            </div>

            <div class="col-sm-6 form-group">
              Number of Children:
              <select class="form-control" name="children" id="children">
                <?php
                  $ten= 10;
                  $num= 1;
                  while ($num <= $ten){
                    echo '<option value="'.$num.'">'.$num.'</option>';
                    $num ++;
                  }
                ?>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4"></div>

            <div class="col-sm-4 justify-content-center">
            <button class="btn btn-md btn-success btn-block" name="submit" type="submit"><h5>SUBMIT</h5></button>
            </div>

            <div class="col-sm-4"></div>
          </div>
        </form>

        </div>

        <!-- Right Space -->
        <div class="col-sm-3"></div>
      </div>
      <div style="padding: 2%;" class="row"></div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>