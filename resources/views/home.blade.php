<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneBook</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
        <div class="container">
            <a href="" class="navbar-brand fw-bold"><u>PHONE BOOK</u></a>
        </div>
    </nav>
        <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                @if(session("msg"))
                <div class="alert alert-success text-danger">
                    {{session("msg")}}
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="<?= route('store');?>" method="post">
                        @csrf
                            <div class="mb-3">
                                <label for="" class="fw-bold">Name</label>
                                <input type="text" value="{{old('name')}}" name="name" placeholder="enter your name" class="form-control">
                                @error("name")
                                    <p class="text-small fw-bold text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="fw-bold">Contact</label>
                                <input type="text" value="{{old('contact')}}" name="contact" placeholder="enter your contact" class="form-control">
                                @error("contact")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-danger w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-9">
                @if(session("error"))
                <div class="alert alert-danger">{{session("error")}}</div>
                @endif
                <table class="table table-bordered table-striped">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Contact</th>
                        <th class="text-center">Action</th>
                        
                    </tr>
                    @foreach($students as $s)
                    <tr>
                        <td class="text-center">{{$s->id}}</td>
                        <td class="text-center">{{$s->name}}</td>
                        <td class="text-center">{{$s->contact}}</td>

                        <td>
                           
                            <a href="{{route('remove',['std_id'=> $s->id])}}" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i>Delete</a>
                            <a href="" class="btn btn-success btn-sm"><i class="bi bi-view-list"></i>View</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    
</body>
</html>