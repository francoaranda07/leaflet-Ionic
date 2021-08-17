<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Geolocalización</title>
	<link rel="shortcut icon" href="img/gelocalizacion.png" type="image/jpg"><!--icono de la pag-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="librerias/ionic.bundle.css">
	<!-- Inicio Libreria Leaflet -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
	<!-- Fin Libreria Leaflet -->
</head>

<body>
	<ion-app>

		<ion-header class="header">
            <ion-toolbar color="primary">
				<ion-title>
					Geolocalizador                    
                </ion-title>
				<ion-title slot="end">
					<ion-icon name="location-sharp"></ion-icon>
				</ion-title>
            </ion-toolbar>
        </ion-header>			
		<ion-card>			
				<div id="map"></div>
		</ion-card>
		<ion-footer>
			<ion-toolbar color="primary">
				<ion-title slot="end">&copy;</ion-title>
			</ion-toolbar>
		</ion-footer>
	</ion-app>
	
<!-- Inicio libreria Leaflet -->
<script src="librerias/leaflet.js"></script>
<!-- Fin libreria Leaflet -->
<!-- Inicio Paquetes Ionic -->
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="librerias/ionic.js"></script>
<!-- Fin paquetes Ionic -->
<script src="librerias/jquery-3.5.1.min.js"></script>
<script src="js/app.js"></script>

<script>
    $(document).ready(function(){
        getApi()
    });
</script>
</body>
</html>