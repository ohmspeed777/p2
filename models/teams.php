<?php

require_once ROOT . "/models/baseModel.php";

class TeamsModel extends BaseModel
{
  protected $table = "teams";
  protected $columns = [
    "id", "name"
  ];

  function __construct($db)
  {
    parent::__construct($db);
  }

  
}
