<?php
session_start();

$conn = mysqli_connect("localhost","root","genius10","socialApp");
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}