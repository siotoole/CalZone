@extends('layouts/app')
@section('content')
  <h1>Your Progress</h1>
  <ul>
    @forelse ($weightProgress as $dataPoint)
      <li>{{ $dataPoint->weight }}</li>
    @empty
      <li>Check-in first to view your progress!</li>
    @endforelse
  </ul>
  <a href="/home">Go Back</a>
@endsection
