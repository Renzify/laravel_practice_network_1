<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Practice Network | Home</title>
</head>
<body>
  <h2>Currently Available Members</h2>
  <h3>{{ $greeting }}</h3>

  <ul>
    <li>
      <a href="/members/{{$members[0]["id"]}}">
        {{$members[0]["name"]}}
      </a>
    </li>

    <li>
      <a href="/members/{{$members[1]["id"]}}">
        {{$members[1]["name"]}}
      </a>
    </li>
  </ul>
</body>
</html>