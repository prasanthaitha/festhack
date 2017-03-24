<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="/reports" method="post">
{{csrf_field()}}
Name:
<input type="text" name="pname" >
Mail-id:
<input type="text" name="pmail">
Contact:
<input type="integer" name="pmobile">
description:
<textarea name="descr"></textarea>
city:
<input type="text" name="city">
state:
<input type="text" name="state">
zipcode:
<input type="integer" name="zip">
suggestions:
<textarea name="suggest"></textarea>

<input type="submit" value="submit">
</form>


</body>
</html>
