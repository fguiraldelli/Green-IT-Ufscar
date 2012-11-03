<?php

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// id recebido do form
		$quest = $_POST['question'];
		$mysql_hostname = "localhost";
		$mysql_user = "user";
		$mysql_password = "123456";
		$mysql_database = "sust";
		$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
			or die("Opps some thing went wrong");
		mysql_select_db($mysql_database, $bd) 
			or die("Opps some thing went wrong");
			
			
		$sql = "SELECT * FROM question WHERE id_question = " . $quest;
		$res = mysql_query($sql);
		echo "
		<head>
			<style type=\"text/css\">
				table {
					border-collapse: collapse;
				}
				tr td.um{
					background-color: #B2FFB2;
				}
				tr td.dois{
					background-color: #FFFFFF;
				}
				td {
					border-left: none;
					border-right: none;
					text-align: center;
					border-bottom: 2px solid #00FF00;
				}
			</style>
			<script type=\"text/javascript\">
				function subq(ver){
					sub = document.getElementById(\"subquestion\");
					if(ver)
						sub.style.display = \"block\";
					else
						sub.style.display = \"none\";
				}
			</script>
		</head>
		<body>
		";
		echo "<form action=\"form.php\" method=\"POST\">";
		$row = mysql_fetch_array($res);
			// Preenche a pergunta
			echo "
				<p> " . $row['question'] . "</p>
				<table>
					<tr>
						<td></td>
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td></td>
					</tr>
					<tr >
						<td>Sim - Plenamente</td>
						<td><input type=\"radio\" name=\"" . $row['id_question'] . "\" onclick=\"subq(1)\"/></td>
						<td><input type=\"radio\" name=\"" . $row['id_question'] . "\" onclick=\"subq(1)\"/></td>
						<td><input type=\"radio\" name=\"" . $row['id_question'] . "\" onclick=\"subq(0)\"/></td>
						<td>Não</td>
					</tr>
				</table>
			";
		// Preenche a tabela de subperguntas
		$sql = "SELECT * FROM subquestion";
		$res = mysql_query($sql);
		
		echo "
		<div id=\"subquestion\" style=\"display: none\">
			<table>
				<tr>
					<td>
					</td>
					<td>Plenamente</td>
					<td>Parcialmente</td>
					<td>Não Contribui</td>
				</tr>
		";
		$cor = "um";
		while($row = mysql_fetch_array($res)){
			echo "
					<tr>
						<td class=\"" . $cor . "\">" . $row['subquestion'] . "</td>
						<td class=\"" . $cor . "\"><input type=\"radio\" name=\"" . $row['id_subquestion'] . "\" /></td>
						<td class=\"" . $cor . "\"><input type=\"radio\" name=\"" . $row['id_subquestion'] . "\" /></td>
						<td class=\"" . $cor . "\"><input type=\"radio\" name=\"" . $row['id_subquestion'] . "\" /></td>
					</tr>
			";
			if($cor == "um")
				$cor = "dois";
			else
				$cor = "um";
		}
		echo "
				</table>
			</div>";
		$quest++;
		echo "
				<br>
				<input type=\"hidden\" name=\"question\" value=" . $quest . " />
				<input type=\"submit\" />
			</form>
		</body>";
	}else{
		header("Location: home.php");
	}
?>