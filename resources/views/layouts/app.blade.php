<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/assets/calendar/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.min.js"></script>
    {{-- <script src="{{ asset('/assets/calendar/js/script.js') }}"></script> --}}
    
    
    <title>Calendario</title>
    @livewireStyles
</head>
<body>
    @section('body-calendar')
    
    @livewire('calendario')

    @section('script-calendar')

    @livewireScripts
</body>
</html>