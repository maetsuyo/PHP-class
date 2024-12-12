<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @php
  $num = 6;
  @endphp

  @if ($num <= 4)
  <p>数字は{{$num}}です。</p>
  @else
  <p>数字は5以上です。</p>
  @endif
</body>
</html>