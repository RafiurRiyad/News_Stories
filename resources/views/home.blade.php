@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="row">

                    <div class="col-md-12 col-sm-12 mb-5">
                        <h1 style="color:blue;">Stories</h1>
                        <a href="{{url('/add/stories')}}" class="btn btn-primary btn-sm">Add New Story</a>
                    </div>


                    @foreach ($data as $item)
                    <div class="col-md-6">
                        <h3>{{ $item['title'] }}<h4>
                                <p class="">
                                    {{ $item['body'] }}
                                    {{ $item['published_date'] }}
                                </p>
                                <a href="{{url('/edit/stories/'.$item['id'])  }}" class="btn btn-primary btn-sm">edit</a>
                                <a href="{{url('/delete/stories/'.$item['id'])  }}" class="btn btn-danger btn-sm">delete</a>
                                <hr>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
