<?php

// подключение db_functions
include('db_functions.php');

$view = empty ($_GET['view']) ? 'index' : $_GET['view']; //как конструкция if...else-сокращен.вид
/* если элемент массива $_GET пустой, то передаем в переменную $view значение переменной index; если - НЕ пустой - то мы присваиваем переменной $view это значение 

if(isset($_GET['view']))
{
    if($_GET['view'] == ) 
	{
    include ($_SERVER['DOCUMENT_ROOT'].'/views/layouts/shop.php');
	}
} */

include($_SERVER['DOCUMENT_ROOT']. '/shop/views/layouts/shop.php'); 

?>	