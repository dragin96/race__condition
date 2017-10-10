<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Переводы</title>
</head>
<body>
<div class="block">
<div class="block__txt">Данная демка показывает уязвимость типа race condition</div>
	<form action="ajax.php" method="post">
		<label class="block__input" for="user1">
			<span class="block__name">USER_1</span>
			<input type="text" value="dragin" class="input"  name="user1">
		</label>
		<label class="block__input" for="user2">
			<span class="block__name">USER_2</span>
			<input type="text" value="test" class="input"   name="user2">
		</label>
		<label class="block__input" for="transfer">
			<span class="block__name">transfer</span>
			<input type="number" value="10" class="input"  name="transfer">
		</label>
		<input type="submit" class="button" value="send">
	</form>
	<div class="block__txt">Эмитация перевод денег между пользевателями<a href="http://dragin.ru/web/print_tabel.php">Состояние счета</a></div>
</div>
</body>
<style>
html,body {
    height: 100%;
}
.block {
    width: 500px;
    height: 300px;
    margin: auto;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    position: absolute;
    border: 1px solid #e8e8e8;
    border-top: 2px solid #bfbfbf;
}

body {
    position: relative;
}

.block__txt {
    color: #595959;
    background: #fcfcfc;
    padding: 10px 15px;
    border-bottom: 1px solid #e8e8e8;
    border-top: 1px solid #e8e8e8;
    text-align: center;
}
.block__name {
    color: #666666;
    font-weight: bolder;
    margin-right: 10px;
}

.block__input {
    text-align: center;
    display: block;
    margin: 17px auto;
}

.button {
    margin: auto;
    color: #fff;
    background-color: #1e91cf;
    border-color: #1978ab;
    display: block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 8px 17px;
    font-size: 12px;
    line-height: 1.42857;
    border-radius: 3px;
    user-select: none;
    margin-bottom: 6px;
}
.input{
    padding: 8px 13px;
    color: #3a3434;
    font-weight: bolder;
   }
</style>
</html>
