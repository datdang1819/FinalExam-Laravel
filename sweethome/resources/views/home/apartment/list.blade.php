@extends('layouts.master', ['currentPage' => 'layouts.master'])
@section('page-title', 'List Bakery - Admin Page')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            @foreach($list_obj as $item)
            <div class="col-md-4" style="margin-bottom: 4%">
                <a href="#">
                    <img src="{{$item-> images}}" alt="" width="200" height="250">
                </a>
                <p>{{$item->name}}</p>
                <p>Giá: {{$item->price}}</p>
                <p>{{$item->information}}</p>
            </div>
            @endforeach
        </div>
    </div>
    {{ $list_obj->links() }}
</div>
@endsection