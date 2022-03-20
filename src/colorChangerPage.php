<?php
include('./includes/head.php');
?>

<body>
  <?php
  include('./includes/header.php');
  ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <form action="./colorChanger/changeBackgroundColor.php" method="POST">
          <label for="bgColor">Pick a color</label>
          <?php
          if (isset($_COOKIE['bgColor']) && !isset($_SESSION['bgColor'])) {
            echo '<input type="color" name="bgColor" id="bgColor" class="form-control" value="' . $_COOKIE['bgColor'] . '">';
          } else {
            echo '<input type="color" name="bgColor" id="bgColor" class="form-control">';
          }
          ?>
          <input type="submit" value="Save as Cookie" class="btn btn-success m-2">
          <input type="text" name="isCookie" id="isCookie" value="true" hidden>
        </form>
      </div>
      <div class="col-6">
        <form action="./colorChanger/changeBackgroundColor.php" method="POST">
          <label for="bgColor">Pick a color</label>
          <?php
          if (!isset($_COOKIE['bgColor']) && isset($_SESSION['bgColor'])) {
            echo '<input type="color" name="bgColor" id="bgColor" class="form-control" value="'.$_SESSION['bgColor'].'">';
          } else {
            echo '<input type="color" name="bgColor" id="bgColor" class="form-control">';
          }
          ?>
          <input type="submit" value="Save as Session" class="btn btn-success m-2">
          <input type="text" name="isSession" id="isSession" value="true" hidden>
        </form>
      </div>
    </div>
    <div class="row m-4 mt-5">
      <div class="col">
        <?php
        if (isset($_COOKIE['bgColor'])) {
          echo '<p class="text-warning">Currently saved as: Cookie</p>';
        } else if (isset($_SESSION['bgColor'])) {
          echo '<p class="text-info">Currently saved as: Session</p>';
        } else {
          echo '<p>Background color is not saved!</p>';
        }
        ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>