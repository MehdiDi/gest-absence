@extends('layouts.app')
@section('content')
<h1 class="text-center">Absences</h1>
{!! $calendar_details->calendar() !!}
{!! $calendar_details->script() !!}
@endsection

