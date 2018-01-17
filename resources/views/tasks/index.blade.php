<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome
    </title>
  </head>
  <body>
    <ol>
      @foreach($tasks as $task)
        <li>
          <a href="/tasks/{{ $task->id }}"> {{ $task->body }} </a>
        </li>
      @endforeach
    </ol>
  </body>
</html>
