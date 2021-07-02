<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News Stroies</title>
    <link href="{{asset('css/app.css')  }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
    </script>


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <form action="{{url('/edit/stories')  }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data['id'] ?? ''}}">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title"
                            value="{{ $data['title'] ?? '' }}">

                    </div>
                    <div class="form-group">
                        <label for="Body">Body</label>
                        <textarea name="body" class="form-control" id="body"
                            placeholder="body">{{ $data['body'] ?? '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="Publisher">Publisher Name</label>
                        <input type="text" name="publisher" class="form-control" id="publisher" placeholder="publisher">
                    </div>

                    <div class="form-group">
                        <label for="Datepicker">Published at</label>
                        <p>Date: <input name="published_date" class="form-control" type="text" id="datepicker">{{ $data['published_date'] ?? '' }}</p>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>





        </div>
    </div>
</body>

</html>

