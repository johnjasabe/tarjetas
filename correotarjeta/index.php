<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Crea tu Kroco Tarjeta</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </head>
	<body>
    <div class="container">
        
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Crea tu Kroco Tarjeta</h1>
                <p class="lead">Ahora en Krocodileye puedes crear tu propia tarjeta y enviarla automáticamente a quién tu desees.</p>
            </div>

            <div>
            <div class="container ">    
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    Escoge tu fondo
                </h3>
               
                <div class="row">
                    <div class="card col-md-4 center">
                        <img src="backgrounds/fondo1.jpg" style="max-width:50%; margin-left:25%;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Paisajes</p>
                            <input type="submit" class="btn btn-outline-primary btn-sm" value ="usar" role="button"/>
                            
                        </div>
                    </div>
                    <div class="card col-md-4" >
                        <img src="backgrounds/fondo2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Animales</p>
                            <input type="submit" class="btn btn-outline-primary btn-sm" value ="usar" role="button"/>
                        </div>
                    </div>
                    <div class="card col-md-4" >
                        <img src="backgrounds/fondo3.jpg" style="width:100%; height:auto;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Planeta</p>
                            <form>
                            <input type="submit" class="btn btn-outline-primary btn-sm" value ="usar" role="button"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</body>
</html>