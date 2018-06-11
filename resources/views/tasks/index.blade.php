@extends('layouts.app')

@section('content')
 
  
            <div class="panel col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-offset-3 col-lg-6">
                <div class="panel-heading">
                    <h3 class="panel-title"> Task 一覧</h3>
                </div>
            </div>
    
   <div class="row">
     <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-offset-3 col-lg-6">
       <table class="table table-condensed table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id , ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>      
    <div class="form-group col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-offset-3 col-lg-6">
      {!! link_to_route('tasks.create', '新規タスク投稿', null, ['class' => 'btn btn-primary btn-block']) !!}
    </div>

@endsection