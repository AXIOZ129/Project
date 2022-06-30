<h1>Home</h1>


     <select id="accion">
        <option value="inicio">----Seleccione----</option>
        <option value="añadir" name="1">Añadir</option>
        <option value="modificar" name="2">Modificar</option>
        <option value="borrar" name="3">Borrar</option>
        <option value="colores" name="4">Elegir color</option>
    </select>
    <input type="text" id="texto" name="name" style="width: 20%;" placeholder="Texto a ingresar">
    <input type="text" id="enter" style="width: 20%;" placeholder="Texto a ingresar">
    
    <div id="divP">
        <select id="posicion"></select>
    </div>

    <div id="divC">
        <select id="colors">
            <option>----Colores----</option>
            <option value="azul">Azul</option>
            <option value="rojo">Rojo</option>
            <option value="verde">Verde</option>
        </select>
    </div>




<button id="aceptar" class="btn">Aceptar</button>
<div id="div1">
    <h5>H1</h5>
    <h5>H2</h5>
    <h5>H3</h5>
    <h5>H4</h5>
    <h5>H5</h5>
    <h5>H6</h5>

</div>

<div class="g-recaptcha" data-sitekey="6Ld7E2kgAAAAALLhqT28xazCYjRLtzeXEREWR5Gh" data-callback="verifyCaptcha"></div>
<p id="g-recaptcha-error" style="color:red; display:none;">Esta validacion es requerida.</p>
<a class="waves-effect waves-light btn" id="submitFrom" style="width:32%;">Enviar</a> 



<script async src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript" src="./scripts/home.js?v1.0.0"></script>