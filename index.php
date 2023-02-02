<?php
    $femenino = 0;
    $casado = 0;
    $viudo = 0;
    $masculino = 0;
    $edades = 0;
    $data = $_POST;
    $flag = false;    
    $amount = 1;
        for($i=0;$i<$amount;$i++){
            if( !empty($data['genero'.$i])&&!empty($data['estado'.$i])&&!empty($data['sueldo'.$i])&&!empty($data['nombre'.$i])&&!empty($data['edad'.$i]) ) {
                if($data['genero'.$i]==='femenino')
                $femenino++;
                if($data['estado'.$i]==='casado' && $data['sueldo'.$i]==='mas'&& $data['genero'.$i]==='masculino' )
                $casado++;
                if($data['estado'.$i]==='viudo' && $data['sueldo'.$i]==='entre' && $data['genero'.$i]==='femenino')
                $viudo++;
                if($data['genero'.$i]==='masculino'){
                    $edades+=$data['edad'.$i];
                    $masculino++;
                }
            }else{
                $flag = true;
            }
        }
        $promedio = $masculino>0&&$edades>0?$edades/$masculino:0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"rel="stylesheet"/>
    <title>Actividad 1</title>
</head>
<body>
<div>
    <?php
        if($flag){
    ?>
        <div class="mensaje">
            <h1>Debe llenar todos los datos&#10071&#10071</h1>
            <button class="boton" type="submit" onClick="document.location.href='home.php'"> Volver</button>
        </div>
    <?php }else{ ?>
    <h1>&#128203 Resultados:</h1>
    <div class="resultados">
        <label for="empleadosFemeninoId">&#128204 Total de empleados del genero femenino: <?php echo $femenino?></label> <br><br>
        <label for="empleadosCasadoId">&#128204 Total de hombres casados que ganan mas de 2500 Bs: <?php echo $casado?></label> <br><br>
        <label for="empleadosViudaId"> &#128204 Total de mujeres viudas que ganan mas de 1000 Bs: <?php echo $viudo?></label> <br><br>
        <label for="edadPromedioHombre"> &#128204 Edad promedio de los hombres: <?php echo round($promedio)?></label> <br><br>
        <button class="boton" type="submit" onClick="document.location.href='home.php'"> Volver</button>
    </div>
    <?php
        }
    ?>
</div>
</body>
</html>
