<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/0b185ee620.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>


    <div class="container">
      <div class="card w-50 my-5" id="cal-card">
        <h1 class="headline">Calculator</h1>
        <form action="" method="POST">


          <div class="row">
            <div class="col-sm-6">
              <div class="mb-3">
                <input type="number" class="form-control" name="fnum" placeholder="First Number" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <input type="number" class="form-control" name="snum" placeholder="Second Number" required>
              </div>
            </div>
          </div>


          <button type="submit" name="add" value="Add"><i class="fa-solid fa-plus" title="Addition"></i></button>
          <button type="submit" name="sub" value="Sub"><i class="fa-solid fa-minus" title="Substraction"></i></button>
          <button type="submit" name="multi" value="multi" title="Multiplication"><i class="fa-solid fa-xmark"></i></button>
          <button type="submit" name="div" value="div"><i class="fa-solid fa-divide" title="Division"></i></button>
          <button type="submit" name="mod" value="Modulus"><i class="fa-solid fa-percent" title="Mosulus"></i></button>
        </form>
      </div>
    </div>

    <?php
      if(isset($_POST['add'])) {
        $fnum = $_POST['fnum'];
        $snum = $_POST['snum'];
        $sum = $fnum + $snum;
        echo "<div class='container'><div class='card' id='re-card'>";
        echo "<p class='re-txt'>Addition:<br> $fnum + $snum = " . $sum . '</p>';
        echo "</div></div>";
      }
      elseif (isset($_POST['sub'])) {
        $fnum = $_POST['fnum'];
        $snum = $_POST['snum'];
        $sub = $fnum - $snum;
        echo "<div class='container'><div class='card' id='re-card'>";
        echo "<p class='re-txt'>Substraction is: " . $sub . '</p>';
        echo "</div></div>";
      }
      elseif (isset($_POST['multi'])) {
        $fnum = $_POST['fnum'];
        $snum = $_POST['snum'];
        $multi = $fnum * $snum;
        echo "<div class='container'><div class='card' id='re-card'>";
        echo "<p class='re-txt'>Substraction is: " . $multi . '</p>';
        echo "</div></div>";
      }
      elseif (isset($_POST['div'])) {
        $fnum = $_POST['fnum'];
        $snum = $_POST['snum'];
        $div = $fnum / $snum;
        echo "<div class='container'><div class='card' id='re-card'>";
        echo "<p class='re-txt'>Substraction is: " . $div . '</p>';
        echo "</div></div>";
      }
      elseif (isset($_POST['mod'])) {
        $fnum = $_POST['fnum'];
        $snum = $_POST['snum'];
        $mod = $fnum % $snum;
        echo "<div class='container'><div class='card' id='re-card'>";
        echo "<p class='re-txt'>Substraction is: " . $mod . '</p>';
        echo "</div></div>";
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>