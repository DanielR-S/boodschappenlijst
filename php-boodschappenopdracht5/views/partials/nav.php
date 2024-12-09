
<?php 
function urls($url) {
    $ideal = parse_url($_SERVER['REQUEST_URI']);
    $deal = parse_url($url);
    
        if($deal === $ideal) { 
            return "color:PowderBlue;";
        } else {
            return "color:Turquoise;";
        }
    }
?>


<div class= "nav">
<h2>Navigation<h2>
<a href="/" style=<?= urls("/")?>>home</a>
<a  href="/create" style=<?= urls("/create") ?> >Create</a>
</div>

