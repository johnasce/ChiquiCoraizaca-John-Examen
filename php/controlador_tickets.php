<?php
session_start();
include "../config/conexionDB.php";

    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null; 
    $fecha_ing = isset($_POST["fecha_ing"]) ? trim($_POST["fecha_ing"]): null; 
    
    $placas = isset($_POST["placas"]) ? mb_strtoupper(trim($_POST["placas"]), 'UTF-8') : null; 
    $marca = isset($_POST["marca"]) ? mb_strtoupper(trim($_POST["marca"]), 'UTF-8') : null; 
    $modelo = isset($_POST["modelo"]) ? mb_strtoupper(trim($_POST["modelo"]), 'UTF-8') : null; 
    
    $sql_cli = "SELECT usu_codigo FROM cliente WHERE usu_cedula='$cedula'";
    // $sql_cli = "SELECT usu_codigo FROM cliente WHERE usu_cedula='0104964801'";
    
    // if($conn->query($sql_cli) === TRUE){
        $resul = $conn->query($sql_cli);
        // if($resul -> num_rows > 0){
            $sql_veh = "INSERT INTO vehiculo (v_codigo, v_placa, v_marca, v_modelo) VALUES (0, '$placas', '$marca', '$modelo')";
            // $sql_veh = "INSERT INTO vehiculo (v_codigo, v_placa, v_marca, v_modelo) VALUES (0, 'ABC-001', 'HYUNDAI', 'TUCSON')";
            
            $conn->query($sql_veh);
            $row = $resul->fetch_assoc();
            echo "<p>" .$row['usu_codigo']. "</p>";

            $sql_tick = "INSERT INTO ticket (numero, fecha_ingreso, fecha_salida) VALUES (0, '$fecha_ing', null)";
            $conn->query($sql_tick);

            $sql_tick1 = "SELECT numero FROM  ticket";
            $resul2 = $conn->query($sql_tick1);
            $row1 = $resul2->fetch_assoc();

            $sql_veh1 = "SELECT v_codigo FROM  vehiculo";
            $resul3 = $conn->query($sql_veh1);
            $row2 = $resul3->fetch_assoc();


            $row = $resul->fetch_assoc();
            $sql_comb = "INSERT INTO cli_tic_veh (cl_ti_ve_codigo, usu_codigo, numero, v_codigo) VALUES (0, $row[usu_codigo], $row1[numero], $row2[v_codigo])";
            $conn->query($sql_comb);
    //     }
    // }

    

    //cerrar la base de datos 
    $conn->close(); 


?>