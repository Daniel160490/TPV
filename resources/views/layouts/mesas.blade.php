<html lang="es">
    
    @include('Tpv.headTpv')

    <!--MESAS DEL LOCAL -->
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://localhost:8888/qarmitapp/public/">Qarmita</a>
                </div>
        </nav>


        <form action="/qarmitapp/public/mesas/tpv">
            <table class="table-mesas">
                @foreach ($mesas as $mesa )
                <tr>
                    <td><button class="butt-mesas">{{ $mesa->Numero }}</button></td>
                    <td><button class="butt-mesas">2</button></td>
                    <td><button class="butt-mesas">3</button></td>
                    <td><button class="butt-mesas">4</button></td>
                    <td><button class="butt-mesas">5</button></td>
                </tr>
                @endforeach
            </table>
        </form>
    </body>
</html>