<?php

require_once  "../configs/configs.php";
require_once ROOT . "/controllers/matchController.php";
require_once ROOT . "/controllers/homeController.php";
require_once ROOT . "/controllers/scheduleController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  try {
    $matchController = new MatchController();
    $homeController = new HomeController();
    $scheduleModel = new ScheduleController();

    $scheduleModel->create($_POST);
    // var_dump($homeController->findAllPlayer());

    // create
    // $matchController->create($_POST);

    // find all
    // $res = $matchController->findAll();

    // find one
    // $res = $matchController->findOne('2');

   //update
  //  $res = $matchController->findOne('2');
  //  $res["start_date"] = "2021-09-11 14:02:22";
  //  $matchController->update('2', $res);

  } catch (Exception $e) {
    echo $e->getMessage();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Home page</h1>
  <form action="" method="POST">
    <button>Submit</button>
  </form>
</body>

</html>