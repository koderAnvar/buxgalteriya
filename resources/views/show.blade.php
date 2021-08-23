<!-- @extends('layouts.app') 
    @section('content') 
   ct <div class="container">
    <div class="show" > 
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
            @foreach($data as $el)
              <tr>
                @foreach($data ->type->array() as $es)
                <td scope = "col">{{$es}}</td>
                @endforeach
                <td scope = "col">{{$data->category}}</td>
                <td scope = "col">{{$data->created_at->toDateString()}}</td>
                <td scope = "col">{{number_format($data->sum,2,'.', ' ')}}</td>
                <td scope = "col">{{$bux->type}}</td>
                <td scope = "col">{{$data->comment}}</td>
              </tr>
            @endforeach
          </tbody>

        </table>
        <form aion="/bux/{{ $bux->id }}" method="POST">   
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
</form>
  

    </div>
    
    <a href="/bux" class="back"><- Back to all pizzas</a>
</div>
        @endsection -->