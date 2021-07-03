<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News Stories</title>
    <link href="{{asset('css/app.css')  }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <form action="{{url('/add/stories')  }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">

                    </div>
                    <div class="form-group">
                        <label for="Body">Body</label>
                        <textarea name="body" class="form-control" id="body" placeholder="body"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="Publisher">Publisher Name</label>
                        <input type="text" name="publisher" class="form-control" id="publisher" placeholder="publisher">
                    </div>

                    <div class="form-group">
                        <label for="Datepicker">Published at</label>
                        <p><input name="published_date" class="form-control" type="date" id="datepicker"></p>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>