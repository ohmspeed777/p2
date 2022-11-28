<?php

require_once ROOT . "/models/baseModel.php";

class PlayerModel extends BaseModel
{
  protected $table = "players";
  protected $columns = [
    "id", "name", "teams_id"
  ];

  function __construct($db)
  {
    parent::__construct($db);
  }

  function findAllWithJoinTeams($condition)
  {
    $sql = "SELECT * FROM {$this->table} 
    LEFT JOIN teams on teams.id = {$this->table}.teams_id 
    WHERE {$condition}";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }
}
