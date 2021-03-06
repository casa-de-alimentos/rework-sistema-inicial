<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="theme-color" content="#000000" />
		<meta
			name="description"
			content="Página web oficial de La Candelaria Tumero, donde los estudiantes pueden las noticias publicadas por la institución y gestionar diferentes acciones."
		/>
		<link rel="icon" href="{{ secure_asset('resources/favicon.png') }}" />
    <link rel="apple-touch-icon" href="{{ secure_asset('resources/favicon.png') }}" />
		<!--
			manifest.json provides metadata used when your web app is installed on a
			user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
		-->
		<link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
		<!--
			Notice the use of %PUBLIC_URL% in the tags above.
			It will be replaced with the URL of the `public` folder during the build.
			Only files inside the `public` folder can be referenced from the HTML.

			Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
			work correctly both with client-side routing and a non-root public URL.
			Learn how to configure a non-root public URL by running `npm run build`.
		-->
		<title>{{ config('app.name', 'Laravel') }}</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Font --->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
	</head>
	<body>
		<noscript>Necesitas activar JavaScript para poder ver esta App.</noscript>
		<div id="root"></div>
	</body>
</html>