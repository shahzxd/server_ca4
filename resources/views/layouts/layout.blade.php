<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>{{ $title ?? 'Laravel CRUD' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 dark:bg-gray-800 h-screen flex items-center justify-center transition duration-500">
        {{ $slot }}
    </body>
</html>