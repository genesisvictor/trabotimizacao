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
class template {
	var $titolo;
	var $filename;
	var $alta;
	var $bassa;
	var $pagina;
	var $contenuto;
	var $setta_alta;
	var $setta_bassa;
	Function setta_titolo($title) {
		$this->titolo = $title;
	}
	Function setta_filename($filename) {
		$this->filename = $filename;
	}
	Function setta_alta() {
		if (!isset($this->setta_alta)) {
			$this->setta_alta = 1;
		}
		//$dir = dirname($_SERVER['PHP_SELF']);
		$testata = implode('', file('testata.php'));
		$keywords = '  ';
		$style = ' ';
		$this->alta = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
  <title> TRABALHO OTIMIZAÇÃO / JORNAL O CLIMA - ' . $this->titolo . ' - Gênesis, Paul, William</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta name=author content="">
' . $keywords . $style . '
</head>

<body>

' . $testata. '
  <!-- TAGLIA 1 -->
  <hr align="left" width="100%">
  <br>
  <br>
  <!-- FINE TESTATA -->
';
	}
	Function setta_bassa() {
		if (!isset($this->setta_bassa)) {
			$this->setta_bassa = 1;
		}
		$this->bassa = '
  <!-- INIZIO PIEDE -->
  <br>
  <br>
  <hr align="left" width="100%">
  <!-- TAGLIA 2 -->


  <br>
  <br>

 
</body>
</html>';
	}
	Function setta_contenuto($content) {
		$this->contenuto = $content;
	}
	Function mostra_pagina() {
		header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
		if (!isset($this->setta_alta)) {
			$this->setta_alta();
		}
		if (!isset($this->setta_bassa)) {
			$this->setta_bassa();
		}
		$this->pagina = $this->alta . '<h2>' . "$this->titolo" . '</h2>' . $this->contenuto . $this->bassa;
		return ($this->pagina);
	}
}
?>
