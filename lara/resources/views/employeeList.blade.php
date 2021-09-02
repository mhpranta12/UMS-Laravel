<!DOCTYPE html>
<link rel="stylesheet" href="{{asset('style.css')}}"/>
<link rel="stylesheet" href="{{asset('my.css')}}"/>


<div class="content-body">


<!-- row -->
<center><hr>  <h1 class="card-title">Employee Lists</h4> <hr>   </center>
@include('layouts.navBar')

<p align="center">  <form method="POST" class="division">
                    @csrf
                        Name <br>
                            <input type="text" name="name" placeholder="Enter Name To Find Employee"> </input>   <input type="submit" class="btn" value="Search" style:width="100px"> </input>
</form>  </p>

                    <h4 class="card-title">All Employees : </h4>
                   
                        <table class="table" border="8">
                            <thead>

                            <tr>
                                <td><p align="center"> <b> ID </b> </p></td> 
                                <td> <p align="center"><b> Name </b> </p></td> 
                                <td><p align="center"><b>  Contact </b></p> </td> 
                                <td> <p align="center"><b> Email </b> </p> </td> 
                                <td> <p align="center"><b>  Date Of Birth  </b> </p> </td> 
                                <td colspan="2"> <p align="center"> <b>  Operations  </b> </p> </td> 
                             
                            </tr>
                            @foreach ($employeelist as $employee) 
    
                        <tr>
                                <td> <p align="center">{{$employee['id']}}</p> </td> 
                                <td> <p align="center">{{$employee['name']}}</p> </td> 
                                <td> <p align="center">{{$employee['contact']}}</p> </td> 
                                <td> <p align="center">{{$employee['email']}}</p> </td>
                                 <td> <p align="center"> {{$employee['dob']}} </p></td>
                                 <td> <a href="/employee/delete/{{$employee['id']}}"> <p align="center">   <input type="submit" class="errbtn" value="Delete" ></a></p> </td>
                                 <td> <a href="/employee/update/{{$employee['id']}}">  <p align="center">  <input type="submit" class="btn" value="Update" ></a> </p></td>
                              
                             
                        </tr>

                                @endforeach
                            </tfoot>
                                    </table>
                                </div>


    </htmnl>