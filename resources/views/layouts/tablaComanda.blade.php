<table id="tablaComanda" border="1" class="table">
        <thead>
          <tr>
            <th>Producto:</th>
            <th>Precio:</th>
            <th>Cantidad:</th>
            <th>Total:</th>
            <th>Acciones:</th>
          </tr>
        </thead>

        <tbody>
          @foreach($productos as $prod)
            <tr class="info">
              <td>{{ $prod->Nombre }}</td>
              <td>{{ $prod->Precio }}</td>
              <td>{{ $prod->Cantidad }}</td>
              <td></td>
              <td>
                <button type="button" class="btn btn-danger">X</button>
              </td>
            </tr>  
            
          @endforeach

          @foreach($productos as $prod)
            <tr class="info">
              <td>{{ $prod->Nombre }}</td>
              <td>{{ $prod->Precio }}</td>
              <td>{{ $prod->Cantidad }}</td>
              <td></td>
              <td>
                <button type="button" class="btn btn-danger">X</button>
              </td>
            </tr>  
          @endforeach

          @foreach($productos as $prod)
            <tr class="info">
              <td>{{ $prod->Nombre }}</td>
              <td>{{ $prod->Precio }}</td>
              <td>{{ $prod->Cantidad }}</td>
              <td></td>
              <td>
                <button type="button" class="btn btn-danger">X</button>
              </td>
            </tr>  
          @endforeach
        </tbody>
      </table>