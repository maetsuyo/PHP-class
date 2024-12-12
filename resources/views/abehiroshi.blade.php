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

@section('form')
<form action="/abehiroshi" method="post">
  @csrf
  <p>名前:<input type="text" name="name"></p>
</form>
@endsection