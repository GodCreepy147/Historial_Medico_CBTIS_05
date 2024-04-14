<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial medico</title>

    <!--Estilo de la pagína.-->
    <link rel="stylesheet" href="./css/morado.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--Icono de la pagína.-->
    <link rel="shortcut icon" href="./img/images.png" type="image/x-icon">

    <?php
    $Num_control_a = (isset($_POST['ndc']))?$_POST['ndc']:"";
    $Generacion = (isset($_POST['gen']))?$_POST['gen']:"";
    $Nombre = (isset($_POST['nom']))?$_POST['nom']:"";
    $Ape_paterno_a = (isset($_POST['app']))?$_POST['app']:"";
    $Ape_materno_a = (isset($_POST['apm']))?$_POST['apm']:"";
    $edad_alu = (isset($_POST['eda']))?$_POST['eda']:"";
    $Fecha = (isset($_POST['fdn']))?$_POST['fdn']:"";
    $Sexo = (isset($_POST['sex']))?$_POST['sex']:"";
    $Domicilio = (isset($_POST['dom']))?$_POST['dom']:"";
    $Municipio = (isset($_POST['mun']))?$_POST['mun']:"";
    $CP = (isset($_POST['cp']))?$_POST['cp']:"";
    $Telefono_1 = (isset($_POST['ncl1']))?$_POST['ncl1']:"";
    $Telefono_2 = (isset($_POST['ncl2']))?$_POST['ncl2']:"";
    $Semestre = (isset($_POST['sem']))?$_POST['sem']:"";
    $Grupo = (isset($_POST['gru']))?$_POST['gru']:"";
    $Especialidad = (isset($_POST['esp']))?$_POST['esp']:"";
    $Institucion = (isset($_POST['ins']))?$_POST['ins']:"";
    $Nom_emergencia = (isset($_POST['nea']))?$_POST['nea']:"";
    $Dom_emergencia = (isset($_POST['dem']))?$_POST['dem']:"";
    $Tel_emergencia = (isset($_POST['tel']))?$_POST['tel']:"";
    $imagens = (isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
    
    
    $Num_control_v = (isset($_POST['ndc']))?$_POST['ndc']:"";
    $Hepatitis = (isset($_POST['hep']))?$_POST['hep']:"";
    $Sarampion = (isset($_POST['sar']))?$_POST['sar']:"";
    $Rubeola = (isset($_POST['rub']))?$_POST['rub']:"";
    $Influenza = (isset($_POST['inf']))?$_POST['inf']:"";
    $Neumococo = (isset($_POST['neu']))?$_POST['neu']:"";
    $Tetanos = (isset($_POST['tet']))?$_POST['tet']:"";
    $Covid = (isset($_POST['cov']))?$_POST['cov']:"";
    $Otras = (isset($_POST['otr']))?$_POST['otr']:"";
    
    
    
    $Num_control_e = (isset($_POST['ndc']))?$_POST['ndc']:"";
    $Asma_e = (isset($_POST['asm']))?$_POST['asm']:"";
    $Enfe_corazon_e = (isset($_POST['edc']))?$_POST['edc']:"";
    $Presion_arterial_alta_e = (isset($_POST['paa']))?$_POST['paa']:"";
    $Presion_arterial_baja_e = (isset($_POST['pab']))?$_POST['pab']:"";
    $Enfe_rinones_e = (isset($_POST['eer']))?$_POST['eer']:"";
    $Migrana_e = (isset($_POST['mig']))?$_POST['mig']:"";
    $Diabetes_e = (isset($_POST['dia']))?$_POST['dia']:"";
    $Enfe_vesicula_biliar_e = (isset($_POST['evb']))?$_POST['evb']:"";
    $Enfe_pancreas_e = (isset($_POST['edp']))?$_POST['edp']:"";
    $Enfe_intestino_e = (isset($_POST['edi']))?$_POST['edi']:"";
    $Hepatitis_e = (isset($_POST['hep2']))?$_POST['hep2']:"";
    $Gastritis_e = (isset($_POST['gas']))?$_POST['gas']:"";
    $Enfe_pulmones_e = (isset($_POST['elp']))?$_POST['elp']:"";
    $Convulsiones_e = (isset($_POST['con']))?$_POST['con']:"";
    $Fracturas_e = (isset($_POST['fra']))?$_POST['fra']:"";
    $Enfe_tiroides_e = (isset($_POST['edt']))?$_POST['edt']:"";
    $Bronquitis_e = (isset($_POST['bro']))?$_POST['bro']:"";
    $Tumores_e = (isset($_POST['tum']))?$_POST['tum']:"";
    $Anemia_e = (isset($_POST['ane']))?$_POST['ane']:"";
    $Diarrea_frecuente_e = (isset($_POST['dif']))?$_POST['dif']:"";
    $Obresidad_sobrepeso_e = (isset($_POST['obe']))?$_POST['obe']:"";
    $Tos_cronica_e = (isset($_POST['tos']))?$_POST['tos']:"";
    $Hipoacucia_dificiloir_e = (isset($_POST['hip']))?$_POST['hip']:"";
    $Colitis_e = (isset($_POST['col']))?$_POST['col']:"";
    $Operado_e = (isset($_POST['lho']))?$_POST['lho']:"";
    $tipo_operacion = (isset($_POST['dqt']))?$_POST['dqt']:"";
    $Discapacidad_e = (isset($_POST['tad']))?$_POST['tad']:"";
    $tipo_discapacidad = (isset($_POST['tad']))?$_POST['tad']:"";
    $Uso_lentes_e = (isset($_POST['usl']))?$_POST['usl']:"";
    $tipo_problema_vizta = (isset($_POST['tpv']))?$_POST['tpv']:"";
    $Alergia_e = (isset($_POST['taa']))?$_POST['taa']:"";
    $tipo_alergia = (isset($_POST['aqe']))?$_POST['aqe']:"";
    $Tipo_sangre_e = (isset($_POST['tds']))?$_POST['tds']:"";
    $Enfe_padecida_actual_e = (isset($_POST['eea']))?$_POST['eea']:"";
    $Tratamiento_e = (isset($_POST['eet']))?$_POST['eet']:"";
    
    
    
    
    $Num_control_ase = (isset($_POST['ndc']))?$_POST['ndc']:"";
    $Bano_diario_ase = (isset($_POST['bdo']))?$_POST['bdo']:"";
    $Lavar_manos_ase = (isset($_POST['llm']))?$_POST['llm']:"";
    $Cambio_ropadiario_ase = (isset($_POST['crd']))?$_POST['crd']:"";
    
    
    
    $Num_control_estu = (isset($_POST['ndc']))?$_POST['ndc']:"";
    $Desayuno_estu = (isset($_POST['desa']))?$_POST['desa']:"";
    $Comida_estu = (isset($_POST['comi']))?$_POST['comi']:"";
    $Cena_estu = (isset($_POST['cena']))?$_POST['cena']:"";
    $Dieta_estu = (isset($_POST['ladi']))?$_POST['ladi']:"";
    $indicada = (isset($_POST['ipam']))?$_POST['ipam']:"";
    $consiste = (isset($_POST['eqco']))?$_POST['eqco']:"";
    
    
    
    $Num_control_vi = (isset($_POST['ndc']))?$_POST['ndc']:"";
    $No_cuartos_vi = (isset($_POST['ndcu']))?$_POST['ndcu']:"";
    $Vives_papas_vi = (isset($_POST['vctp']))?$_POST['vctp']:"";
    $porque = (isset($_POST['niep']))?$_POST['niep']:"";
    $No_intefamilia_vi = (isset($_POST['nilf']))?$_POST['nilf']:"";
    $Agua_potable_vi = (isset($_POST['ap']))?$_POST['ap']:"";
    
    
    
    
    $Num_control_pa = (isset($_POST['ndc']))?$_POST['ndc']:"";
    $Nom_pa = (isset($_POST['ndpe']))?$_POST['ndpe']:"";
    $edad_pa = (isset($_POST['edpe']))?$_POST['edpe']:"";
    $Ocupacion_pa = (isset($_POST['ocpe']))?$_POST['ocpe']:"";
    $Viven_juntos_pa = (isset($_POST['viju']))?$_POST['viju']:"";
    $Domicilio_pa = (isset($_POST['domi']))?$_POST['domi']:"";
    $telefono = (isset($_POST['tele']))?$_POST['tele']:"";
    $Localidad_pa = (isset($_POST['loca']))?$_POST['loca']:"";
    $municipio = (isset($_POST['muni']))?$_POST['muni']:"";
    $Otros_datos_pa = (isset($_POST['odre']))?$_POST['odre']:"";
    $Nom_ma = (isset($_POST['ndlm']))?$_POST['ndlm']:"";
    $edad_ma = (isset($_POST['edma']))?$_POST['edma']:"";
    $Ocupacion_ma = (isset($_POST['ocma']))?$_POST['ocma']:"";
    
    
    
    $Num_control_enfp = (isset($_POST['ndc']))?$_POST['ndc']:"";
    $Enfe_corazon_p = (isset($_POST['edcp']))?$_POST['edcp']:"";
    $Presion_arterial_altap = (isset($_POST['paap']))?$_POST['paap']:"";
    $Diabetes = (isset($_POST['diap']))?$_POST['diap']:"";
    $Cal_rinones = (isset($_POST['cerp']))?$_POST['cerp']:"";
    $Artritis = (isset($_POST['artp']))?$_POST['artp']:"";
    $Enfe_mentales = (isset($_POST['emep']))?$_POST['emep']:"";
    $Tuberculosis = (isset($_POST['tubp']))?$_POST['tubp']:"";
    $Enfe_pancreas_p = (isset($_POST['edpp']))?$_POST['edpp']:"";
    $Tos_cronica_p = (isset($_POST['tosp']))?$_POST['tosp']:"";
    $Diarrea_frecuente_p = (isset($_POST['difp']))?$_POST['difp']:"";
    $Hepatitis_p = (isset($_POST['hepp']))?$_POST['hepp']:"";
    $Obesidad_sobrepeso_p = (isset($_POST['obep']))?$_POST['obep']:"";
    $Anemia  = (isset($_POST['anep']))?$_POST['anep']:"";
    $Asma_p = (isset($_POST['asmp']))?$_POST['asmp']:"";
    $Enfe_pulmones_p = (isset($_POST['elpp']))?$_POST['elpp']:"";
    $Enfe_rinones_p = (isset($_POST['elrp']))?$_POST['elrp']:"";
    $Convulsiones_p = (isset($_POST['conp']))?$_POST['conp']:"";
    $Enfe_pro_p = (isset($_POST['edpp']))?$_POST['edpp']:"";
    $Calculos_vesicula_p = (isset($_POST['cvbp']))?$_POST['cvbp']:"";
    $Enfe_intestinos_p = (isset($_POST['edip']))?$_POST['edip']:"";
    $Migrana_p = (isset($_POST['migp']))?$_POST['migp']:"";
    $Enfe_tiroides_p = (isset($_POST['edtp']))?$_POST['edtp']:"";
    $Bronquitis_p = (isset($_POST['brop']))?$_POST['brop']:"";
    $Tumores_p = (isset($_POST['tump']))?$_POST['tump']:"";
    $Alergia_p = (isset($_POST['alep']))?$_POST['alep']:"";
    $Fracturas_p = (isset($_POST['frap']))?$_POST['frap']:"";
    $Operaciones_p = (isset($_POST['qohr']))?$_POST['qohr']:"";
    $Verbien_p = (isset($_POST['vbip']))?$_POST['vbip']:"";
    $problema_p = (isset($_POST['qptp']))?$_POST['qptp']:"";
    $tratamiento_p = (isset($_POST['tatp']))?$_POST['tatp']:"";
    $Toma_vino_p = (isset($_POST['tvip']))?$_POST['tvip']:"";
    $Fuma_p = (isset($_POST['fuma']))?$_POST['fuma']:"";
    
    
    $accion = (isset($_POST['accion']))?$_POST['accion']:"";
    
    
    //BASE DE DATOS.
    $host = "localhost";
    $bd = "jacyl";
    $usuario = "root";
    $password = "";
    
    try {
       
       $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $password);
    
    } catch ( Exception $ex ) {
    
       echo $ex->getMessage();
    
    }
    
    
    switch ($accion){
    
    
       case "Agregar":
    
    
          //PRIMER REGISTRO <
          $sentenciaSQL = $conexion->prepare("INSERT INTO alumnos (Num_control_a, Generacion, Nombre, Ape_paterno_a, Ape_materno_a, Fecha, Sexo, Domicilio, Municipio, CP, Telefono_1, Telefono_2, Semestre, Grupo, Especialidad, Institucion, Nom_emergencia, Dom_emergencia, Tel_emergencia, imagen) values (:Num_control_a, :Generacion, :Nombre, :Ape_paterno_a, :Ape_materno_a, :Fecha, :Sexo, :Domicilio, :Municipio, :CP, :Telefono_1, :Telefono_2, :Semestre, :Grupo, :Especialidad,:Institucion, :Nom_emergencia, :Dom_emergencia, :Tel_emergencia, :imagen);");
          $sentenciaSQL->bindParam(':Num_control_a', $Num_control_a );
          $sentenciaSQL->bindParam(':Generacion', $Generacion );
          $sentenciaSQL->bindParam(':Nombre', $Nombre );
          $sentenciaSQL->bindParam(':Ape_paterno_a', $Ape_paterno_a );
          $sentenciaSQL->bindParam(':Ape_materno_a', $Ape_materno_a );
          $sentenciaSQL->bindParam(':Fecha', $Fecha );
          $sentenciaSQL->bindParam(':Sexo', $Sexo );
          $sentenciaSQL->bindParam(':Domicilio', $Domicilio );
          $sentenciaSQL->bindParam(':Municipio', $Municipio );
          $sentenciaSQL->bindParam(':CP', $CP );
          $sentenciaSQL->bindParam(':Telefono_1', $Telefono_1 );
          $sentenciaSQL->bindParam(':Telefono_2', $Telefono_2 );
          $sentenciaSQL->bindParam(':Semestre', $Semestre );
          $sentenciaSQL->bindParam(':Grupo', $Grupo );
          $sentenciaSQL->bindParam(':Especialidad', $Especialidad );
          $sentenciaSQL->bindParam(':Institucion', $Institucion );
          $sentenciaSQL->bindParam(':Nom_emergencia', $Nom_emergencia );
          $sentenciaSQL->bindParam(':Dom_emergencia', $Dom_emergencia );
          $sentenciaSQL->bindParam(':Tel_emergencia', $Tel_emergencia );
          
          $fecha = new DateTime();
          $nombreArchivo = ($imagens!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
    
          $tmpImagen = $_FILES["txtImagen"]["tmp_name"];
    
          if($tmpImagen!=""){
    
             move_uploaded_file($tmpImagen,"./img/".$nombreArchivo);
          }
    
          $sentenciaSQL->bindParam(':imagen', $nombreArchivo );
          $sentenciaSQL->execute();
          //FIN DE LA PRIMERA TABLA
    
          //SEGUNDO REGISTRO
          $sentenciaSQLA = $conexion->prepare("INSERT INTO vacunas(Num_control_v, Hepatitis, Sarampion, Rubeola, Influenza, Neumococo, Tetanos, Covid, Otras) values (:Num_control_v, :Hepatitis, :Sarampion, :Rubeola, :Influenza, :Neumococo, :Tetanos, :Covid, :Otras);");
          $sentenciaSQLA->bindParam(':Num_control_v', $Num_control_v );
          $sentenciaSQLA->bindParam(':Hepatitis', $Hepatitis );
          $sentenciaSQLA->bindParam(':Sarampion', $Sarampion );
          $sentenciaSQLA->bindParam(':Rubeola', $Rubeola );
          $sentenciaSQLA->bindParam(':Influenza', $Influenza );
          $sentenciaSQLA->bindParam(':Neumococo', $Neumococo );
          $sentenciaSQLA->bindParam(':Tetanos', $Tetanos );
          $sentenciaSQLA->bindParam(':Covid', $Covid );
          $sentenciaSQLA->bindParam(':Otras', $Otras );
          $sentenciaSQLA->execute();
          //FIN DEL SEGUNDO REGISTRO
    
          //TERCER REGISTRO
          $sentenciaSQLB = $conexion->prepare("INSERT INTO enfermedades_a(Num_control_e, Asma, Enfe_corazon, Presion_arterial_alta, Presion_arterial_baja, Enfe_rinones, Migrana, Diabetes, Enfe_vesicula_biliar, Enfe_pancreas, Enfe_intestino, Hepatitis, Gastritis, Enfe_pulmones, Convulsiones, Fracturas, Enfe_tiroides, Bronquitis, Tumores, Anemia, Diarrea_frecuente, Obresidad_sobrepeso, Tos_cronica, Hipoacucia_dificiloir, Colitis, Operado, Discapacidad, Uso_lentes, Alergia, Tipo_sangre, Enfe_padecida_actual, Tratamiento) values (:Num_control_e, :Asma, :Enfe_corazon, :Presion_arterial_alta, :Presion_arterial_baja, :Enfe_rinones, :Migrana, :Diabetes, :Enfe_vesicula_biliar, :Enfe_pancreas, :Enfe_intestino, :Hepatitis, :Gastritis, :Enfe_pulmones, :Convulsiones, :Fracturas, :Enfe_tiroides, :Bronquitis, :Tumores, :Anemia, :Diarrea_frecuente, :Obresidad_sobrepeso, :Tos_cronica, :Hipoacucia_dificiloir, :Colitis, :Operado, :Discapacidad, :Uso_lentes, :Alergia, :Tipo_sangre, :Enfe_padecida_actual, :Tratamiento);");
          $sentenciaSQLB->bindParam(':Num_control_e', $Num_control_e);
          $sentenciaSQLB->bindParam(':Asma', $Asma_e);
          $sentenciaSQLB->bindParam(':Enfe_corazon', $Enfe_corazon_e);
          $sentenciaSQLB->bindParam(':Presion_arterial_alta', $Presion_arterial_alta_e);
          $sentenciaSQLB->bindParam(':Presion_arterial_baja', $Presion_arterial_baja_e);
          $sentenciaSQLB->bindParam(':Enfe_rinones', $Enfe_rinones_e);
          $sentenciaSQLB->bindParam(':Migrana', $Migrana_e);
          $sentenciaSQLB->bindParam(':Diabetes', $Diabetes_e);
          $sentenciaSQLB->bindParam(':Enfe_vesicula_biliar', $Enfe_vesicula_biliar_e);
          $sentenciaSQLB->bindParam(':Enfe_pancreas', $Enfe_pancreas_e);
          $sentenciaSQLB->bindParam(':Enfe_intestino', $Enfe_intestino_e);
          $sentenciaSQLB->bindParam(':Hepatitis', $Hepatitis_e);
          $sentenciaSQLB->bindParam(':Gastritis', $Gastritis_e);
          $sentenciaSQLB->bindParam(':Enfe_pulmones', $Enfe_pulmones_e);
          $sentenciaSQLB->bindParam(':Convulsiones', $Convulsiones_e);
          $sentenciaSQLB->bindParam(':Fracturas', $Fracturas_e);
          $sentenciaSQLB->bindParam(':Enfe_tiroides', $Enfe_tiroides_e);
          $sentenciaSQLB->bindParam(':Bronquitis', $Bronquitis_e);
          $sentenciaSQLB->bindParam(':Tumores', $Tumores_e);
          $sentenciaSQLB->bindParam(':Anemia', $Anemia_e);
          $sentenciaSQLB->bindParam(':Diarrea_frecuente', $Diarrea_frecuente_e);
          $sentenciaSQLB->bindParam(':Obresidad_sobrepeso', $Obresidad_sobrepeso_e);
          $sentenciaSQLB->bindParam(':Tos_cronica', $Tos_cronica_e);
          $sentenciaSQLB->bindParam(':Hipoacucia_dificiloir', $Hipoacucia_dificiloir_e);
          $sentenciaSQLB->bindParam(':Colitis', $Colitis_e);
          $sentenciaSQLB->bindParam(':Operado', $Operado_e);
          $sentenciaSQLB->bindParam(':Discapacidad', $Discapacidad_e);
          $sentenciaSQLB->bindParam(':Uso_lentes', $Uso_lentes_e);
          $sentenciaSQLB->bindParam(':Alergia', $Alergia_e);
          $sentenciaSQLB->bindParam(':Tipo_sangre', $Tipo_sangre_e);
          $sentenciaSQLB->bindParam(':Enfe_padecida_actual', $Enfe_padecida_actual_e);
          $sentenciaSQLB->bindParam(':Tratamiento', $Tratamiento_e);
          $sentenciaSQLB->execute();
          //FIN DEL TERCER REGISTRO
    
    
    
          //CUARTO REGISTRO
          $sentenciaSQLC = $conexion->prepare("INSERT INTO aseo_personal(Num_control_ase, Bano_diario, Lavar_manos, Cambio_ropadiario) values (:Num_control_ase, :Bano_diario, :Lavar_manos, :Cambio_ropadiario);");
          $sentenciaSQLC->bindParam(':Num_control_ase', $Num_control_ase );
          $sentenciaSQLC->bindParam(':Bano_diario', $Bano_diario_ase );
          $sentenciaSQLC->bindParam(':Lavar_manos', $Lavar_manos_ase );
          $sentenciaSQLC->bindParam(':Cambio_ropadiario', $Cambio_ropadiario_ase );
          $sentenciaSQLC->execute();
          //FIN DEL CUARTO REGISTRO
    
    
    
          //QUINTO REGISTRO
          $sentenciaSQLD = $conexion->prepare("INSERT INTO antecedentes_estudiantes(Num_control_estu, Desayuno, Comida, Cena, Dieta) values (:Num_control_estu, :Desayuno, :Comida, :Cena, :Dieta);");
          $sentenciaSQLD->bindParam(':Num_control_estu', $Num_control_estu );
          $sentenciaSQLD->bindParam(':Desayuno', $Desayuno_estu );
          $sentenciaSQLD->bindParam(':Comida', $Comida_estu );
          $sentenciaSQLD->bindParam(':Cena', $Cena_estu );
          $sentenciaSQLD->bindParam(':Dieta', $Dieta_estu );
          $sentenciaSQLD->execute();
          //FIN DEL QUINTO REGISTRO
    
          //SEXTO REGISTRO
          $sentenciaSQLE = $conexion->prepare("INSERT INTO vivienda(Num_control_vi, No_cuartos, Vives_papas, No_intefamilia, Agua_potable) values (:Num_control_vi, :No_cuartos, :Vives_papas, :No_intefamilia, :Agua_potable);");
          $sentenciaSQLE->bindParam(':Num_control_vi', $Num_control_vi );
          $sentenciaSQLE->bindParam(':No_cuartos', $No_cuartos_vi );
          $sentenciaSQLE->bindParam(':Vives_papas', $Vives_papas_vi );
          $sentenciaSQLE->bindParam(':No_intefamilia', $No_intefamilia_vi );
          $sentenciaSQLE->bindParam(':Agua_potable', $Agua_potable_vi );
          $sentenciaSQLE->execute();
          //FIN DEL SEXTO REGISTRO
    
    
          //SEPTIMO REGISTRO
          $sentenciaSQLF = $conexion->prepare("INSERT INTO papas(Num_control_pa, Nom_pa, edad_pa, Ocupacion_pa, Viven_juntos, Domicilio_pa, Localidad_pa, Otros_datos, Nom_ma, edad_ma, Ocupacion_ma) values (:Num_control_pa, :Nom_pa, :edad_pa, :Ocupacion_pa, :Viven_juntos, :Domicilio_pa, :Localidad_pa, :Otros_datos, :Nom_ma, :edad_ma, :Ocupacion_ma);");
          $sentenciaSQLF->bindParam(':Num_control_pa', $Num_control_pa );
          $sentenciaSQLF->bindParam(':Nom_pa', $Nom_pa );
          $sentenciaSQLF->bindParam(':edad_pa', $edad_pa );
          $sentenciaSQLF->bindParam(':Ocupacion_pa', $Ocupacion_pa );
          $sentenciaSQLF->bindParam(':Viven_juntos', $Viven_juntos_pa );
          $sentenciaSQLF->bindParam(':Domicilio_pa', $Domicilio_pa );
          $sentenciaSQLF->bindParam(':Localidad_pa', $Localidad_pa );
          $sentenciaSQLF->bindParam(':Otros_datos', $Otros_datos_pa );
          $sentenciaSQLF->bindParam(':Nom_ma', $Nom_ma );
          $sentenciaSQLF->bindParam(':edad_ma', $edad_ma );
          $sentenciaSQLF->bindParam(':Ocupacion_ma', $Ocupacion_ma );
          $sentenciaSQLF->execute();
          //FIN DEL SEPTIMO REGISTRO
    
    
          //OCTAVO REGISTRO
          $sentenciaSQLG = $conexion->prepare("INSERT INTO enfermedades_papas(Num_control_enfp, Enfe_corazon_p, Presion_arterial_altap, Diabetes, Cal_rinones, Artritis, Enfe_mentales, Tuberculosis, Enfe_pancreas_p, Tos_cronica_p, Diarrea_frecuente_p, Hepatitis_p, Obesidad_sobrepeso_p, Asma_p, Enfe_pulmones_p, Enfe_rinones_p, Convulsiones_p, Enfe_pro_p, Calculos_vesicula_p, Enfe_intestinos_p, Migrana_p, Enfe_tiroides_p, Bronquitis_p, Tumores_p, Alergia_p, Fracturas_p, Operaciones_p, Verbien_p, Toma_vino_p, Fuma_p) values (:Num_control_enfp, :Enfe_corazon_p, :Presion_arterial_altap, :Diabetes, :Cal_rinones, :Artritis, :Enfe_mentales, :Tuberculosis, :Enfe_pancreas_p, :Tos_cronica_p, :Diarrea_frecuente_p, :Hepatitis_p, :Obesidad_sobrepeso_p, :Asma_p, :Enfe_pulmones_p, :Enfe_rinones_p, :Convulsiones_p, :Enfe_pro_p, :Calculos_vesicula_p, :Enfe_intestinos_p, :Migrana_p, :Enfe_tiroides_p, :Bronquitis_p, :Tumores_p, :Alergia_p, :Fracturas_p, :Operaciones_p, :Verbien_p, :Toma_vino_p, :Fuma_p);");
          $sentenciaSQLG->bindParam(':Num_control_enfp', $Num_control_enfp );
          $sentenciaSQLG->bindParam(':Enfe_corazon_p', $Enfe_corazon_p );
          $sentenciaSQLG->bindParam(':Presion_arterial_altap', $Presion_arterial_altap );
          $sentenciaSQLG->bindParam(':Diabetes', $Diabetes );
          $sentenciaSQLG->bindParam(':Cal_rinones', $Cal_rinones );
          $sentenciaSQLG->bindParam(':Artritis', $Artritis );
          $sentenciaSQLG->bindParam(':Enfe_mentales', $Enfe_mentales );
          $sentenciaSQLG->bindParam(':Tuberculosis', $Tuberculosis );
          $sentenciaSQLG->bindParam(':Enfe_pancreas_p', $Enfe_pancreas_p );
          $sentenciaSQLG->bindParam(':Tos_cronica_p', $Tos_cronica_p );
          $sentenciaSQLG->bindParam(':Diarrea_frecuente_p', $Diarrea_frecuente_p );
          $sentenciaSQLG->bindParam(':Hepatitis_p', $Hepatitis_p );
          $sentenciaSQLG->bindParam(':Obesidad_sobrepeso_p', $Obesidad_sobrepeso_p );
          $sentenciaSQLG->bindParam(':Asma_p', $Asma_p );
          $sentenciaSQLG->bindParam(':Enfe_pulmones_p', $Enfe_pulmones_p );
          $sentenciaSQLG->bindParam(':Enfe_rinones_p', $Enfe_rinones_p );
          $sentenciaSQLG->bindParam(':Convulsiones_p', $Convulsiones_p );
          $sentenciaSQLG->bindParam(':Enfe_pro_p', $Enfe_pro_p );
          $sentenciaSQLG->bindParam(':Calculos_vesicula_p', $Calculos_vesicula_p );
          $sentenciaSQLG->bindParam(':Enfe_intestinos_p', $Enfe_intestinos_p );
          $sentenciaSQLG->bindParam(':Migrana_p', $Migrana_p );
          $sentenciaSQLG->bindParam(':Enfe_tiroides_p', $Enfe_tiroides_p );
          $sentenciaSQLG->bindParam(':Bronquitis_p', $Bronquitis_p );
          $sentenciaSQLG->bindParam(':Tumores_p', $Tumores_p );
          $sentenciaSQLG->bindParam(':Alergia_p', $Alergia_p );
          $sentenciaSQLG->bindParam(':Fracturas_p', $Fracturas_p );
          $sentenciaSQLG->bindParam(':Operaciones_p', $Operaciones_p );
          $sentenciaSQLG->bindParam(':Verbien_p', $Verbien_p );
          $sentenciaSQLG->bindParam(':Toma_vino_p', $Toma_vino_p );
          $sentenciaSQLG->bindParam(':Fuma_p', $Fuma_p );
          $sentenciaSQLG->execute();
          //FIN DEL OCTAVO REGISTRO

          header("Location:creditos.php");
    
          break;
    
    }
    ?>

    </head>
<body>

<form class="needs-validation" novalidate method="POST" enctype="multipart/form-data">


<div class="col-md-12">

<!--Encabezado de la pagina.-->
<div class="tit">
    <br>
    <h1>Historial medico</h1>
    <br>
</div>

<!--Extras de la pagina.-->
<div class="dat">
    <br>
    <p>
        Este es un requisito de parte de la cbtis 5 <br>
        para tener conocimiento de su estado actual en <br>
        custión a su salud.
    </p>
    <br>
</div>

<!--Formularios-->

<div class="card">
<h3 class="sub">
        Datos del estudiante
    </h3>
    <div class="card-body">

    <form method="POST" enctype="multipart/form-data">

        <div class = "form-group">
           <label for="gen">Generación:</label>
           <input type="text" required class="form-control" id="gen" name="gen">
        </div>

        <div class = "form-group">
           <label for="ndc">Numero de control:</label>
           <input type="text" required class="form-control" id="ndc" name="ndc">
        </div>
        <div class = "form-group">
           <label for="nom">Nombre:</label>
           <input type="text" required class="form-control" id="nom" name="nom">
        </div>
        <div class = "form-group">
           <label for="app">Apellido paterno:</label>
           <input type="text" required class="form-control" id="app" name="app">
        </div>
        <div class = "form-group">
           <label for="apm">Apellido materno:</label>
           <input type="text" required class="form-control" id="apm" name="apm">
        </div>
        <div class = "form-group">
           <label for="eda">Edad:</label>
           <input type="text" required class="form-control" id="eda" name="eda">
        </div>
        <div class = "form-group">
           <label for="fdn">Fecha de nacimiento:</label>
           <input type="date" required class="form-control" id="fdn" name="fdn">
        </div>
        <div class = "form-group">
           <label for="sex">Sexo:</label>
           <input type="text" required class="form-control" id="sex" name="sex">
        </div>
        <div class = "form-group">
           <label for="dom">Domicilio:</label>
           <input type="text" required class="form-control" id="dom" name="dom">
        </div>
        <div class = "form-group">
           <label for="mun">Municipio:</label>
           <input type="text" required class="form-control" id="mun" name="mun">
        </div>
        <div class = "form-group">
           <label for="cp">Codigo postal:</label>
           <input type="text" required class="form-control" id="cp" name="cp">
        </div>
        <div class = "form-group">
           <label for="ncl1">Numero de celular 1:</label>
           <input type="text" required class="form-control" id="ncl1" name="ncl1">
        </div>
        <div class = "form-group">
           <label for="ncl2">Numero de celular 2:</label>
           <input type="text" required class="form-control" id="ncl2" name="ncl2">
        </div>
        <div class = "form-group">
           <label for="esp">Especialidad:</label>
           <input type="text" required class="form-control" id="esp" name="esp">
        </div>
        <div class = "form-group">
           <label for="sem">Semestre:</label>
           <input type="text" required class="form-control" id="sem" name="sem">
        </div>
        <div class = "form-group">
           <label for="gru">Grupo:</label>
           <input type="text" required class="form-control" id="gru" name="gru">
        </div>
        <div class = "form-group">
           <label for="ins">Que institucion te brinda el servicio:</label>
           <select required class="form-control" id="ins" name="ins">
            <option value="ISSTE">ISSTE</option>
            <option value="IMSS">IMSS</option>
            <option value="PEMEX">PEMEX</option>
            <option value="MINERA">MINERA</option>
            <option value="HOSPITAL">HOSPITAL</option>
            <option value="NINGUNA">NINGUNA</option> 
            <option value="OTRA">OTRA</option>           
           </select>
        </div>
        <div class = "form-group">
           <label for="nea">En caso de algun problema llamar a:</label>
           <input type="text" required class="form-control" id="nea" name="nea">
        </div>
        <div class = "form-group">
           <label for="dem">Con domicilio en:</label>
           <input type="text" required class="form-control" id="dem" name="dem">
        </div>
        <div class = "form-group">
           <label for="tel">Telefono:</label>
           <input type="text" required class="form-control" id="tel" name="tel">
        </div>
        <div class = "form-group">
            <label for="txtImagen">Imagen:</label> <br/>
            <input type="file" class="form-control" id="txtImagen" name="txtImagen">
        </div>


        
    </div>




    <div class="card">
<h3 class="sub">
        Vacunas aplicadas al estudiante
    </h3>
    <div class="card-body">

    

        <div class = "form-group">
           <label for="hep">HEPATITIS:</label>
           <select required class="form-control" id="hep" name="hep">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="sar">SARAMPION:</label>
           <select required class="form-control" id="sar" name="sar">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="rub">RUBEOLA:</label>
           <select required class="form-control" id="rub" name="rub">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="inf">INFLUENZA:</label>
           <select required class="form-control" id="inf" name="inf">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="neu">NEUMOCOCO:</label>
           <select required class="form-control" id="neu" name="neu">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="tet">TETANOS:</label>
           <select required class="form-control" id="tet" name="tet">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="cov">COVID:</label>
           <select required class="form-control" id="cov" name="cov">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="otr">Otras especifique:</label>
           <input type="text" required class="form-control" id="otr" name="otr">
        </div>



    </div>




    <div class="card">
<h3 class="sub">
        Enfermedades patologicas que haya padecido el estudiante
    </h3>
    <div class="card-body">

    

        <div class = "form-group">
           <label for="asm">ASMA:</label>
           <select required class="form-control" id="asm" name="asm">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="edc">ENFERMEDADES DEL CORAZÓN:</label>
           <select required class="form-control" id="edc" name="edc">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="paa">PRESION ARTERIAL ALTA:</label>
           <select required class="form-control" id="paa" name="paa">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="pab">PRESION ARTERIAL BAJA:</label>
           <select required class="form-control" id="pab" name="pab">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="eer">ENFERMEDADES EN LOS RIÑONES:</label>
           <select required class="form-control" id="eer" name="eer">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="mig">MIGRAÑA:</label>
           <select required class="form-control" id="mig" name="mig">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="dia">DIABETES:</label>
           <select required class="form-control" id="dia" name="dia">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="evb">ENFERMEDADES DE VESICULA BILIAL:</label>
           <select required class="form-control" id="evb" name="evb">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="edp">ENFERMEDADES DEL PANCREAS:</label>
           <select required class="form-control" id="edp" name="edp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="edi">ENFERMEDADES DEL INTESTINO:</label>
           <select required class="form-control" id="edi" name="edi">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="hep2">HEPATITIS:</label>
           <select required class="form-control" id="hep2" name="hep2">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="gas">GASTRITIS:</label>
           <select required class="form-control" id="gas" name="gas">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="elp">ENFERMEDADES DE LOS PULMONES:</label>
           <select required class="form-control" id="elp" name="elp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="con">CONVULSIONES:</label>
           <select required class="form-control" id="con" name="con">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="fra">FRACTURAS:</label>
           <select required class="form-control" id="fra" name="fra">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="edt">ENFERMEDADES DE LA TIROIDES:</label>
           <select required class="form-control" id="edt" name="edt">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="bro">BRONQUITIS:</label>
           <select required class="form-control" id="bro" name="bro">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="tum">TUMORES:</label>
           <select required class="form-control" id="tum" name="tum">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="ane">ANEMIA:</label>
           <select required class="form-control" id="ane" name="ane">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="dif">DIARREA FRECUENTE:</label>
           <select required class="form-control" id="dif" name="dif">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="obe">OBESIDAD (SOBREPESO):</label>
           <select required class="form-control" id="obe" name="obe">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="tos">TOS CRONICA:</label>
           <select required class="form-control" id="tos" name="tos">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="hip">HIPOACUCIA:</label>
           <select required class="form-control" id="hip" name="hip">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="col">COLITIS:</label>
           <select required class="form-control" id="col" name="col">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="lho">Lo han operado alguna vez:</label>
           <select required class="form-control" id="lho" name="lho">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="dqt">De que te han operado:</label>
           <input type="text" required class="form-control" id="dqt" name="dqt">
        </div>
        <div class = "form-group">
           <label for="tad">Tiene alguna discapacidad:</label>
           <select required class="form-control" id="tad" name="tad">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="dtd">De tipo discapacidad:</label>
           <input type="text" required class="form-control" id="dtd" name="dtd">
        </div>
        <div class = "form-group">
           <label for="usl">Usa lentes:</label>
           <select required class="form-control" id="usl" name="usl">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="tpv">Tipo de problema en la vista:</label>
           <input type="text" required class="form-control" id="tpv" name="tpv">
        </div>
        <div class = "form-group">
           <label for="taa">Tienes alguna alergia:</label>
           <select required class="form-control" id="taa" name="taa">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="aqe">A que eres alergico:</label>
           <input type="text" required class="form-control" id="aqe" name="aqe">
        </div>
        <div class = "form-group">
           <label for="tds">Tipo de sangre:</label>
           <input type="text" required class="form-control" id="tds" name="tds">
        </div>
        <div class = "form-group">
           <label for="eea">Que enfermedad padeces actualmente:</label>
           <input type="text" required class="form-control" id="eea" name="eea">
        </div>
        <div class = "form-group">
           <label for="eet">Estas en tratamiento:</label>
           <input type="text" required class="form-control" id="eet" name="eet">
        </div>



    </div>





    <div class="card">
<h3 class="sub">
        Aseo personal
    </h3>
    <div class="card-body">

    

        <div class = "form-group">
           <label for="bdo">Baño diario:</label>
           <select required class="form-control" id="bdo" name="bdo">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="crd">Cambio de ropa diario:</label>
           <select required class="form-control" id="crd" name="crd">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="llm">Se lava las manos antes de comer y despues de ir al baño:</label>
           <select required class="form-control" id="llm" name="llm">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>



    </div>





    <div class="card">
<h3 class="sub">
        Antecedentes personales del estudiante
    </h3>
    <div class="card-body">

    

    <div class = "form-group">
           <label for="">Indique y especifique su alimentación:</label>
        </div>
    <div class = "form-group">
           <label for="desa">Desayuno:</label>
           <input type="text" required class="form-control" id="desa" name="desa">
        </div>
        <div class = "form-group">
           <label for="comi">Comida:</label>
           <input type="text" required class="form-control" id="comi" name="comi">
        </div>
        <div class = "form-group">
           <label for="cena">Cena:</label>
           <input type="text" required class="form-control" id="cena" name="cena">
        </div>
        <div class = "form-group">
           <label for="ladi">Llevas alguna dieta:</label>
           <select required class="form-control" id="ladi" name="ladi">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="ipam">Indicada por algun medico:</label>
           <select required class="form-control" id="ipam" name="ipam">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="eqco">En que consiste:</label>
           <input type="text" required class="form-control" id="eqco" name="eqco">
        </div>



    </div>




    <div class="card">
<h3 class="sub">
        Vivienda
    </h3>
    <div class="card-body">

    

    <div class = "form-group">
           <label for="">Numero de cuartos:</label>
           <input type="text" required class="form-control" id="ndcu" name="ndcu">
        </div>
        <div class = "form-group">
           <label for="nilf">Numero de integrantes en la familia:</label>
           <input type="text" required class="form-control" id="nilf" name="nilf">
        </div>
        <div class = "form-group">
           <label for="ap">Agua potable:</label>
           <select required class="form-control" id="ap" name="ap">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="vctp">Vives con tus papas:</label>
           <select required class="form-control" id="vctp" name="vctp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="niep">Si anotaste que no indique el porque:</label>
           <input type="text" class="form-control" id="niep" name="niep">
        </div>



    </div>



    <div class="card">
<h3 class="sub">
        Datos de los padres del estudiante
    </h3>
    <div class="card-body">

    

    <div class = "form-group">
           <label for="ndpe">Nombre del padre:</label>
           <input type="text" required class="form-control" id="ndpe" name="ndpe">
        </div>
        <div class = "form-group">
           <label for="edpe">Edad:</label>
           <input type="text" required class="form-control" id="edpe" name="edpe">
        </div>
        <div class = "form-group">
           <label for="ocpe">Ocupación:</label>
           <input type="text" required class="form-control" id="ocpe" name="ocpe">
        </div>
        <div class = "form-group">
           <label for="ndlm">Nombre de la madre:</label>
           <input type="text" required class="form-control" id="ndlm" name="ndlm">
        </div>
        <div class = "form-group">
           <label for="edma">Edad:</label>
           <input type="text" required class="form-control" id="edma" name="edma">
        </div>
        <div class = "form-group">
           <label for="ocma">Ocupación:</label>
           <input type="text" required class="form-control" id="ocma" name="ocma">
        </div>
        <div class = "form-group">
           <label for="viju">Tus padres estan:</label>
           <select required class="form-control" id="viju" name="viju">
            <option value="juntos">Juntos</option>
            <option value="separados">Separados</option>
            <option value="divorciados">Divorciados</option>
            <option value="otra">Otra pareja</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="domi">Domicilio:</label>
           <input type="text" required class="form-control" id="domi" name="domi">
        </div>
        <div class = "form-group">
           <label for="tele">Telefono:</label>
           <input type="text" required class="form-control" id="tele" name="tele">
        </div>
        <div class = "form-group">
           <label for="loca">Localidad:</label>
           <input type="text" required class="form-control" id="loca" name="loca">
        </div>
        <div class = "form-group">
           <label for="muni">Municipio:</label>
           <input type="text" required class="form-control" id="muni" name="muni">
        </div>
        <div class = "form-group">
           <label for="odre">Otros datos relevantes:</label>
           <input type="text" required class="form-control" id="odre" name="odre">
        </div>
        



    </div>




    <div class="card">
<h3 class="sub">
        Enfermedades patologicas que haya padecido los padres del estudiante
    </h3>
    <div class="card-body">

    

        <div class = "form-group">
           <label for="edcp">ENFERMEDADES DEL CORAZÓN:</label>
           <select required class="form-control" id="edcp" name="edcp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="paap">PRESION ARTERIAL ALTA:</label>
           <select required class="form-control" id="paap" name="paap">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="diap">DIABETES:</label>
           <select required class="form-control" id="diap" name="diap">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="cerp">CÁLCULOS EN LOS RIÑONES:</label>
           <select required class="form-control" id="cerp" name="cerp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="artp">ARTRITIS:</label>
           <select required class="form-control" id="artp" name="artp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="emep">ENFERMEDADES MENTALES:</label>
           <select required class="form-control" id="emep" name="emep">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="tubp">TUBERCULOSIS:</label>
           <select required class="form-control" id="tubp" name="tubp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="edpp">ENFERMEDADES DEL PANCREAS:</label>
           <select required class="form-control" id="edpp" name="edpp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="tosp">TOS CRONICA:</label>
           <select required class="form-control" id="tosp" name="tosp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="difp">DIARREA FRECUENTE:</label>
           <select required class="form-control" id="difp" name="difp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="hepp">HEPATITIS:</label>
           <select required class="form-control" id="hepp" name="hepp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="obep">OBESIDAD (SOBREPESO):</label>
           <select required class="form-control" id="obep" name="obep">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="anep">ANEMIA:</label>
           <select required class="form-control" id="anep" name="anep">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="asmp">ASMA:</label>
           <select required class="form-control" id="asmp" name="asmp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="elrp">ENFERMEDADES DE LOS RIÑONES:</label>
           <select required class="form-control" id="elrp" name="elrp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="elpp">ENFERMEDADES DE LOS PULMONES:</label>
           <select required class="form-control" id="elpp" name="elpp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="conp">CONVULCIONES:</label>
           <select required class="form-control" id="conp" name="conp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="edpp">ENFERMEDADES DE PROSTATA:</label>
           <select required class="form-control" id="edpp" name="edpp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="cvbp">CALCULOS EN VESICULA BILIAL:</label>
           <select required class="form-control" id="cvbp" name="cvbp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="edip">ENFERMEDADES DEL INTESTINO:</label>
           <select required class="form-control" id="edip" name="edip">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="migp">MIGRAÑA:</label>
           <select required class="form-control" id="migp" name="migp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="edtp">ENFERMEDADES DE LA TIROIDES:</label>
           <select required class="form-control" id="edtp" name="edtp">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="brop">BRONQUITIS:</label>
           <select required class="form-control" id="brop" name="brop">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="tump">TUMORES:</label>
           <select required class="form-control" id="tump" name="tump">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="alep">ALERGIAS:</label>
           <select required class="form-control" id="alep" name="alep">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="frap">FRACTURAS:</label>
           <select required class="form-control" id="frap" name="frap">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="qohr">Que operación le han realizado:</label>
           <input type="text" required class="form-control" id="qohr" name="qohr">
        </div>
        <div class = "form-group">
           <label for="vbip">Ve bien:</label>
           <select required class="form-control" id="vbip" name="vbip">
            <option value="no">NO</option>
            <option value="si">SI</option>
           </select>
        </div>
        <div class = "form-group">
           <label for="qptp">Que problema tiene:</label>
           <input type="text" required class="form-control" id="qptp" name="qptp">
        </div>
        <div class = "form-group">
           <label for="tatp">Tiene algun tratamiento:</label>
           <input type="text" required class="form-control" id="tatp" name="tatp">
        </div>
        <div class = "form-group">
           <label for="tvip">Toma vino (que tan frecuente):</label>
           <input type="text" required class="form-control" id="tvip" name="tvip">
        </div>
        <div class = "form-group">
           <label for="fuma">Fuma (cuantos cigarrillos consume al dia):</label>
           <input type="text" required class="form-control" id="fuma" name="fuma">
        </div>



    </div>







<br>
<br>


    <div class="btn-group" role="group" aria-label="">
            <button type="submit" name="accion" value="Agregar" class="btn btn-success">Subir historial</button>
        </div>
        <br>


</form>

</body>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</html>

