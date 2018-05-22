<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/custom.css') }}">

        <title>Gallery upload</title>

    </head>
    <body>
        <h1 class="main-h1">Image upload gallery</h1>
		@include('partials/validation-messages')
		@include('image-gallery')
    </body>
</html>
