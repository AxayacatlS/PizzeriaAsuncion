<?php
    session_start();
    //require conexion.php;
    $dbhost="us-cdbr-east-02.cleardb.com";
    $dbuser="bd14eb2f543610";
    $dbpass="231fc2aa";
    $dbname="heroku_2b5ce0a236f4ba4";
    $conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn)
    {
        die("No hay conexion: ".mysqli_connect_error());
    }
    if(isset($_GET["p"]))
    {
        $condicion=$_GET["p"];
        //echo "console.log('$condicion')";
        if($condicion==1)
        {
            
            $producto="Asuncion";
            $categoria="Pizza";
            $cantidad="1";
            $precio=130.00;
            $estatus="Pendiente";
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            //echo "console.log ('INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio,'$nombreuser','$estatus','$tamanio')')";
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                //echo "console.log('Se registro')";
            }
            else
            {
                //echo "console.log('No se registro')";
            }
        }
        if($condicion==2)
        {
            
            $producto="Asuncion";
            $categoria="Pizza";
            $cantidad="1";
            $precio=150.00;
            $estatus="Pendiente";
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            //echo "console.log ('INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio,'$nombreuser','$estatus','$tamanio')')";
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                //echo "console.log('Se registro')";
            }
            else
            {
                //echo "console.log('No se registro')";
            }
        }
        if($condicion==3)
        {
            
            $producto="Asuncion";
            $categoria="Pizza";
            $cantidad="1";
            $precio=170.00;
            $estatus="Pendiente";
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            //echo "console.log ('INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio,'$nombreuser','$estatus','$tamanio')')";
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                //echo "console.log('Se registro')";
            }
            else
            {
                //echo "console.log('No se registro')";
            }
        }
        if($condicion==4)
        {
            
            $producto="Asuncion";
            $categoria="Pizza";
            $cantidad="1";
            $precio=190.00;
            $estatus="Pendiente";
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            //echo "console.log ('INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio,'$nombreuser','$estatus','$tamanio')')";
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                //echo "console.log('Se registro')";
            }
            else
            {
                //echo "console.log('No se registro')";
            }
        }
        //AQUI-----------------------------------------------------------------------------------
        if($condicion==5)
        {
            $producto="Hawaina";
            $categoria="Pizza";
            $cantidad="1";
            $precio=130.00;
            $estatus="Pendiente";
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {

            }
        }

        if($condicion==6)
        {
            $producto="Hawaina";
            $categoria="Pizza";
            $cantidad="1";
            $precio=150.00;
            $estatus="Pendiente";
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==7)
        {
            $producto="Hawaina";
            $categoria="Pizza";
            $cantidad="1";
            $precio=170.00;
            $estatus="Pendiente";
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==8)
        {
            $producto="Hawaina";
            $categoria="Pizza";
            $cantidad="1";
            $precio=190.00;
            $estatus="Pendiente";
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==9)
        {
            $producto="Mexicana";
            $categoria="Pizza";
            $cantidad="1";
            $precio=130.00;
            $estatus="Pendiente";
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==10)
        {
            $producto="Mexicana";
            $categoria="Pizza";
            $cantidad="1";
            $precio=150.00;
            $estatus="Pendiente";
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==11)
        {
            $producto="Mexicana";
            $categoria="Pizza";
            $cantidad="1";
            $precio=170.00;
            $estatus="Pendiente";
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==12)
        {
            $producto="Mexicana";
            $categoria="Pizza";
            $cantidad="1";
            $precio=190.00;
            $estatus="Pendiente";
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==13)
        {
            $producto="Italiana";
            $categoria="Pizza";
            $cantidad="1";
            $precio=130.00;
            $estatus="Pendiente";
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==14)
        {
            $producto="Italiana";
            $categoria="Pizza";
            $cantidad="1";
            $precio=150.00;
            $estatus="Pendiente";
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==15)
        {
            $producto="Italiana";
            $categoria="Pizza";
            $cantidad="1";
            $precio=170.00;
            $estatus="Pendiente";
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==16)
        {
            $producto="Italiana";
            $categoria="Pizza";
            $cantidad="1";
            $precio=190.00;
            $estatus="Pendiente";
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==17)
        {
            $producto="Azteca";
            $categoria="Pizza";
            $cantidad="1";
            $precio=130.00;
            $estatus="Pendiente";
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==18)
        {
            $producto="Azteca";
            $categoria="Pizza";
            $cantidad="1";
            $precio=150.00;
            $estatus="Pendiente";
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==19)
        {
            $producto="Azteca";
            $categoria="Pizza";
            $cantidad="1";
            $precio=170.00;
            $estatus="Pendiente";
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==20)
        {
            $producto="Azteca";
            $categoria="Pizza";
            $cantidad="1";
            $precio=190.00;
            $estatus="Pendiente";
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==21)
        {
            $producto="Pepperoni";
            $categoria="Pizza";
            $cantidad="1";
            $precio=130.00;
            $estatus="Pendiente";
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==22)
        {
            $producto="Pepperoni";
            $categoria="Pizza";
            $cantidad="1";
            $precio=150.00;
            $estatus="Pendiente";
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==23)
        {
            $producto="Pepperoni";
            $categoria="Pizza";
            $cantidad="1";
            $precio=170.00;
            $estatus="Pendiente";
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==24)
        {
            $producto="Pepperoni";
            $categoria="Pizza";
            $cantidad="1";
            $precio=190.00;
            $estatus="Pendiente";
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==25)
        {
            $producto="HamburguesaHawaina";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=60;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==26)
        {
            $producto="HamburguesaClasica";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=45;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==27)
        {
            $producto="HamburguesaDoble";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=80;
            $estatus="Pendiente";
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==28)
        {
            $producto="Hotdog";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=15;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==29)
        {
            $producto="Hotdog";
            $categoria="Adicionales";
            $cantidad="2";
            $precio=30;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==30)
        {
            $producto="Hotdog";
            $categoria="Adicionales";
            $cantidad="3";
            $precio=40;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){

            }
        }
        if($condicion==31)
        {
            $producto="AlitasBarbiquiu";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=70;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==32)
        {
            $producto="AlitasChipotle";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=70;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==33)
        {
            $producto="AlitasHabanero";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=80;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==34)
        {
            $producto="TortaHawaina";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=60;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==35)
        {
            $producto="TortaCubana";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=60;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==36)
        {
            $producto="TortaJamon";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=30;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==37)
        {
            $producto="TortaChirizo";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=30;
            $estatus="Pendiente";
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==38)
        {
            $producto="Papas";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=30;
            $estatus="Pendiente";
            $tamanio="Chicas";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==39)
        {
            $producto="Papas";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=45;
            $estatus="Pendiente";
            $tamanio="Medianas";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==40)
        {
            $producto="Papas";
            $categoria="Adicionales";
            $cantidad="1";
            $precio=60;
            $estatus="Pendiente";
            $tamanio="Grandes";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==41)
        {
            $producto="CocaCola";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=35;
            $estatus="Pendiente";
            $tamanio="3Litro";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==42)
        {
            $producto="Fanta";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=35;
            $estatus="Pendiente";
            $tamanio="3Litro";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==43)
        {
            $producto="Sprite";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=35;
            $estatus="Pendiente";
            $tamanio="3Litro";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==44)
        {
            $producto="Fresca";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=35;
            $estatus="Pendiente";
            $tamanio="3Litro";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==45)
        {
            $producto="CocaCola";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=30;
            $estatus="Pendiente";
            $tamanio="2Litros";
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==46)
        {
            $producto="Fanta";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=30;
            $estatus="Pendiente";
            $tamanio="2Litros";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==47)
        {
            $producto="Sprite";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=30;
            $estatus="Pendiente";
            $tamanio="2Litros";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==48)
        {
            $producto="Fresca";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=30;
            $estatus="Pendiente";
            $tamanio="2Litros";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==49)
        {
            $producto="CocaCola";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=15;
            $estatus="Pendiente";
            $tamanio="600ml";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==50)
        {
            $producto="Fanta";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=15;
            $estatus="Pendiente";
            $tamanio="600ml";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==51)
        {
            $producto="Sprite";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=15;
            $estatus="Pendiente";
            $tamanio="600ml";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==52)
        {
            $producto="Fresca";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=15;
            $estatus="Pendiente";
            $tamanio="600ml";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==53)
        {
            $producto="Agua";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=8;
            $estatus="Pendiente";
            $tamanio="600ml";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==54)
        {
            $producto="Agua";
            $categoria="Bebidas";
            $cantidad="1";
            $precio=15;
            $estatus="Pendiente";
            $tamanio="1L";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
    }
    else
    {
       echo "console.log('Error')";
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>LoginUser</title>
		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" href="../css/animate.css">
		<link rel="stylesheet" href="../css/icomoon.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/flexslider.css">
		<link rel="stylesheet" href="../css/style.css">

		<script src="../js/modernizr-2.6.2.min.js"></script>
	</head>
    <body>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="../js/productocomprado.js"></script>
	</body>
</html>