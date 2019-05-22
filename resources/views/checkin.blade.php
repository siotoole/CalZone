<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>
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
</body>
</html>