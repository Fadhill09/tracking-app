<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Drifer
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a class="dropdown-item d-flex align-items-center" href="route('logout')"
        onclick="event.preventDefault();
                this.closest('form').submit();">
      <i class="bi bi-box-arrow-right"></i>
      <span>Sign Out</span>
    </a>
    </form>
</body>
</html>
