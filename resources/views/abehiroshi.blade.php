@extends('layout.leftSidebar')

@section('title', '阿部 寛のホームページ')

@section('sidebar')
  <p><a href="top.htm" target="right">トップ</a></p>
  <p><a href="tv/tv.htm" target="right">ドラマ出演</a></p>
  <p><a href="stage/butai.htm" target="right">舞台出演</a></p>
  <p><a href="photo/photo.htm" target="right">写真集</a></p>
  <p><a href="essay/essay.htm" target="right">出版本</a></p>
  <p><a href="kanri/kanri.htm" target="right">管理者</a></p>
@endsection

@section('ProfileCard')
  <x-ProfileCard name="阿部寛">
@endsection

@section('form')
<form action="/abehiroshi" method="POST">
  @csrf
  <p>path:<input type="text" name="path"></p>
</form>
  @isset($path)
    @for ($i=1; $i<=5; $i++)
      @if ($i == 1)
        <p>入力されたpathは{{ $path }}です。{{ $i }}回目</p>
      @elseif ($i == 2)
        @continue
      @elseif ($i == 3)
        <p>入力されたpathは{{ $path }}です。{{ $i }}回目</p>
      @elseif ($i == 4)
        @break
      @else
        <p>入力されたpathは{{ $path }}です。{{ $i }}回目</p>
      @endif
    @endfor
  @endisset
@endsection