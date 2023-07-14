<?php 
$drinks = array("Naked Juice" => 3.99, "Lemonade" => 4.00, "Tea" => 2.50, "Milk" => 3.50);
$pastries = ["Muffin", "Cake Slice", "Chocolate Peanuts", "Truffles"];

?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
<?php foreach ($drinks as $drink => $price) : ?>
<li><?="$drink: $price"?></li>

<?php endforeach; ?>


</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
<?php for ($i = 0; $i < count($pastries); $i++):?>

<li><?=$pastries[$i]?></li>

<?php endfor; ?>

</ul>
