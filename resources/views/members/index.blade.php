<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Practice Network | Home</title>
</head>
<body>
  <h2>Currently Available Members</h2>
  
  @if($greeting == "Hi!")
    <p>Hi!</p>
  @endif

  <ul>
    @foreach ($members as $member)
        <li>
          <h2>{{$member['name']}}</h2>
          <a href="/members/{{$member['id']}}">View Details</a>
        </li>
    @endforeach
  </ul>
</body>
</html>