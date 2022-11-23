<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>সমবাহু ত্রিভুজের ক্ষেত্রফল</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

    
    <!-- Triangle Area -->

    <div class="container my-5" style="color: #000000;">
      <div class="card" style="padding: 20px; padding: 0;">
        <h3 class="dfr">সমবাহু ত্রিভুজের ক্ষেত্রফল</h3>
        <div class="bx">
          <div class="row">
            <div class="col-sm-6">
              <img src="https://edudesh.com/img/equilateral-triangle.png" class="img-fluid">
            </div>
            <div class="col-sm-6">
              <div class="card" style="padding: 20px;">
                  <form action="" method="POST">
                    <div class="mb-3">
                      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="somobahutrivuj" placeholder="বহুর মান">
                    </div>
                    <button type="submit" class="btn btn-primary" name="trivujCalculation">Calculate</button>
                  </form>
              </div>
              <br>
              <?php
                if(isset($_POST['trivujCalculation'])) {
                  $somobahutrivuj = $_POST['somobahutrivuj'];
                  $trivujFormula = sqrt(3)/4 * $somobahutrivuj ;


                  echo "ত্রিভুজের ক্ষেত্রফল: " . $trivujFormula ;
                  
                }
              ?>
            </div>
        </div>
        </div>
      </div>
    </div>


    <!-- Squre Area -->

    <div class="container my-5" style="color: #000000;">
      <div class="card" style="padding: 20px; padding: 0;">
        <h3 class="dfr">আয়তক্ষেত্রের ক্ষেত্রফল</h3>
        <div class="bx">
          <div class="row">
            <div class="col-sm-6">
              <img src="https://edudesh.com/img/rectangle.webp" class="img-fluid">
            </div>
            <div class="col-sm-6">
              <div class="card" style="padding: 20px;">
                  <form action="" method="POST">
                    <div class="mb-3">
                      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="squreL" placeholder="দৈর্ঘ্য">
                    </div>
                    <div class="mb-3">
                      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="squreW" placeholder="প্রস্থ">
                    </div>
                    <button type="submit" class="btn btn-primary" name="squreArea">Calculate</button>
                  </form>
              </div>
              <br>
              <?php
                if(isset($_POST['squreArea'])) {
                  $squreL = $_POST['squreL'];
                  $squreW = $_POST['squreW'];
                  $SqureAreaFormula = ($squreL * $squreW) ;


                  echo "আয়তক্ষেত্রের ক্ষেত্রফল: " . $SqureAreaFormula ;
                  
                }
              ?>
            </div>
        </div>
        </div>
      </div>
    </div>


    <!-- Circle Area Formula pie*r squre -->

    <div class="container my-5" style="color: #000000;">
      <div class="card" style="padding: 20px; padding: 0;">
        <h3 class="dfr">বৃত্তের ক্ষেত্রফল</h3>
        <div class="bx">
          <div class="row">
            <div class="col-sm-6">
              <img src="https://edudesh.com/img/rectangle.webp" class="img-fluid">
            </div>
            <div class="col-sm-6">
              <div class="card" style="padding: 20px;">
                  <form action="" method="POST">
                    <div class="mb-3">
                      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="squreL" placeholder="দৈর্ঘ্য">
                    </div>
                    <div class="mb-3">
                      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="squreW" placeholder="প্রস্থ">
                    </div>
                    <button type="submit" class="btn btn-primary" name="squreArea">Calculate</button>
                  </form>
              </div>
              <br>
              <?php
                if(isset($_POST['squreArea'])) {
                  $squreL = $_POST['squreL'];
                  $squreW = $_POST['squreW'];
                  $SqureAreaFormula = ($squreL * $squreW) ;


                  echo "আয়তক্ষেত্রের ক্ষেত্রফল: " . $SqureAreaFormula ;
                  
                }
              ?>
            </div>
        </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>