<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Practice Network</title>
  @vite('resources/css/app.css')
</head>
<body>

  <header>
    <nav>
      <h1>Practice Network</h1>
      <a href="{{ route('member.index') }}">All Members</a>
      <a href="{{ route('member.create')}}">Create New Member</a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>