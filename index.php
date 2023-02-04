<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dailychallenge</title>
    </head>
    <body>
    <h1>Favourite Colours</h1>
  <!--
- Create a form that accept name as well as colors
- After submission, form data will be sent to another page
- Display select colors (as a list) and user name
User name & colors selection is mandatory-->    
	<form action="favouritecolor.php" method="post">
		Username: <input type="text" name="username" placeholder="enter your name" required/><br/><br/>
		Select your favourite colors:<br/>
		pink<input type="checkbox" name="list[]" value="pink"/><br/>
		indigo<input type="checkbox" name="list[]" value="indigo"/><br/>
		yellow<input type="checkbox" name="list[]" value="yellow"/><br/>
		orange<input type="checkbox" name="list[]" value="orange"/><br/>
		blue<input type="checkbox" name="list[]" value="blue"/><br/>
		red<input type="checkbox" name="list[]" value="red"/><br/>
		green<input type="checkbox" name="list[]" value="green"/><br/><br/>
		<input type="submit" name="submit" value="Submit"/><br/>
	</form>
</body>
</html>


     
</body>
</html>