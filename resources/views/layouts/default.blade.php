<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>{{ page_title($title ?? '')}}</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<style type="text/css">
	body{
		font-family: 'Open Sans', sans-serif;
	}
	footer{
		margin-top: 4em;
		margin-bottom: 4em;
	}
  .body{
     margin-top: 4%;
  }
</style>
<body>

@include('layouts/partials/_nav')
  
  <div class="body">
@yield('content')
</div>

@include('layouts/partials/_footer')
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>