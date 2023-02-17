<div class="titulo">Map & Filter</div>

<?php
$notes = [5.8, 7.3, 9.8, 6.7];
$finalNotes1 =[];

// No use of MAP function
foreach ($notes as $note) {
    $finalNotes1[] = round($note);
}

echo "<span>Sem uso da função MAP</span><br>";
print_r($finalNotes1);

echo "<br>";

// Using the MAP function
echo "<span>Com uso da função MAP</span><br>";
$finalNotes2 = array_map('round', $notes);
print_r($finalNotes2);

echo "<br><hr>";

$onlyTheApproved1 = [];

// No use of FILTER function
foreach ($notes as $note) {
    if ($note >= 7) {
        $onlyTheApproved1[] = $note;
    }
}
echo "<span>Sem uso da função FILTER</span><br>";
print_r($onlyTheApproved1);

echo "<br>";


// Using the FILTER function
function Approved($note) {
    return $note >=7;
}
echo "<span>Com uso da função FILTER</span><br>";
$onlyTheApproved2 = array_filter($notes, 'Approved');
print_r($onlyTheApproved2);


echo "<br><hr>";

// Another example with the MAP function
function LegalCalculation($note) {
    $finalNotes = round($note) + 1;
    return $finalNotes > 10 ? 10 : $finalNotes;
}

echo "<span>Outro exemplo com a função MAP</span><br>";
$finalNotes3 = array_map('LegalCalculation', $notes);
print_r($finalNotes3);