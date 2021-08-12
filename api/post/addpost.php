<?php
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../includes/functions/connect.php';
  include_once '../../includes/functions/slugify.php';
  include_once '../../includes/functions/uploadingFile.php';

  $authorId = $_POST['userid'];
  $title = $_POST['posttitle'];
  $metaTitle = $_POST['posttitle'];
  $slug = slugify($_POST['posttitle']) . '-' . (string)rand(0, 100);
  $createdAt = date("Y-m-d H:i:s");
  $content = $_POST['postcontent'];
  $categoryId = $_POST['postcatid'];

  if (isset($_FILES['postposter'])) {
    $imgPath = uploadingFile('postposter', true);
    if ($imgPath) {
      $poster = str_replace('/api/post', '', $imgPath);
      $query = 'INSERT INTO post SET 
                          authorId = :authorId,
                          title = :title,
                          metaTitle = :metaTitle,
                          slug = :slug,
                          createdAt = :createdAt,
                          poster = :poster,
                          content = :content';
    
      $stmt = $conn->prepare($query);
      $stmt->bindParam(':authorId', $authorId);
      $stmt->bindParam(':title', $title);
      $stmt->bindParam(':metaTitle', $metaTitle);
      $stmt->bindParam(':slug', $slug);
      $stmt->bindParam(':createdAt', $createdAt);
      $stmt->bindParam(':poster', $poster);
      $stmt->bindParam(':content', $content);
      
      if ($stmt->execute()) {
        $postId = $conn->lastInsertId();
        $newquery = 'INSERT INTO post_category SET postId = ?,categoryId = ?';
        $newstmt = $conn->prepare($newquery);
        $newstmt->bindParam(1, $postId);
        $newstmt->bindParam(2, $categoryId);
        if ($newstmt->execute()) {
          http_response_code(200);
          echo json_encode(array('success' => true));
        } else {
          http_response_code(400);
          echo json_encode(array('success' => false));
        }
      } else {
        http_response_code(400);
        echo json_encode(array('success' => false));
      }
    } else {
      http_response_code(400);
      echo json_encode(array('success' => false));
    }
  } else {
    http_response_code(400);
    echo json_encode(array('success' => false));
  }

