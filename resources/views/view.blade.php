<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHONE BOOK</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid mt-4 ">
        <div class="row">
            <div class="col-lg-6 mx-auto">
            <h5 class="text-center fw-bold mt-3">BIHAR SCHOOL EXAMINATION BOARD, PATNA</h5>
            <h5 class="text-center fw-bold mt-1">ANNUAL SECONDARY SCHOOL EXAMINATION RESULT 2022</h5>
                
                <table class="table table-bordered border-dark">
                    <tr>
                        <th colspan="4" class="text-center bg-danger text-light">Personal Details</th>
                    </tr>
                    <tr>
                        <th colspan="2" class=" text-dark">College Name =></th>
                        <th colspan="2" class=" text-dark">Purnea College Purnea</th>
                    </tr>
                    <tr>
                        <th colspan="2">Name</th>
                        <th colspan="2">{{$student->name}}</th>
                    </tr>
                    <tr>
                        <th colspan="2">Contact1</th>
                        <th colspan="2">{{$student->contact1}}</th>
                    </tr>
                    <tr>
                        <th colspan="2">Contact2</th>
                        <th colspan="2">{{$student->contact2}}</th>
                    </tr>
                    <tr>
                        <th colspan="2">Email</th>
                        <th colspan="2">{{$student->email}}</th>
                    </tr>
                    <tr>
                        <th colspan="2">City</th>
                        <th colspan="2">{{$student->city}}</th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center bg-danger text-light">Mark Details</th>
                    </tr>
                    <tr>
                        <th>Subject Name</th>
                        <th>Total Marks</th>
                        <th>Pass Marks</th>
                        <th>Obtained Marks</th>
                    </tr>
                    <tr>
                        <td>Maths</td>
                        <td>100</td>
                        <td>30</td>
                        <td>{{$student->maths}}</td>
                    </tr>
                    <tr>
                        <td>Sst</td>
                        <td>100</td>
                        <td>30</td>
                        <td>{{$student->sst}}</td>
                    </tr>
                    <tr>
                        <td>Sci</td>
                        <td>100</td>
                        <td>30</td>
                        <td>{{$student->sci}}</td>
                    </tr>
                    <tr>
                        <td>Hindi</td>
                        <td>100</td>
                        <td>30</td>
                        <td>{{$student->hindi}}</td>
                    </tr>
                    <tr>
                        <td>Eng</td>
                        <td>100</td>
                        <td>30</td>
                        <td>{{$student->eng}}</td>
                    
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center bg-danger text-light">Final Result</th>
                    </tr>
                    <tr>
                        <th colspan="2" class="fw-bold">Result/Division:</th>
                        <th colspan="1" class="fw-bold">Total Marks</th>
                        <td>
                            
                        @php
                            echo $total = $student->maths + $student->sci + $student->hindi + $student->eng + $student->sst;
                            @endphp
                        </td>
                    </tr>
                    <tr>
                        <td>Music</td>
                        <td>100</td>
                        <td>30</td>
                        <td>55</td>
                        
                    </tr>
                </table>
                <a href="#" onclick="window.print();" class="btn btn-success d-print-none" style="margin-left:600px;font-size:25px;">Print</a>
            </div>
        </div>
    </div>
    
</body>
</html>