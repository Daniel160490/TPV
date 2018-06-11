<!DOCTYPE html>

<html lang="es">
    <head>
    <title>La Qarmita</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    @include('theme.style')

    </head>
    <body>

        <!-- Nav de la página -->
        @include('theme.navTPV')
        <!-- Nav de la página -->

        
        <div class="container-fluid text-center">    
            <div class="row content">
                <div class="row">

                    <!-- ------------------CONTENIDO SIDEBAR------------------------------ -->
                    <div class="col-sm-4"> <!-- Aqui antes tenia la propiedad well -->
                        <div id="comanda" class="well">
                            <p>COMANDA</p>
                            @include('layouts.comanda')
                        </div>
                
                        <div id="padNum" class="well center">
                            <p>PAD</p>
                            @include('layouts.pad')
                        </div>
                    </div>
                    <!-- ------------------CONTENIDO SIDEBAR------------------------------ -->



                    <!-- ------------------CONTENIDO PRINCIPAL------------------------------ -->
                    <div class="row content">
                        <div id="contenedorCategorias" class="col-sm-6 panel-body"> 
                            <h1>CATEGORIAS</h1>

                            <button type="button" class="btn">CAFÉS</button>
                            <button type="button" class="btn btn-default">BEBIDAS</button>
                            <button type="button" class="btn btn-primary">BEBIDAS ALCOHOLICAS</button>
                            <button type="button" class="btn btn-success">TARTAS</button>
                            <hr>
                        </div>
                        
                        <th></th>
                        
                        <div id="contenedorProductos" class="col-sm-6 panel-body"> 
                            <h1>PRODUCTOS</h1>
                
                            <button type="button" class="btn">PRODUCTO 1</button>
                            <button type="button" class="btn btn-default">PRODUCTO 2</button>
                            <button type="button" class="btn btn-primary">PRODUCTO 3</button>
                            <button type="button" class="btn btn-success">PRODUCTO N</button>
                            
                        </div>
                    </div>
                    <!-- ------------------CONTENIDO PRINCIPAL------------------------------ -->

                </div>
             </div>
        </div>
    </body>
</html>

