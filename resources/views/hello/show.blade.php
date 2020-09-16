@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
  @parent
@endsection

@section('content')
  @if ($item != null)
    @foreach ($item as $item)
    <table width="400px">
      <tr><th width="50px">id: </th>
      <td>{{$item->id}}</td>
      <th width="50px">name: </th><td>{{$item->name}}</td>
    </tr>
    </table>
    @endforeach
  @endif
@endsection

@section('footer')
copyright 2020 suke.
@endsection