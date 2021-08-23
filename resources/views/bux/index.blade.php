@extends('layouts.app')
@section('content')
<div class="container">
<div class="show"> 
<table class="table">
          <thead>
            <tr>
              <th scope="col">Тип</th>
              <th scope="col">Категория</th>
              <th scope="col">Дата</th>
              <th scope="col">Сумма</th>
              <th scope="col">Итого</th>
              <th scope="col">Коментария</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $data)
              <tr>
                
                <td scope = "col">{{$data->type}}</td>
                <td scope = "col">{{$data->category}}</td>
                <td scope = "col">{{$data->created_at}}</td>
                <td scope = "col">{{number_format($data->sum,2,'.', ' ')}}</td>
                <td scope = "col">{{number_format($total,2,'.', ' ')}}</td>
                <td scope = "col">{{$data->comment}}</td>
              </tr>
            @endforeach
          </tbody>
</table>
  

      <a class="link"  id="center" href="../">Back to Home page</a>
</div>
</div>
@endsection