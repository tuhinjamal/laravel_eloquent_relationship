<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Table join example</title>
  </head>
  <body>
    
    <div class="row">
    <div class=" col-md-4 col-sm-4 col-lg-4"></div>
    <div class=" col-md-4 col-sm-4 col-lg-4 ">
    <h1 class="text-center mt-4">Relationship</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th class="text-center">Country</th>
                <th class="text-center">Total Post</th>
                
                
                </tr>
            </thead>
            <tbody>
                @foreach($countries as $data)
                    <tr>
                    <td class="text-center">{{$data->name}}</td>
                    <td class="text-center">{{$data->posts->count()}}</td>
                    @foreach($data->posts as $post)  
                    <td class="text-center">{{$post->title}}</td>    
                    @endforeach
                    <td class="text-center">{{$data->users->name}}</td>  
                     

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class=" col-md-4 col-sm-4 col-lg-4"></div>
    


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>