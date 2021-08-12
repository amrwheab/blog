<?php
function getFileType($name) {
  $res = '';
  for ($i = strlen($name)-1; $i >= 0; $i--) {
    if ($name[$i] !== '.') {
      $res = $name[$i] . $res;
    } else {
      break;
    }
  }
  return $res;
}
function uploadingFile($formdata, $api) {
  $file = $_FILES[$formdata];
  $file_name = md5(uniqid($file['name'], true)) . '.' . getFileType($file['name']);
  if ($api) {
    $file_target = '../../uploads/' . $file_name;
  } else {
    $file_target = './uploads/' . $file_name;
  }

  if (move_uploaded_file($file["tmp_name"], $file_target)) {
    
    $self = explode('/', $_SERVER['PHP_SELF']);
    $removeself = end($self);
    $uri = str_replace('/'.$removeself, '', $_SERVER['PHP_SELF']);
    $file_path = strtolower(current(explode('/',$_SERVER['SERVER_PROTOCOL']))) . '://' . $_SERVER['HTTP_HOST'] . $uri . '/uploads'.'/' . $file_name;
    
    return $file_path;
  } else {
    return false;
  }
}