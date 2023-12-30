<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Relationship</title>
  </head>
  <body>
   <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center my-3">Eloquent Relationship</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    {{-- <th>Name</th>
                    <th>Phone</th> --}}
                    {{-- <th>Title</th>
                    <th>Comments</th> --}}
                    {{-- //many to many --}}
                    {{-- <th>Title</th>
                    <th>Category</th> --}}
                    <th>Category</th>
                    <th>Post Title</th>
            



                    </tr>
                </thead>
                <tbody>
                  {{-- @foreach ($users as $data) --}}
                  {{-- @foreach ($posts as $data)  --}}
                  {{-- @foreach ($posts as $data)  --}}
                  @foreach ($categories as $data) 
                  <tr>
                   {{-- <td>{{$data->name}}</td>
                   <td>{{$data->phone->name}}</td> --}}

                  {{--  <td>{{$data->title}}</td> --}}
                  {{-- //one to many --}}
                  {{-- <td>{{$data->title}}</td>
                  <td>
                    @foreach($data->comments as $comment)
                    {{$comment->message}}
                    @endforeach
                   </td> --}}
                   {{-- //many to many --}}
                   {{-- <td>{{$data->title}}</td>
                  <td>
                    @foreach($data->categories as $cat)
                    {{$cat->name}}
                    @endforeach
                   </td> --}}
                   <td>{{$data->name}}</td>
                   <td>
                     @foreach($data->posts as $post)
                     {{$post->title}}
                     @endforeach
                    </td>
                  </tr>
                  @endforeach
                </tbody>


            </table>
        </div>
    </div>
   </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>