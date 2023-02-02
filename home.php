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
    <h1>Ingrese los datos a los siguientes 5 Empleados: &#128590</h1>
    <form action="index.php" method="post" >
        <?php
            $amount = 1;
            for($i=0;$i<$amount;$i++){
            echo"&#128590 Empleado ".$i+1;
        ?>
            <div>
                <br>
                <label class="title" for="nombreid"> &#128204 Nombre y Apellido:</label> <br>
                <input type="text" name="nombre<?php echo $i?>" id="nombreid" require="" pattern="[a-z A-Z]+" oninvalid="this.setCustomValidity('Solo puedes ingresar letras')"
                oninput="this.setCustomValidity('')" ><br><br>
            
                <label class="title" for="edadid">&#128204 Edad:</label> <br>
                <input type="number" name="edad<?php echo $i?>" id="edadid"><br><br><br>
        
                <label class="title" for="estadoid">&#128204 Estado Civil:</label> <br>
                <input type="radio" id="solteroid" name="estado<?php echo $i?>" value="soltero">
                <label for="soltero">Soltero(a)</label>
    
                <input type="radio" id="casadoid" name="estado<?php echo $i?>" value="casado">
                <label for="casado">Casado(a)</label>
             
                <input type="radio" id="viudoid" name="estado<?php echo $i?>" value="viudo">
                <label for="viudo">Viudo(a)</label>

                <br><br>
                
                <label class="title" for="generoid">&#128204 Genero:</label> <br>
                <input type="radio" id="femeninoid" name="genero<?php echo $i?>" value="femenino">
                <label for="femenino">Femenino</label>
        
                <input type="radio" id="masculinoid" name="genero<?php echo $i?>" value="masculino">
                <label for="masculino">Masculino</label>
              
                <br><br>
            
                <label class="title" for="sueldo">&#128204 Sueldo:</label> <br>
                <input type="radio" id="menosid" name="sueldo<?php echo $i?>" value="menos">
                <label for="menos">Menos de 1000 Bs</label>
            
                <input type="radio" id="entreid" name="sueldo<?php echo $i?>" value="entre">
                <label for="entre">Entre 1000 y 2500 Bs</label>
            
                <input type="radio" id="masid" name="sueldo<?php echo $i?>" value="mas">
                <label for="mas">Mas de 2500 Bs</label>
            
            </div>
            <br><br>
            <hr class="line"><br>
        <?php
            }
        ?>
        <button class="boton" name="btn" value="Enviar" type="submit"> Enviar</button>
        <input class="boton" type="reset" name="btn" value="Limpiar">
        <br><br>
</form>
</body>
</html>