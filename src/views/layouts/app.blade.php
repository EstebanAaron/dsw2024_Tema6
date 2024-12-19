<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App</title>
</head>
<body>
  <nav>
    <ul>
      @include('layouts.menu')
    </ul>
  </nav>
  <h1>@yield('title')</h1>
  <main>
    @section('content')
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ipsum, deserunt reiciendis rem temporibus assumenda nostrum aperiam praesentium voluptates quos ab aliquid natus placeat magnam earum soluta laboriosam aut amet.</p>
    @show
  </main>
</body>
</html>