<?php   
//DECLARACION DE VARIABLES Y ENVIO DE DATOS DEL FORMULARIO A LOS ARRAY
$empleado1 =[
    "Nombre" => $_POST['nombre1'],
    "Edad" => $_POST['edad1'],
    "Estado Civil" => $_POST['Estado-Civil'],
    "Sexo" => $_POST['Sexo'],
    "Sueldo" => $_POST['sueldo1']

];
$empleado2 =[
    "Nombre" => $_POST['nombre2'],
    "Edad" => $_POST['edad2'],
    "Estado Civil" => $_POST['Estado-Civil2'],
    "Sexo" => $_POST['Sexo2'],
    "Sueldo" => $_POST['sueldo2']

];

$empleado3 =[
    "Nombre" => $_POST['nombre3'],
    "Edad" => $_POST['edad3'],
    "Estado Civil" => $_POST['Estado-Civil3'],
    "Sexo" => $_POST['Sexo3'],
    "Sueldo" => $_POST['sueldo3']

];

$empleado4 =[
    "Nombre" => $_POST['nombre4'],
    "Edad" => $_POST['edad4'],
    "Estado Civil" => $_POST['Estado-Civil4'],
    "Sexo" => $_POST['Sexo4'],
    "Sueldo" => $_POST['sueldo4']

];

$empleado5 =[
    "Nombre" => $_POST['nombre5'],
    "Edad" => $_POST['edad5'],
    "Estado Civil" => $_POST['Estado-Civil5'],
    "Sexo" => $_POST['Sexo5'],
    "Sueldo" => $_POST['sueldo5']

];



$contar_F=0;

$contar_casados2500= 0;

$contar_viudas1000=0;

$promedio_hombres=0;

$suma_edad_hombres=0;

$contador_hombres=0;



//BUSCAR COINCIDENCIAS EN EL ARRAY DE EMPLEADOS CON EL GENERO FEMENINO
if ($empleado1['Sexo']=='F') {
    $contar_F++;
}else {
    $contar_F=$contar_F;
}
if ($empleado2['Sexo']=='F') {
    $contar_F++;
}else {
    $contar_F=$contar_F;
}
if ($empleado3['Sexo']=='F') {
    $contar_F++;
}else {
    $contar_F=$contar_F;
}
if ($empleado4['Sexo']=='F') {
    $contar_F++;
}else {
    $contar_F=$contar_F;
}
if ($empleado5['Sexo']=='F') {
    $contar_F++;
}else {
    $contar_F=$contar_F;
}

//EMPLEADOS HOMBRES CASADOS CON SUELDO DE MAS DE 2500BS
if ($empleado2['Sexo']=='M') {
    if($empleado2['Estado Civil']=='Casado(a)' && $empleado2['Sueldo']>=2500){
        $contar_casados2500++;
    }else {
        $contar_casados2500=$contar_casados2500;
    }
}else {
    $contar_casados2500=$contar_casados2500;
}

if ($empleado1['Sexo']=='M') {
    if($empleado1['Estado Civil']=='Casado(a)' && $empleado1['Sueldo']>=2500){
        $contar_casados2500++;
    }else {
        $contar_casados2500=$contar_casados2500;
    }
}else {
    $contar_casados2500=$contar_casados2500;
}

if ($empleado3['Sexo']=='M') {
    if($empleado3['Estado Civil']=='Casado(a)' && $empleado3['Sueldo']>=2500){
        $contar_casados2500++;
    }else {
        $contar_casados2500=$contar_casados2500;
    }
}else {
    $contar_casados2500=$contar_casados2500;
}

if ($empleado4['Sexo']=='M') {
    if($empleado4['Estado Civil']=='Casado(a)' && $empleado4['Sueldo']>=2500){
        $contar_casados2500++;
    }else {
        $contar_casados2500=$contar_casados2500;
    }
}else {
    $contar_casados2500=$contar_casados2500;
}

if ($empleado5['Sexo']=='M') {
    if($empleado5['Estado Civil']=='Casado(a)' && $empleado5['Sueldo']>=2500){
        $contar_casados2500++;
    }else {
        $contar_casados2500=$contar_casados2500;
    }
}else {
    $contar_casados2500=$contar_casados2500;
}


