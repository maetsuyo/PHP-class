<form action="/component" method="POST">
  @csrf
  名前:<input type="text" name="name">
  年齢:<input type="number" name="age">
  性別:
  <input type="radio" name="gender" value="male">男性
  <input type="radio" name="gender" value="female">女性
  <button type="submit">
    送信
  </button>
</form>