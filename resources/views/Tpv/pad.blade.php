<!-- Pad de numeros !-->
 
    <div id="padNum" class="col-sm-4">
        <br>
        <!-- Cabecera del pad -->
        <input type="text" id="txtcaja1" name="txtcaja1" value="TOTAL: ">
        <input type="text" id="valor_numero" maxlength="20" value="0" class="cajita_valor" readonly="true">

        <table id="calculadora">    
            <tr>
                <td>
                    <input type="button" id="C" value="C" class="boton funcion btn btn-primary btn-lg" onclick="darC()">
                </td>
                <td>
                    <input type="button" id="Dividir" value="/" class="boton funcion btn btn-primary btn-lg" onclick="operar(4)">
                </td>
                <td>
                    <input type="button" id="Multiplicar" value="x" class="boton funcion btn btn-primary btn-lg" onclick="operar(3)">
                </td>
                <td>
                    <input type="button" id="Restar" value="-" class="boton funcion btn btn-primary btn-lg">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="button" id="7" value="7" class="boton btn btn-primary btn-lg" onclick="darNumero('7')">
                </td>
                <td>
                    <input type="button" id="8" value="8" class="boton btn btn-primary btn-lg" onclick="darNumero('8')">
                </td>
                <td>
                    <input type="button" id="9" value="9" class="boton btn btn-primary btn-lg" onclick="darNumero('9')">
                </td>
                <td>
                    <input type="button" id="Sumar" value="+" class="boton funcion btn btn-primary btn-lg" onclick="operar(1)">
                </td>
                
            </tr>

            <tr>
                <td>
                    <input type="button" id="4" value="4" class="boton btn btn-primary btn-lg" onclick="darNumero('4')">
                </td>
                <td>
                    <input type="button" id="5" value="5" class="boton btn btn-primary btn-lg" onclick="darNumero('5')">
                </td>
                <td>
                    <input type="button" id="6" value="6" class="boton btn btn-primary btn-lg" onclick="darNumero('6')">
                </td>
                <td>
                    <input type="button" id="igual" value="=" class="boton funcion btn btn-primary btn-lg" onclick="esIgual()">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="button" id="1" value="1" class="boton btn btn-primary btn-lg" onclick="darNumero('1')">
                </td>
                <td>
                   <input type="button" id="2" value="2" class="boton btn btn-primary btn-lg" onclick="darNumero('2')">
                </td>
                <td>
                    <input type="button" id="3" value="3" class="boton btn btn-primary btn-lg" onclick="darNumero('3')">
                </td>
                
                <td colspan="2">
                    <input type="button" id="0" value="0" class="boton_largo btn btn-primary btn-lg" onclick="darNumero('0')">
                </td>
            </tr>
            <tr>
            <!-- 
                <td>
                    <input type="button" id="," value="," class="boton btn btn-primary btn-lg" onclick="darComa()">
                </td>
            -->
            </tr>
        </table>
        
    </div> 


    <script>
            //Declaracion de variables
	        var num1 = 0;
	        var num2 = 0;
	        var opera;

        //Función que coloca el número presionado
        function darNumero(numero){
            if(num1==0 && num1 !== '0.'){
                num1 = numero;
            }else{
                num1 += numero;
            }
            refrescar();
        }

        //Función que coloca la coma al presionar dicho botón
        function darComa(){
            if(num1 == 0) {
                num1 = '0.';
            } else if(num1.indexOf('.') == -1) {
                num1 += '.';
            }
            refrescar();
        }

        //Función que coloca la C al presionar dicho botón
        function darC(){
            num1 = 0;
            num2 = 0;
            refrescar();
        }


        //Esta función realiza las distintas operaciones aritméticas en función del botón pulsado
        function operar(valor){
            if (num1 == 0){
                num1 = parseFloat(document.getElementById("valor_numero").value);
            }
            num2 = parseFloat(num1);
            num1= 0;
            opera = valor;
        }

        //Función para pulsar igual
            /*
        	suma = 1
        	resta = 2
        	multiplicacion = 3
        	division = 4
        	potencia = 5
        */

        function esIgual(){
            num1 = parseFloat(num1);
            switch (opera){
                case 1:
                    num1 += num2;
                break;
                case 2:
                    num1 = num2 - num1;
                break;
                case 3:
                    num1 *= num2;
                break;
                case 4:
                    num1 = num2 / num1;
                break;
                case 5:
                    num1 = Math.pow(num2, num1);
                break;
            }
            refrescar();
            num2 = parseFloat(num1);
            num1 = 0;
        }

        function refrescar(){
            document.getElementById("valor_numero").value = num1;
        }
    </script>
<!-- Fin de pad de numeros !-->