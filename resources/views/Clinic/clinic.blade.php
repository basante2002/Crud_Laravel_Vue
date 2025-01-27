@extends('components/plantilla')

@section('body')
    
<div id="app">

<clinic-table></clinic-table>

</div>

@vite(['resources/js/app.js'])
@endsection