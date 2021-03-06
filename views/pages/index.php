<?php
// вывод всех товаров из БД
// создание переменной products и вызов функции get_products(); из файла db_functions.php
$products = get_products(); // теперь тут все товары

// проход по всему массиву products
foreach($products as $item): 
?>

<table align="center" cellpadding="0" cellspacing="0" class="product" border="0">
            <tr>
                <td valign="top">
                <!-- формирование ссылок на товар http://test1.ru/shop/index.php?view=product&id=8 -->
                    <div><a href="index.php?view=product&id=<?php echo $item['id'];?>"><img src="userfiles/<?php echo $item['image'];?>" alt="" /></a></div>
                    <div class="description">
                        <div class="product-name"><a href="#"><?php echo $item['title'];?></a></div>
                        <div class="product-price">Цена: <?php echo $item['price'];?></div>
                    </div>
                </td>
            </tr>
</table>

<?php endforeach;?>
