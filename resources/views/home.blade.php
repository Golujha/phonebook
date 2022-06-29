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
                                <label for="" class="fw-bold">Contact1</label>
                                <input type="text" value="{{old('contact1')}}" name="contact1" placeholder="enter your contact1" class="form-control">
                                @error("contact1")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="fw-bold">Contact2</label>
                                <input type="text" value="{{old('contact2')}}" name="contact2" placeholder="enter your contact2" class="form-control">
                                @error("contact2")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="fw-bold">Email</label>
                                <input type="text" value="{{old('email')}}" name="email" placeholder="enter your email" class="form-control">
                                @error("email")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="fw-bold">City</label>
                                <input type="text" value="{{old('city')}}" name="city" placeholder="enter your city" class="form-control">
                                @error("city")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="fw-bold">Maths</label>
                                <input type="text" value="{{old('maths')}}" name="maths" placeholder="Obtained marks" class="form-control">
                                @error("maths")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="fw-bold">Sci</label>
                                <input type="text" value="{{old('sci')}}" name="sci" placeholder="Obtained marks" class="form-control">
                                @error("sci")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="fw-bold">Sst</label>
                                <input type="text" value="{{old('sst')}}" name="sst" placeholder="Obtained marks" class="form-control">
                                @error("sst")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="fw-bold">Hindi</label>
                                <input type="text" value="{{old('hindi')}}" name="hindi" placeholder="Obtained marks" class="form-control">
                                @error("hindi")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="fw-bold">Eng</label>
                                <input type="text" value="{{old('eng')}}" name="eng" placeholder="Obtained marks" class="form-control">
                                @error("eng")
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
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact1</th>
                        <th>Contact2</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Maths</th>
                        <th>Sci</th>
                        <th>Sst</th>
                        <th>Hindi</th>
                        <th>Eng</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    @foreach($students as $s)
                    <tr>
                        <td>{{$s->id}}</td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->contact1}}</td>
                        <td>{{$s->contact2}}</td>
                        <td>{{$s->email}}</td>
                        <td>{{$s->city}}</td>
                        <td>{{$s->maths}}</td>
                        <td>{{$s->sci}}</td>
                        <td>{{$s->sst}}</td>
                        <td>{{$s->hindi}}</td>
                        <td>{{$s->eng}}</td>
                        <td>
                            @php
                                 echo $total = $s->maths + $s->sci + $s->sst + $s->hindi + $s->eng;
                            @endphp
                        </td>
                        <td>
                            <a href="{{route('remove',['std_id'=> $s->id])}}" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i>Delete</a>
                            <a href="{{route('view',['roll'=> $s->id])}}" class="btn btn-success btn-sm"><i class="bi bi-view-list"></i>View</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    
</body>
</html>