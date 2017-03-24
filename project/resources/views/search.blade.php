<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


@foreach($places as $place)
{{$place->city}}
@endforeach
<ul>
@foreach($events as $event)

 <li>  {{ $event->descrip }}  </li>
 <li>  {{ $event->start_at }}</li>
 <li>  {{ $event->end_at }}</li>
@endforeach
</ul>

</body>
</html>