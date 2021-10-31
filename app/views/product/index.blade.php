@extends('layouts.main')
@section('title', 'Danh sách sản phẩm') 
@section('main-content')
    <table class="table table-hovered">
        <thead>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Tên danh mục</th>
        </thead>
        <tbody>
        
            @foreach ($products as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->category->cate_name}}</td>
                   
                </tr>                
            @endforeach
        </tbody>
    </table>
@endsection