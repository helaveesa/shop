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
	
	// установка кодировки
	mysql_query("SET NAMES utf8");
	
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
/* вывод категорий в меню + ссылки для каждого товара +при нажатии на товар будет окрываться файл с его описанием */
// функция вывода категорий у нас их две в БД (таблица категорий)

function get_cat()
{
	
	// подключение к БД установить соединение с базой
	db_connect();
	
	// запрос к БД	
	$query = "SELECT * FROM categories ORDER BY id DESC";
	
	$result = mysql_query($query); //создание переменной и создание запроса к БД
		
	
	$result = db_result_to_array($result);
	
	return $result;
}
	
	// теперь можно обращаться к категории из БД
	
	// напишем функцию, которая будет выводит информацию об одном продукте, на который будут кликать (ссылка)
	
	function get_product($id)
	{
		db_connect();
		
		$query = "SELECT * FROM products WHERE id = 'id'"; // запрос к БД с условием, где id='id' (WHERE id = 'id')
		
		$result = mysql_query($query);
		
		// так как нам будет нужна только информация об одной записи из таблицы products, то $result = db_result_to_array($result); нам не нужно
		// поэтому поместим нашу нужную нам запись в простую переменную
		
		$row = mysql_fetch_array($result); // поместили в переменную $row - все записи о конкретном товаре
		
		return $row;		
	}
	
	
	function get_cat_products($cat)
{
	
	
	db_connect();
	
	$query = "SELECT * FROM products WHERE cat='$cat' ORDER BY id DESC";
	
	$result = mysql_query($query); 
	
	$result = db_result_to_array($result);
	
	return $result;
}
?>