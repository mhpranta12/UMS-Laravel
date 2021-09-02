<link rel="stylesheet" href="{{asset('my.css')}}"/>



<center> <h1 class="card-title"> <hr>  Add Employee <hr> </h1> </center>


@include('layouts.navBar')


       
            
</div>
        </ol>
    </div>
</div>



                    <h4 class="card-title"> Add Employee </h4>
                    <div class="table-responsive">
                   
                   <p align="center">  <form method="POST" class="division">
                    @csrf
                        Name <br>
                            <input type="text" name="name" placeholder="Enter Name"> </input><hr> <br>
                        Contact   <br>
                            <input type="text" name="contact" placeholder="Enter Contact"> </input><hr> <br>

                        
                        Email <br>
                                <input type="email"name="email" placeholder="Enter Email"> </input><hr> <br>
                        Date of Birth <br>
                                <input type="date"name="dob" > </input><hr> <br>
                               
                        Profile Picture <br>
                                <input type="file"name="pic" placeholder="Enter Email"> </input><hr> <br>
                                <input type="submit" class="btn" value="Add Employee" style:width="100px"> </input>
</form>  </p>

                                </div>
                         
                </div>
            </div>
        </div>