<?php

  function connect($db)
  {
      try {
          $conn = new PDO("mysql:host={$db['host']};dbname={$db['db']}", $db['username'], $db['password']);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          return $conn;
      } catch (PDOException $exception) {
          exit($exception->getMessage());
      }
  }

 ?>