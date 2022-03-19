<?php
include('./includes/head.php');
?>

<body>
  <?php
  include('./includes/header.php');
  include('./includes/db.php');
  ?>

  <div class="container p-3">
    <div class="row mb-3">
      <div class="col">
        <form action="./todo/addTodo.php" method="POST">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="todo..." name="todoTitle">
            </div>
            <div class="col">
              <input type="submit" class="btn btn-success" value="Add">
            </div>
          </div>
        </form>
      </div>
    </div>

    <?php
    // query all todos of current user
    $userName = $_SESSION['userName'];
    $userIDQuery = "SELECT users.id FROM users WHERE users.userName = '$userName';";
    $userIDResult = mysqli_query($conn, $userIDQuery);
    $userIdRow = mysqli_fetch_assoc($userIDResult);
    $userId = $userIdRow['id'];

    $queryTodos = "SELECT * FROM todos INNER JOIN users ON users.id = todos.createdBy WHERE todos.createdBy = '$userId';";
    $queryTodosResult = mysqli_query($conn, $queryTodos);

    while ($todo = mysqli_fetch_assoc($queryTodosResult)) {
      echo '
          <div class="row border shadow-lg" id="' . $todo['id'] . '">
            <div class="col-4">
              ' . $todo['title'] . '
            </div>
            <div class="col-2">
              ' . $todo['createdAt'] . '
            </div>
          </div>
        ';
    }
    ?>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>