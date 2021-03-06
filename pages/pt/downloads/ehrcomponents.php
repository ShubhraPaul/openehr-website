﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Componentes EHR';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
	
		
			<h1><?php echo "$PageName";?></h1>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Projeto</th>
				<th>Descrição</th>
				<th>Tecnologia</th>
				<th>Download</th>
			</tr>	
			<tr>
				<td>open EHR-Gen</td>
				<td>Um framework para gerar registros eletrônicos de saúde baseado em openEHR</td>
				<td> Grails, Groovy, Java</td>
				<td><a href="http://code.google.com/p/open-ehr-gen-framework/">Página de Download</a></td>
			</tr>
			<tr>
				<td>Implementação de referência openEHR em Java</td>
				<td>A implementação de referência do modelo openEHR, modelo de arquétipo e outros núcloes semanticos. Esta biblioteca é o núcleo da maioria das outras implementações de Java que implementam openEHR.</td>
				<td>Java</td>
				<td><a href="http://www.openehr.org/wiki/display/projects/Java+Project+Download">Página de Download</a></td>
			</tr>
			</tbody>
			</table>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
