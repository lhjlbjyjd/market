<?php

$link= mysqli_connect('localhost','root','','result');

if(mysqli_connect_errno())
{
	echo'Ошибка в подключении к базе данных ('.mysqli_connect_errno().'): '. mysqli_connect_error();
	exit();
}