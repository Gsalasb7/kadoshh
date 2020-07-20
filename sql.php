<?php
class SQL {
  public static function main() {
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $host = $url["host"];
    $username = $url["user"];
    $password = array_key_exists("pass", $url) ? $url["pass"] : "";
    $db = substr($url["path"], 1);

    $con = mysqli_connect($host, $username, $password, $db);

    $q="DROP TABLE IF EXISTS things";
    mysqli_query($con, $q);
    $q="CREATE TABLE things (name varchar(20))";
    mysqli_query($con, $q);
    $q="INSERT INTO things(name) VALUES('Pablo Mendez Osiann')";
    mysqli_query($con, $q);
    $q="SELECT * FROM things";
    return mysqli_query($con, $q);
  }
}
?>
