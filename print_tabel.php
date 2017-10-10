<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Переводы</title>
</head>
<body>
	<table class="zebra">
		<thead>
			<tr>
				<th>ид</th>
				<th>имя</th>
				<th>счет</th> 
			</tr>
		</thead>
		<tbody>
			<?
			$link = mysql_connect('localhost', '', '');
			mysql_select_db("vh24737_1") or die(mysql_error());
			if (!$link) {
				die('Ошибка соединения: ' . mysql_error());
			}
			$sql = mysql_query("SELECT * FROM `user` LIMIT 0,50");
			while($row = mysql_fetch_array($sql)) {
				echo "<tr>
				<td class='round-top'>".$row['id']."</td>
				<td>".htmlspecialchars($row['user'])."</td>
				<td>".$row['money']."</td>
				</tr>";
			}
			mysql_close($link);
			?>
		</tbody>
	</table>
	<style>
	html,body{
		height: 100%;
	}
	table {
		border-spacing: 0;
		empty-cells: hide;
		position: absolute;
		left: 0px;
		right: 0;
		top: 0;
		bottom: 0;
		margin: auto;
		display: inline-block;
		width: 400px;
		height: 50%;
	}
	td {
		padding: 10px 20px;
		text-align: center;
		border-bottom: 1px solid #F4EEE8;
		transition: all 0.5s linear;
	}
	td:first-child {
		text-align: left;
		color: #3D3511;
		font-weight: bold;
	}
	th {
		padding: 10px 20px;
		color: #3D3511;
		border-bottom: 1px solid #F4EEE8;
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
	}
	td:nth-child(even) {
		background: #F6D27E;
	}
	td:nth-child(odd) {
		background: #D1C7BF;
	}
	th:nth-child(even)  {
		background: #F6D27E;
	}
	th:nth-child(odd)  {
		background: #D1C7BF;
	}
	.round-top {
		border-top-left-radius: 5px;
	}
	.round-bottom {
		border-bottom-left-radius: 5px;
	}
	tr:hover td{
		background: #D1C7BF;
		font-weight: bold;
	}
</style>
</body>
</html>
