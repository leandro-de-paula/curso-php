<style>
    [center] {
        display: flex;
        justify-content: center;
    }
    form > * {
        font-size: 1.8rem;
    }
</style>

<div class="titulo">Fatorial</div>
<div center>
    <form action="#" method="post">
        <input type="number" name="factorial" id="factorial" placeholder="Entre com número" value="<?= $_POST['factorial'] ?? 0 ?>">
        <button type="submit">Fatorar</button>
    </form>
</div>

<?php 
$num = isset($_POST['factorial']) ? $_POST['factorial'] : 0; 
if (is_numeric($num)) {
   $num = intval($num);

   function factorial($number) {
       for ($i=$number-1; $i >= 1; $i--) { 
           $number *= $i;
       }
       return $number;
   }
   
//    echo "<br><hr>";
//    echo "<span>Número: {$num}</span>";
   
   $return = factorial($num);
   echo "<h2 center>Fatorial: {$return}</h2>";
  
} else {
    echo "<script>alert('Entre somente com números')</script>";
}


