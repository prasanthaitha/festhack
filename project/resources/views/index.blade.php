<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
@foreach($events as $event)
<li>{{$event->descrip}}</li>
@endforeach
</ul></body>
</html>