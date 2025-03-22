<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Practice Network</title>
</head>
<body>

  <header>
    <nav>
      <h1>Practice Network</h1>
      <a href="/members">All Members</a>
      <a href="/members/create">Create New Member</a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>