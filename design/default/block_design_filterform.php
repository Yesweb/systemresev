<form action="index.php?view=filres" name="filter" method="post">
	<label for="idmember">ID MMember</label>
	<select name="idmember">
		<option value=""></option>
		<option value="100000000001">100000000001</option>
		<option value="100000000002">100000000002</option>
	</select>
	<label for="tanggal">Tanggal</label>
	<select name="tanggal">
		<option value=""></option>
		<option value="2014-04-18">2014-04-18</option>
		<option value="2014-04-17">2014-04-17</option>
	</select>
	<label for="status">Status</label>
	<select name="status">
		<option value=""></option>
		<option value="1">Masuk</option>
		<option value="2">Keluar</option>
	</select>
	<label for="author">Author</label>
	<select name="author">
		<option value=""></option>
		<option value="admin">Admin</option>
		<option value="keluar">keluar</option>
	</select>
	<button type="submit">Search</button>
</form>