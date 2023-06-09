<?php

$estudiante1=[
    "nMat"=> $_POST['mat1'],
    "nFsc"=> $_POST['fisica1'],
    "nProg"=> $_POST['prog1']


];

$estudiante2=[
    "nMat"=> $_POST['mat2'],
    "nFsc"=> $_POST['fisica2'],
    "nProg"=> $_POST['prog2']
    
];

$estudiante3=[
    "nMat"=> $_POST['mat3'],
    "nFsc"=> $_POST['fisica3'],
    "nProg"=> $_POST['prog3']
    
];

$estudiante4=[
    "nMat"=> $_POST['mat4'],
    "nFsc"=> $_POST['fisica4'],
    "nProg"=> $_POST['prog4']
    
];

$estudiante5=[
    "nMat"=> $_POST['mat5'],
    "nFsc"=> $_POST['fisica5'],
    "nProg"=> $_POST['prog5']
    
];

$notas_mat=[
    $estudiante1['nMat'],
    $estudiante2['nMat'],
    $estudiante3['nMat'],
    $estudiante4['nMat'],
    $estudiante5['nMat']

];

$notas_fsc=[
    $estudiante1['nFsc'],
    $estudiante2['nFsc'],
    $estudiante3['nFsc'],
    $estudiante4['nFsc'],
    $estudiante5['nFsc']

];


$notas_prog=[
    $estudiante1['nProg'],
    $estudiante2['nProg'],
    $estudiante3['nProg'],
    $estudiante4['nProg'],
    $estudiante5['nProg']

];



$Aprobar3=0;
$Aprobar2=0;
$Aprobar1=0;
$aprobadosM=0; 
$aplazadosM=0;
$aprobadosF=0; 
$aplazadosF=0;
$aprobadosPr=0; 
$aplazadosPr=0;

$promedio_mat=0; 
$promedio_fsc=0; 
$promedio_prog=0;

$promedio_mat=array_sum($notas_mat)/count($notas_mat); 

$promedio_fsc=array_sum($notas_fsc)/count($notas_fsc); 

$promedio_prog=array_sum($notas_prog)/count($notas_prog); 


$longitud=count($notas_mat);

for ($i=0; $i < $longitud; $i++) { 
    if ($notas_mat[$i] <= 9) {
        $aplazadosM++;
        
    }else{
        $aprobadosM++;
        
    }
}
for ($i=0; $i < $longitud; $i++) { 
    if ($notas_fsc[$i] <= 9) {
        $aplazadosF++;
        
    }else{
        $aprobadosF++;
        
    }
}

for ($i=0; $i < $longitud; $i++) { 
    if ($notas_mat[$i] <= 9) {
        $aplazadosPr++;
        
    }else{
        $aprobadosPr++;
        
    }
}


if ($estudiante1['nMat']>= 10 && $estudiante1['nFsc']>=10 && $estudiante1['nProg']<=9) {
    $Aprobar2++;
    
}elseif ($estudiante1['nMat']>=10 && $estudiante1['nProg']>=10 && $estudiante1['nFsc']<=9) {
    $Aprobar2++;
}elseif ($estudiante1['nFsc']>=10 && $estudiante1['nProg']>=10 && $estudiante1['nMat']<=9) {
    $Aprobar2++;
}elseif ($estudiante1['nMat']<=9 && $estudiante1['nFsc']<=9) {
    $Aprobar1++;
}elseif ($estudiante1['nMat']<=9 && $estudiante1['nProg']<=9) {
    $Aprobar1++;
}elseif ($estudiante1['nFsc']<=9 && $estudiante1['nProg']<=9) {
    $Aprobar1++;
}else{
    $Aprobar3++;
}

if ($estudiante2['nMat']>=10 && $estudiante2['nFsc']>=10 && $estudiante2['nProg']<=9) {
    $Aprobar2++;
    
}elseif ($estudiante2['nMat']>=10 && $estudiante2['nProg']>=10 && $estudiante2['nFsc']<=9) {
    $Aprobar2++;
}elseif ($estudiante2['nFsc']>=10 && $estudiante2['nProg']>=1 && $estudiante2['nMat']<=9) {
    $Aprobar2++;
}elseif ($estudiante2['nMat']<=9 && $estudiante2['nFsc']<=9) {
    $Aprobar1++;
}elseif ($estudiante2['nMat']<=9 && $estudiante2['nProg']<=9) {
    $Aprobar1++;
}elseif ($estudiante2['nFsc']<=9 && $estudiante2['nProg']<=9) {
    $Aprobar1++;
}else{
    $Aprobar3++;
}


