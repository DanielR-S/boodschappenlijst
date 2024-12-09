<?php require "partials/header.php";?>

<?php require "partials/nav.php";?>




<form method='POST'>  


<label for="name">Product naam?:</label>
<input type="text" name="name">
<br>
<label for="price">Product prijs?:</label>
<input type="number" name="price">
<br>
<label for="number">Aantal van product?:</label>
<input type="number" name="number">

<br>
<a href="/"><button>Submit Product.</button></a>
</form>

<?php if (isset($errors['name'])) : ?>
    <p style="color:crimson;"><?= "*" . $errors['name'] . "*"?></p>
<?php endif; ?>

<?php if (isset($errors['number'])) : ?>
    <p style="color:crimson;"><?= "*" . $errors['number'] . "*"?></p>
<?php endif; ?>

<?php if (isset($errors['price'])) : ?>
    <p style="color:crimson;"><?= "*" . $errors['price'] . "*"?></p>
<?php endif; ?>
