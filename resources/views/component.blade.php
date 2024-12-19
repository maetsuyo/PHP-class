<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <x-form />

  @isset($user)
    <x-profile
      :name="$user['name']"
      :age="$user['age']"
      :gender="$user['gender']"
    />
  @endisset
</body>
</html>