<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome
    </title>
  </head>
  <body>
    <ul>
      @foreach($tasks as $task)
        <li>{{ $task }}</li>
      @endforeach
    </ul>
  </body>
</html>
