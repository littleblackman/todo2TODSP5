<?php

function getTasks()
{

  $bdd = new PDO("mysql:host=localhost;dbname=myToDoList;charset=utf8", "root", "root");
  $query = "SELECT * FROM task;";

  $req = $bdd->prepare($query);

  $req->execute();

  while($row = $req->fetch(PDO::FETCH_ASSOC)) {

    $task = [
              'name'        => $row['name'],
              'description' => $row['description'],
              'limit'       => $row['date_task'],
              'type_id'     => $row['type_id'],
              'step_id'     => $row['step_id'],
              'updatedby'   => 'moi'
            ];

    $tasks[] = $task;

  }

  return $tasks;
}
