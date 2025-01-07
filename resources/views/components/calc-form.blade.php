<form action="/calculator" method="POST">
  @csrf
  値:<input type="number" name="value">
  <button type="submit" name="calculate" value="plus">
    ＋
  </button>
  <button type="submit" name="calculate" value="minus">
    －
  </button>
  <button type="submit" name="calculate" value="multiplied">
    ×
  </button>
  <button type="submit" name="calculate" value="divided">
    ÷
  </button>
  <button type="submit" name="calculate" value="reset">
    リセット
  </button>
</form>