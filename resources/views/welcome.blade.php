<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')

    </head>
    <body class="font-sans antialiased p-12">
        {{-- @livewire('Playground') --}}
        <div class="flex">
            {{-- @livewire('UserList', ['lazy' => true]) --}}
            <livewire:UserList lazy/>
            @livewire('UserForm')
        </div>
    </body>
</html>
