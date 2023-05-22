<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('/partials/head_html')
    <body class="bg-body">
        @include('/partials/navbar')
        @include('/partials/main')
    </body>
</html>
