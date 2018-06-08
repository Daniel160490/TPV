<!-- Div de Productos!-->
<div id="productos" class="col-sm-8 text-center">  
    <div>
        <h2>Productos</h2>  
        <div class="panel-heading"> 
            <div class="row">
                <div class="col-xs-4 col-md-offset-5">
                    <input class="form-control" id="myInput" type="text" placeholder="Buscar Productos...">
                </div> 
            </div>
        </div>
        <div  id="myTable" class="panel-body">
            @foreach($categorias as $cate)
                <button id="btnProd" type="button" class="btn btn-primary btn-lg">Producto 1</button>
                <button id="btnProd" type="button" class="btn btn-primary btn-lg">Producto 2</button>
                <button id="btnProd" type="button" class="btn btn-primary btn-lg">Producto 3</button>
                <button id="btnProd" type="button" class="btn btn-primary btn-lg">Producto n</button> 
            @endforeach   
        </div>
    </div> 
</div> 
<!-- Fin de Productos -->