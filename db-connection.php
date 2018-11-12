<?php
  $host = "ec2-107-20-193-206.compute-1.amazonaws.com";
  $port = "5432";
  $dbname = "dfstol1h6h1f7u";
  $user = "adnnopepnpjgxm";
  $password = "82ca0254609435c0cb821354c8d9961c4925af5f3cc4eef39ccef9938bd3cd02";
  $pg_options = "--client_encoding=UTF8";

  function getConnection() {
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
    $dbconn = pg_connect($connection_string);
  }
