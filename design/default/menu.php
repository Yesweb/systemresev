<div class="menucontainer" style="border:solid 0px red;">
	<h3>Checkin/Checkout</h3>
	<b>Input ID Member</b>
	<form action="" method="get">
		<input type="hidden" name="view" value="input">
		<input type="text" name="memberid" value="">
		<input type="hidden" name="term" value="900">
		<input type="hidden" name="termstat" value="3">
		<input class="submitbutton" type="submit" value="Submit">
	</form>
	<h3>Manage</h3>
	<ul>
		<li>
		Register ID Card:
		<form action="" method="get">
			<input type="hidden" name="view" value="register">
			<input type="text" name="memberid" value="">
			<input class="submitbutton" type="submit" value="Register">
		</form>
		</li>
		<li>
		Aktivasi ID Card:
		<form action="" method="get">
			<input type="hidden" name="view" value="aktivasi">
			<input type="text" name="memberid" value="">
			<input class="submitbutton" type="submit" value="Aktivkan">
		</form>
		</li>
		<li><a href="?view=memberlist">Daftar ID Card</a></li>
	</ul>
</div>