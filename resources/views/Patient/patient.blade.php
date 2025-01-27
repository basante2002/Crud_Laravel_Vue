@extends('components/plantilla')


@section('body')
    <div id="app">

        <patient-table></patient-table>

    </div>

    @vite(['resources/js/app.js'])
@endsection
