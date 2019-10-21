<?php
define("DB_USERNAME", "username"); // please change later
define("DB_PASSWORD", "password"); // please change later
define("DB_HOST", "localhost");
define("DB_DATABASE", "our_db");
define("DB_LOGGING", "0"); // "1" for do log, "0" for do not log

/**
 * initialise database connection
 * @return {Connection} $conn : active database connection
 */
function connect()
{
  $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  return $conn;
}

/**
 * query db with predefined query
 * @param {String} $query : SQL query
 */
function queryDB($query)
{
  $c = connect();
  if ($c->query($query) === true) {
    if (DB_LOGGING == "1") {
      echo '<br><span style="color:green;font-weight:bold;">queryDB() Success:</span> ', $query;
    }
  } else {
    if (DB_LOGGING == "1") {
      echo '<br><span style="color:red;font-weight:bold;">queryDB() Error:</span> ' . $c->error;
    }
  }

  $c->close();
}

/**
 * query db with predefined query and return result
 * @param {String} $query : SQL query
 * @return {Result} result : database query result
 */
function getData($query)
{
  $c = connect();
  $result = $c->query($query); // run query and store result

  if ($result) {
    if (DB_LOGGING == "1") {
      echo '<br><span style="color:green;font-weight:bold;">getData() Success:</span> ', $query;
    }
    return $result;
  } else {
    if (DB_LOGGING == "1") {
      echo '<br><span style="color:red;font-weight:bold;">getData() Error:</span> ' . $c->error;
    }
    return false;
  }

  $c->close();
}

function createDB()
{
  $database = DB_DATABASE;
  $c = connect();
  if ($c->connect_error) {
    die("CreateDB() connection failed: " . $c->connect_error);
  }
  $query = "CREATE DATABASE $database";
  if ($c->query($query) === true) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . $c->error;
  }

  $c->close();
}
