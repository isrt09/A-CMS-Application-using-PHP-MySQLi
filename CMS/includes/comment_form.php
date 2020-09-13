<form action="details.php?id=<?php echo $post_id; ?>" method="post">
	<h2 align="center">Post a Comment</h2>
	<table border="2px solid#000" bgcolor="#96CCCC" align="center" width="700">
		<tr>
			<td>Name :</td>
			<td><input type="text" name="comment_name"></td>
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="comment_email"></td>
		</tr>
		<tr>
			<td>Comment :</td>
			<td><textarea name="comment_content" id="" cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="comment" value="Comment"></td>
		</tr>
	</table>
</form>	