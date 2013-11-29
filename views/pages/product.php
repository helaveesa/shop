<?php
$id = $_GET['id'];

$product = get_product($id);
?>
<table align="center" cellpadding="0" cellspacing="0" class="product" border="0">
            <tr>
                <td valign="top">
                    <div><a href="#"><img src="userfiles/<?php echo $product['image'];?>" alt="" /></a></div>
                    <div class="description">
                        <div class="product-name"><a href="#"><?php echo $product['title'];?></a></div>
                        <div class="product-price">Цена: <?php echo $product['price'];?></div>
                    </div>
                </td>
                <td valign="top">
                    <div><?php echo $product['description'];?></div>
                </td>
            </tr>
</table>