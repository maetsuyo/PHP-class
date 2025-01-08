<form action="/component" method="POST">
  @csrf
  名前:<input type="text" name="name">
  @error('name')
    <div>{{ $message }}</div>
  @enderror
  年齢:<input type="number" name="age">
  @if($errors->has('age'))
    {{ $errors->first('age') }}
  @endif
  性別:
  <input type="radio" name="gender" value="male">男性
  <input type="radio" name="gender" value="female">女性
  @error('gender')
    <div>{{ $message }}</div>
  @enderror

  @if ($errors->any())
    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <button type="submit">
    送信
  </button>
</form>