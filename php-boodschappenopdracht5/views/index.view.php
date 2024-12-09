<?php require "./views/partials/header.php";?>


<?php require "./views/partials/nav.php";?>


<div class="banner">

<table>

<tr id="1">
        <th>Product</th>
        <th>Prijs</th>
        <th>Aantal</th>
        <th>SubTotaal</th>
    </tr>

<?php foreach($producten as $product): ?>
  <tr>
  <td><?=htmlspecialchars($product["name"])?></td>
  <td><?=htmlspecialchars($product["price"])?></td>
  <td><?=htmlspecialchars($product["number"])?></td>
  <td><?=htmlspecialchars($product["price"] * $product["number"])?></td>
  </tr>
  <?php endforeach; ?>

  <tr>
      <td id="6" colspan="3"><strong>Totaal</strong></td>
      <td id="7"><?= $totalPrice?></td>
</tr>
</table>
</div>




        <!-- <tr id="1">
        <th>Product</th>
        <th>Prijs</th>
        <th>Aantal</th>
        <th>SubTotaal</th>
    </tr>

    <tr id="2">
      <td>Brood	</td>
      <td>1.00</td>
      <td>1</td>
      <td>1.00</td>
    </tr>
    
    <tr id="3">
      <td>Broccoli</td>
      <td>0.99</td>
      <td>2</td>
      <td>1.98</td>
    </tr>

    <tr id="4">
      <td>Krentebollen</td>
      <td>1.20</td>
      <td>4</td>
      <td>4.80</td>
    </tr>

    <tr id="5">
      <td>Noten</td>
      <td>2.99</td>
      <td>0</td>
      <td>0.00</td>
    </tr> -->