<?php
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../includes/functions/connect.php';

  $query = 'SELECT id, title FROM category';
  $stmt = $conn->prepare($query);
  $stmt->execute();
  
  $categories = array();

  while($row = $stmt->fetch()) {
    extract($row);
    array_push($categories, array(
      'id' => $id,
      'title' => $title
    ));
  }

  echo json_encode($categories);