//MUJERES VIUDAS CON SUELDO de MAS DE 1000bs
if ($empleado2['Sexo']=='F') {
    if($empleado2['Estado Civil']=='Viudo(a)' && $empleado2['Sueldo']>=1000){
        $contar_viudas1000++;
    }else {
        $contar_viudas1000=$contar_viudas1000;
    }
}else {
    $contar_viudas1000=$contar_viudas1000;
}

if ($empleado1['Sexo']=='F') {
    if($empleado1['Estado Civil']=='Viudo(a)' && $empleado1['Sueldo']>=1000){
        $contar_viudas1000++;
    }else {
        $contar_viudas1000=$contar_viudas1000;
    }
}else {
    $contar_viudas1000=$contar_viudas1000;
}

if ($empleado3['Sexo']=='F') {
    if($empleado3['Estado Civil']=='Viudo(a)' && $empleado3['Sueldo']>=1000){
        $contar_viudas1000++;
    }else {
        $contar_viudas1000=$contar_viudas1000;
    }
}else {
    $contar_viudas1000=$contar_viudas1000;
}

if ($empleado4['Sexo']=='F') {
    if($empleado4['Estado Civil']=='Viudo(a)' && $empleado4['Sueldo']>=1000){
        $contar_viudas1000++;
    }else {
        $contar_viudas1000=$contar_viudas1000;
    }
}else {
    $contar_viudas1000=$contar_viudas1000;
}

if ($empleado5['Sexo']=='F') {
    if($empleado5['Estado Civil']=='Viudo(a)' && $empleado5['Sueldo']>=1000){
        $contar_viudas1000++;
    }else {
        $contar_viudas1000=$contar_viudas1000;
    }
}else {
    $contar_viudas1000=$contar_viudas1000;
}

//CALCULAR PROMEDIO DE EDAD DE LOS HOMBRES::

if($empleado1['Sexo']=='M'){
    $suma_edad_hombres= $empleado1['Edad']+$suma_edad_hombres;
    $contador_hombres++;
}else {
    $suma_edad_hombres=$suma_edad_hombres;
}
if($empleado2['Sexo']=='M'){
    $suma_edad_hombres= $empleado2['Edad']+$suma_edad_hombres;
    $contador_hombres++;
}else {
    $suma_edad_hombres=$suma_edad_hombres;
}
if($empleado3['Sexo']=='M'){
    $suma_edad_hombres= $empleado3['Edad']+$suma_edad_hombres;
    $contador_hombres++;
}else {
    $suma_edad_hombres=$suma_edad_hombres;
}
if($empleado4['Sexo']=='M'){
    $suma_edad_hombres= $empleado4['Edad']+$suma_edad_hombres;
    $contador_hombres++;
}else {
    $suma_edad_hombres=$suma_edad_hombres;
}
if($empleado5['Sexo']=='M'){
    $suma_edad_hombres= $empleado5['Edad']+$suma_edad_hombres;
    $contador_hombres++;
}else {
    $suma_edad_hombres=$suma_edad_hombres;
}


$promedio_hombres= $suma_edad_hombres/$contador_hombres;



//MOSTRANDO LOS DATOS DE LOS ARRAYS

print_r($empleado1);
echo '<br>'; echo '<br>';
print_r($empleado2);
echo '<br>'; echo '<br>';
print_r($empleado3);
echo '<br>';echo '<br>';
print_r($empleado4);
echo '<br>';echo '<br>';
print_r($empleado5);
echo '<br>';echo '<br>';





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
                <th>Empleados Mujeres</th>
                <th>Hombres casados, Sueldo =>2500bs</th>
                <th>Mujeres viudas, Sueldo =>1000bs </th>
                <th>Edad Promedio de Hombres</th>
                
            </tr>
            

            <?php //MOSTRANDO LOS DATOS EN UNA TABLA

                     echo'<tr>';
                     ECHO    '<td>' . $contar_F .'</td>';
                     echo '<td>' . $contar_casados2500 .'</td>';
                     ECHO    '<td>' . $contar_viudas1000 .'</td>';
                     echo '<td>' . $promedio_hombres .'</td>';
?>
            

            </table>





            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    


</body>
