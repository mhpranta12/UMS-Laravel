    
    <link rel="stylesheet" href="{{asset('my.css')}}"/>


    @include('layouts.navBar')

<center> <h1 class="card-title"> Update Employee  </h1> </center>


    
<div class="division">
            <ul type="circle">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="/addemployee"> Add Employee</a></li>
</div>


               
                <form method="POST" class="division">
                @csrf
                ID <br>
                        <input type="text" name="id" value="{{$userlist['id']}}"> </input><hr> <br>
                    Name <br>
                        <input type="text" name="name" value="{{$userlist['name']}}"> </input><hr> <br>
                        Contact   <br>
                            <input type="text" name="contact" placeholder="Enter Contact"  value="{{$userlist['contact']}}" >  </input><hr> <br>

                        
                        Email <br>
                                <input type="email"name="email" placeholder="Enter Email"  value="{{$userlist['email']}}"> </input><hr> <br>
                        Date of Birth <br>
                                <input type="date"name="dob"  > </input><hr> <br>
                                       
                                    </select><hr> <br>
                        <input type="submit" class="btn" value="Update Employee" style:width="100px"> </input>
</form>  

                           