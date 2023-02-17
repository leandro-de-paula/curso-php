<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int para float
echo '<p>INT para FLOAT</p>';
echo '<br>' . var_dump(PHP_INT_MAX + 1);
echo '<br>' . var_dump(1 + 1.0);
echo '<br>' . var_dump((float) 3);
echo '<hr><br>';

// float para int
echo '<p>FLOAT para INT</p>';
echo '<br>' . var_dump((int) 6.8);
echo '<br>' . var_dump(intval (2.999));
echo '<br>' . var_dump((int) round(6.8));
echo '<hr><br>';

// operações com string
echo '<p>Operações com string</p>';
echo '<br>' . var_dump(3 + "2");
echo '<br>' . var_dump(2 + "3");
echo '<br>' . var_dump(2 . "3");
echo '<br>' . is_string(2 . "3");
// echo '<br>' . is_string(2 + "3");
// echo '<br>' . var_dump(1 + "cinco");
// echo '<br>' . var_dump(1 + "5 cinco");
// echo '<br>' . var_dump(2 + "3+5");
echo '<br>' . var_dump((int) "10.5");
echo '<br>' . var_dump((float) "10.5");
echo '<hr><br>';