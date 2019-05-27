@extends('layouts.app')

@section('content')
  <div class="flex flex-col" style="height: calc(100vh - 75px - 1rem);">
    <div class="card flex-grow flex items-center justify-between">
      <h3><a href="/checkin">Weight</a></h3>
      <div class="bg-gray-200 border-2 border-blue-200 rounded-lg shadow-inner w-2/3 h-full"></div>
    </div>
    <div class="card flex-grow my-1 flex items-center justify-between">
      <h3><a href="/checkin">Calories</a></h3>
      <div class="bg-gray-200 border-2 border-blue-200 rounded-lg shadow-inner w-2/3 h-full"></div>
    </div>
    <div class="lg:hidden card flex-grow flex items-center justify-between">
      <h3><a href="/progress/weight">Progress</a></h3>
      <div class="bg-gray-200 border-2 border-blue-200 rounded-lg shadow-inner w-2/3 h-full"></div>
    </div>
  </div>
@endsection
