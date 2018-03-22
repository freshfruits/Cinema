@section('header')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Mega nice Biograf">
        <meta name="author" content="Jakob">

       <title>{{ config('app.name') }}</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
@endsection