<?php

require_once ROOT . "/models/players.php";
require_once ROOT . "/models/teams.php";

class HomeController
{
  private $playerModel;
  private $teamsModel;

  function __construct()
  {
    $db = Database::getInstance();
    $this->playerModel = new PlayerModel($db);
    $this->teamsModel = new TeamsModel($db);
  }

  function findAllPlayer()
  {
    $filter = 'true';
    return $this->playerModel->findAllWithJoinTeams($filter);
  }

  function findAllTeams()
  {
    $filter = 'true';
    return $this->teamsModel->findAll($filter);
  }

  function findOnePlayerByID($id)
  {
    $filter = "id = '{$id}'";
    $res =  $this->playerModel->findOne($filter);
    if (!is_array($res) || count($res) <= 0) return new Exception('Not found');
    return $res;
  }

  function findOneTeamsByID($id)
  {
    $filter = "id = '{$id}'";
    $res =  $this->teamsModel->findOne($filter);
    if (!is_array($res) || count($res) <= 0) return new Exception('Not found');
    return $res;
  }
}
