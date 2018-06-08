<html lang="es">

  @include('Tpv.headTpv')

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://localhost:8888/qarmitapp/public/">Qarmita</a>
        </div>
    </nav>

    <!-- div general !-->
    <div id="contPrincipal" class="row">
      <div id="panel" class="panel-body">
        <div id="contSuperior" class="container-fluid text-center">    
          <!-- Barra lateral comanda !-->
          <div id="comanda" border="1" class="col-sm-4 " style="background-color:aquamarine;">
            <h1>Comanda</h1> 
            <h6>Mesa Seleccionada:  </h6>

            @include('layouts.tablaComanda')

            <!--
            <div class="btn-group">
              <button type="button" class="btn btn-primary">Blabla</button>
              <button type="button" class="btn btn-success">Imprimir</button>
              <button type="button" class="btn btn-danger">Borrar</button>
            </div>
            -->
          </div>

          <!-- Div de Panel de productos/categorias!-->
          <div class="text-center"> 
            <div id="categorias"class="col-sm-8 text-center">
              <!-- Div de categorias!-->
              @include('Tpv.categorias')
              <!-- Div de categorias!-->
            </div>

            
          </div> <!-- Div de Panel de productos/categorias!-->

        </div>

        <hr>

        <div id="contInferior" class="container-fluid text-center"> <!-- Segundo div de la página -->

          @include('Tpv.pad')

          @include('Tpv.productos')
          </div> <!-- Segundo div de la página -->
      </div> <!-- Panel -->
    </div><!-- Contenedor Principal -->
    
    <script>
      $(document).ready(function(){
        $("#myInput").on("keyup",function(){
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > 1)
          });
        });
      });
    </script>

  </body> 
</html>

