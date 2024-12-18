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

  $datas = [
    1 => 'Apple',
    2 => 'Banana',
    3 => 'Cherry',
  ];
  @endphp

  @if ($num <= 4)
  <p>数字は{{$num}}です。</p>
  @else
  <p>数字は5以上です。</p>
    @switch ($num)
      @case (5)
        <p>また、5です。</p>
        @break
      @case (6)
        <p>また、6です。</p>
        @break
      @case (7)
        <p>また、7です。</p>
        @break
    @endswitch
  @endif
  <p>1から{{ $num }}まで表示します。</p>
  @for ($i=1; $i<=$num; $i++)
    {{ $i }}
  @endfor

  @foreach ($datas as $data)
    @if ($loop->last)
      <p>{{ $data }}</p>
      <p>ここまでです。</p>
    @else
      <p>{{ $data }}</p>
    @endif
  @endforeach
</body>
</html>