@extends('layouts/app')
@section('content')
  <h1>Weight Check-In</h1>
  <form method="POST" action="/checkin/weight">
    @csrf
    <div>
      <label for="weight">Weight</label>
      <input id="weight" type="number" name="weight" step="0.01" min="0" required>
    </div>
    <div>
      <button type="submit">Check In!</button>
    </div>
  </form>
  <h1>Calorie Check-In</h1>
  <form method="POST" action="/checkin/calories">
    @csrf
    <div>
      <label for="calories">Calories</label>
      <input id="weight" type="number" name="calories" min="0" required>
    </div>
    <div>
      <button type="submit">Check In!</button>
    </div>
  </form>
  <a href="/home">Go Back</a>
@endsection
