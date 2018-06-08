<style>
  html,body { 
    /*Elimina el scroll de la pagina*/
    overflow:hidden;
    background: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url("../img/cafe.jpg");
    background-size: 100%;
  }

  #txtcaja1{
    text-align: left;
  }

  /************************
  |  BOTONES EN CATEGORIAS |
  *************************/
  #btnCategoria{
    width:200px; 
    height:100px;
    /*transform-style: preserve-3d;*/
    cursor: pointer;
    position: relative;
    padding: 1em 1.5em;
    border: none;
    background-color: transparent;
    cursor: pointer;
    outline: none;
    font-size: 18px;
  }
  .type1{
    color: $color1;
  }
  .type1::after,
  .type1::before{
    content: '';
    display: block;
    position: absolute;
    width: 10%;
    height: 10%;
    border: 2px solid;
    transition: all 0.6s ease;
    border-radius: 5px;
    
  }
  .type1::after{
    bottom: 0;
    right: 0;
    border-top-color: transparent;
    border-left-color: transparent;
    border-bottom-color: $color1;
    border-right-color: $color1;
  }
  .type1::before{
    top: 0;
    left: 0;
    border-bottom-color: transparent;
    border-right-color: transparent;
    border-top-color: $color1;
    border-left-color: $color1;
  }

  .type1:hover:after,
  .type1:hover:before{
    width: 100%;
    height: 100%;
    text-shadow:0 0 1px white;
  }
/*
  #btnCategoria:hover{
    box-shadow:2px 2px 1px #ccc;
    -webkit-transform: rotate(5deg) scale(1.2) skew(1deg) translate(0px);
    -moz-transform: rotate(5deg) scale(1.2) skew(1deg) translate(0px);
    -o-transform: rotate(5deg) scale(1.2) skew(1deg) translate(0px);
    color:#222;
    text-shadow:0 0 1px white; 
  }
  #btnCategoria:after{
    top: -100%;
    left: 0px;
    width: 100%;
    position: absolute;
    background: #3a9999;
    border-radius: 5px;
    content: ‘Flipped’;
    transform-origin: left bottom;
    transform: rotateX(90deg);
  }
  */

  /****************************
  | FIN BOTONES EN CATEGORIAS |
  ****************************/
  
  th{
    background-color: #9ae288;
  }

  #comanda{
    background: url("../img/bg1.png");
    background-size: 100%;
    height: 320px;
    width: 470px;
    overflow-y: scroll;
  }
 
  /*************** 
  | Pad numérico |
  ****************/
  #padNum{
    background: url("../img/bg1.png");
    background-size: 100%;
  }
  
  input[type="text"]{
    /*background-color:black;
    border:0px;
    width:400px;
    height: 40px;
    font-size: 20px;
    color: white;
    text-align: right;
    pointer-events: none;*/

    width: 400px; text-align: right; font-style: sans-serif;
    background: #cccccc;
    border-radius: 15px 15px 15px 15px;
    height: 30px;
    width: 400px;
    font-size:20px;
    position: left; left: 0px;  padding: 20px 20px;
    background-color: #cccccc; 
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#cccccc) );
    
	}
  table{
    text-align: center;
  }
  table:hover{
    text-shadow: 1px 1px 15px #666666;
    text-decoration: none;
  }

  #myInput{
    text-align: left;
    height: 5px;
    width: 450px;
    font-size: 13px;
  }
  
  input[name="valor_numero"]{
    margin-bottom: 5px;
    font-size: 26px;
	}

    /* 
      Botones en el PAD 
    */
    input[type="button"]{
      font-size: 18px;
      font-weight:lighter;
      font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
      width:90px; border: 0px;
      height: 50px;
      color: white;
      background-color:blue;
      margin-bottom: 5px;
      margin-left: 15px;
    }
    /******************* 
    | FIN Pad numérico |
    *******************/


    /****************** 
      EDICION DE MESAS 
      *****************/
    .table-mesas {
      float: left;
      width: 95.8%;
    }

    .table-mesas tr td {
      padding: 15px;
    }

    .butt-mesas {
      -webkit-border-radius: 4;
      -moz-border-radius: 4;
      border-radius: 4px;
      text-shadow: 1px 1px 15px #666666;
      font-family: Arial;
      color: #ffffff;
      font-size: 30px;
      padding: 30px 40px;
      background: #88dd77;
      border: solid #000000 1px;
      text-decoration: none;
      width: 100%;
    }

    .butt-mesas:hover {
      background: #9ae288;
      text-shadow: 1px 1px 15px #666666;
      text-decoration: none;
    }
    
    /********************** 
      FIN EDICION DE MESAS 
    ************************/

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    h2{
      color:white;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
  </style>