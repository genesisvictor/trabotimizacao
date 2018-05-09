<?php
/*
 * Copyright (C) 2003, 2004, 2005, 2006 Gionata Massi
 *
 * This file is part of Simplex-in-PHP.
 *
 *  Simplex-in-PHP is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  Simplex-in-PHP is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with Foobar; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
*/
require 'template.php';
$content = '
   <script language="javascript" type="text/javascript">
<title> TRABALHO OTIMIZAÇÃO / JORNAL O CLIMA </title>
function checkData () {
    if (document.form0.numVariables.value == "" ||
        document.form0.numConstraints.value == "") {
			alert("Devi riempire interamente il modulo prima di procedere.")
			return false
	}
	if (! isFinite(document.form0.numVariables.value) ||
		document.form0.numVariables.value < 0 ||
		document.form0.numVariables.value > 10) {
			alert("Introduci come  numero delle variabili di decisione valori compresi fra 0 e 10 . ")
			return false
	}
	if (! isFinite(document.form0.numVariables.value) ||
		document.form0.numConstraints.value < 0 ||
		document.form0.numConstraints.value > 10) {
			alert("Introduci come  numero di vincoli valori compresi fra 0 e 10. ")
			return false
	}
	document.form0.submit()
}
		
	</script>
	 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
     <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <div class="col-md-6" style="float:left;">
<div class="Compose-Message">               
                <div class="panel panel-success">
                    <div class="panel-heading">
                       Jornal O clima (Metodo Simplex)
                    </div>
                    <div class="panel-body">
                        
                       
      <form name="form0" method="post" action="immissione_dati_1.php">
        <label for="exampleInputEmail1">O problema é de: </label> <input type="radio" name="minmax"
 value="min" checked> Minimo <input type="radio" name="minmax"
 value="max"> Máximo
 <div class="form-group">
    <label>Número de variáveis de decisão:</label>
    <input type="email" class="form-control" placeholder="" name="numVariables" style=" width:300px" />
  </div>
         <label>Número de restrições: </label>
        <p> 
        <input type="email" class="form-control" placeholder="" name="numConstraints" style=" width:300px" />

         <label>Todas as variáveis são intencionalmente não negativas.   <input type="checkbox" name="intera"
 value="true"> Confirmado.</label>
        <table border="0" summary="invio form">
          <thead>
            <tr>
              <th><input type="button" value=" Vamos lá! " class="btn btn-success" style="border:1px solid transparent; border-radius:15px; " 
onClick="checkData()"></th>
             
            </tr>
          </thead>
        </table>
      </form>
</div></div></div></div>
	';
// visualizzazione
$title = '';
$pagina = new template;
$pagina->setta_titolo($title);
$pagina->setta_filename(basename($_SERVER["SCRIPT_NAME"]));
$pagina->setta_contenuto($content);
print ($pagina->mostra_pagina());
?>
