<?php


$dbcon = mysqli_connect("localhost", "root", "1232", "helper") or die("접속에 실패하였습니다");
mysqli_set_charset($dbcon, "utf8");