if ($estudiante3['nMat']>=10 && $estudiante3['nFsc']>=10 && $estudiante3['nProg']<=9) {
    $Aprobar2++;
    
}elseif ($estudiante3['nMat']>=10 && $estudiante3['nProg']>=10 && $estudiante3['nFsc']<=9) {
    $Aprobar2++;
}elseif ($estudiante3['nFsc']>=10 && $estudiante3['nProg']>=10 && $estudiante3['nMat']<=9) {
    $Aprobar2++;
}elseif ($estudiante3['nMat']<=9 && $estudiante3['nFsc']<=9) {
    $Aprobar1++;
}elseif ($estudiante3['nMat']<=9 && $estudiante3['nProg']<=9) {
    $Aprobar1++;
}elseif ($estudiante3['nFsc']<=9 && $estudiante3['nProg']<=9) {
    $Aprobar1++;
}else{
    $Aprobar3++;
}

if ($estudiante4['nMat']>=10 && $estudiante4['nFsc']>=10 && $estudiante4['nProg']<=9) {
    $Aprobar2++;
    
}elseif ($estudiante4['nMat']>=10 && $estudiante4['nProg']>=10 && $estudiante4['nFsc']<=9) {
    $Aprobar2++;
}elseif ($estudiante4['nFsc']>=10 && $estudiante4['nProg']>=10 && $estudiante4['nMat']<=9) {
    $Aprobar2++;
}elseif ($estudiante4['nMat']<=9 && $estudiante4['nFsc']<=9) {
    $Aprobar1++;
}elseif ($estudiante4['nMat']<=9 && $estudiante4['nProg']<=9) {
    $Aprobar1++;
}elseif ($estudiante4['nFsc']<=9 && $estudiante4['nProg']<=9) {
    $Aprobar1++;
}else{
    $Aprobar3++;
}

if ($estudiante5['nMat']>=10 && $estudiante5['nFsc']>=10 && $estudiante5['nProg']<=9) {
    $Aprobar2++;
    
}elseif ($estudiante5['nMat']>=10 && $estudiante5['nProg']>=10 && $estudiante5['nFsc']<=9) {
    $Aprobar2++;
}elseif ($estudiante5['nFsc']>=10 && $estudiante5['nProg']>=10 && $estudiante5['nMat']<=9) {
    $Aprobar2++;
}elseif ($estudiante5['nMat']<=9 && $estudiante5['nFsc']<=9) {
    $Aprobar1++;
}elseif ($estudiante5['nMat']<=9 && $estudiante5['nProg']<=9) {
    $Aprobar1++;
}elseif ($estudiante5['nFsc']<=9 && $estudiante5['nProg']<=9) {
    $Aprobar1++;
}else{
    $Aprobar3++;
}












?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>



<body>
        <h1>Resultados</h1>

            <table class="table table-striped">
            <tr>
                <th>PROMEDIO FISICA</th>
                <th>PROMEDIO MATEMATICA</th>
                <th>PROMEDIO PROGRAMACION </th>
                <th>APROBADOS FISICA</th>
                <th>APLAZADOS FISICA</th>

                <th>APROBADOS MATEMATICA</th>
                <th>APLAZADOS MATEMATICA</th>
                <th>APROBADOS PROGRAMACION</th>
                <th>APLAZADOS PROGRAMACION</th>
                <th>APROBARON TODO:</th>
                <th>APROBARON 2:</th>
                <th>APROBO 1:</th>
                
                
            </tr>
            

            <?php //MOSTRANDO LOS DATOS EN UNA TABLA

                    echo'<tr>';
                    ECHO    '<td>' . $promedio_fsc .'</td>';
                    echo '<td>' . $promedio_mat .'</td>';
                    ECHO    '<td>' . $promedio_prog .'</td>';
                    echo '<td>' . $aprobadosF .'</td>';
                    echo '<td>' . $aplazadosF .'</td>';
                    ECHO    '<td>' . $aprobadosM .'</td>';
                    echo '<td>' . $aplazadosM .'</td>';
                    echo '<td>' . $aprobadosPr .'</td>';
                    echo '<td>' . $aplazadosPr .'</td>';
                    ECHO    '<td>' . $Aprobar3 .'</td>';
                    echo '<td>' . $Aprobar2 .'</td>';
                    echo '<td>' . $Aprobar1 .'</td>';
                    
                    ?>
            

            </table>





            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    


</body>