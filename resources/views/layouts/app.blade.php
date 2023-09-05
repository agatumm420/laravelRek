<!DOCTYPE html>
<html>
<head>
    <title>Livewire App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/1L_dstPt3HV5HzF6Gvk/e3RBE0XjRVaz5Ie5JbF" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
{{ $slot }}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-UmV3eSu5Tg4iPvLaarh9h1Rwzp1BFL6ycvFBSnObk3FtAqPA4uB1YkKAuCTZwrOu" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts

</body>
</html>
