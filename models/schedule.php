<?php

require_once ROOT . "/models/baseModel.php";

class ScheduleModel extends BaseModel
{
  protected $table = "schedule";
  protected $columns = [
    "id", "team_id", "match_id", "score", "status"
  ];

  function __construct($db)
  {
    parent::__construct($db);
  }
}
