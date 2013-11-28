<?php
// функция подключения к БД: db_connect
function db_connect() 
{
	$host = 'localhost';
	$user = 'shop_user';
	$pswd = 'adminbelka123';
	$db = 'ishopbelka';
	
	// создаем сам запрос к БД
	$connection = mysql_connect($host, $user, $pswd);
	
	/* проверка, если у нас соединение прошло неудачно или неудачно выбралась БД (либо, либо)
	то функция вернет ложь; иначе вернуть функции соединение  в случае правды */
	if(!$connection || !mysql_select_db($db, $connection)) 
	{
	return false;
	}
	return $connection;
}
	
	/* проверка соединения, вызов функции db_connect
	if(db_connect()) {
	echo 'all ok';	
	}*/

// вызов функции, создание массива и цикла while
// эта функция примет параметр, в котором будет результат: $result = mysql_query($query);

function db_result_to_array($result) 
{
	$res_array = array(); // тут массив пустой, после прохождения цмкла он будет полон
	
	$count = 0; //так как массивы считаются с нуля
	
	/*цикл с условием, в переменную $row помещаем результат работы функции function get_products() ... $result = mysql_query($query);  и пока товары находятся в массиве, то мы на каждом проходе цикла по массиву; $res_array[$count] = $row; - это значит что нулевой, а потом и следующие, элемент (ты) массива будут равняться записи = mysql_fetch_array($result) то есть каккой-то записис из всего ассортимента товаров (продуктов) */
		while($row = mysql_fetch_array($result)) 
		{
			
			$res_array[$count] = $row;
			
			$count++; // увеличение на единицу для повторного прохода цикла т.е. 0, 1, 2 и т.д.
		}
		return $res_array; // возвращение наполненного массива продуктами
}


// функция, которая будет выбрать продукты из нашей БД


function get_products()
{
	
	// подключение к БД установить соединение с базой
	db_connect();
	
	// запрос к БД
	/*SELECT * FROM products-выбрать все из таблицы products 
	$query = "SELECT * FROM products"; */
	/* ORDER BY id-сортировать по id; DESC-от самого свежего товара, к старому;
	$query = "SELECT * FROM products ORDER BY id DESC"; */
	
	$query = "SELECT * FROM products ORDER BY id DESC";
	
	$result = mysql_query($query); //создание переменной и создание запроса к БД
	
	// результат запроса лучше всего поместить в массив, чтобы потом циклом выводит все товары
	// реализация см. выше вызов функции function db_result_to_array($result)
	
	
	// в переменную ниже $result заносим результат работы функции function db_result_to_array($result)
	$result = db_result_to_array($result);
	
	return $result;
	
	// теперь можно обращаться к любому продукты из нашей БД
	
	
}
?>