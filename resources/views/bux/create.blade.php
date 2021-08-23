@extends('layouts.app')
@section('content')

<div class="wrapper create-pizza full-height">
  <h1>Create a New Finance</h1>
  <form action="/bux" method="POST">
    @csrf
    
    <!-- <label for="type">Тип:</label>
    <select name="text" id="type">
      <option value="income">Доход</option>
      <option value="cost">Расход</option>
    </select> -->
    <!-- <fieldset>
      <label>Тип:</label><br>
      <input type="checkbox" name="type[]" id="income" value="income">Доход<br>
      <input type="checkbox" name="type[]" id="cost" value="cost">Расход<br>

    </fieldset> -->
    <label for="type">Тип:</label>
    <select name="type" id="type">
      <option value="Доход">Доход</option>
      <option value="Расход">Расход</option>
    </select>

    <label for="category">Категория:</label>
    <input type="text" name="category" id="category" required>

    <label for="sum">Сумма:</label>
    <input type="number" name="sum" id="sum" required>

    <label for="comment">Комментария:</label>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    <input type="submit"  class="link" value="Отправит">
  </form>

  <a class="link" id="center" href="../">Back to Home page</a>
</div>
@endsection