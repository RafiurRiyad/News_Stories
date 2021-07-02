@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Story List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="col-md-12 col-sm-12 mb-5">

                    <div class="col-md-12 col-sm-12 mb-5">
                        <h1 style="color:Green;">Stories</h1>
                        <a href="{{url('/add/stories')}}" class="btn btn-primary btn-sm">Add New Story</a>
                    </div>


                    @foreach ($data as $item)
                    <div class="col-md-12 col-sm-12 mb-5">
                        <h3 style="color:blue;">{{ $item['title'] }}<h3>
                        <p class="col-md-6">
                            by {{$item['publisher']}} on {{$item['published_date']}}
                        </p>

                        <p class="">
                            {{ $item['body'] }}
                        </p>

                        <a class="btn btn-danger btn-sm float-right mr-2" onclick="return myFunction();" href="{{url('/delete/stories/'.$item['id'])}}">delete</a>

                        <a class="btn btn-primary btn-sm float-right mr-2" href="{{url('/edit/stories/'.$item['id'])  }}">edit</a>

                        <a class="btn btn-secondary btn-sm float-left mr-2" href="{{url('api/json-api/'.$item['id'])}}">JSON</a>

                        <a class="btn btn-secondary btn-sm float-left mr-2" href="{{url('api/xml-api/'.$item['id'])}}">XML</a>
                    
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
