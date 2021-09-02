<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Models\employeeModel;


class EmployeeController extends Controller
{
    public function createEmployee(Request $rq)
        {
            $error=false;
            $validation=Validator::make($rq->all(),
            [
                
                'name'=> 'required|min:3|max:50' ,
                'contact'=>'required|min:11',
                'dob'=>'required'
            ]
            );
            $validationemail=Validator::make($rq->all(),
            [
               
                'email'=>'email:rfc,dns'
            ]
            );
           
           
              if($validation->fails() || $validationemail->fails())
            {
               
                $error=true;

            }
            if ($error)
            {
                echo "Validations failed";
            }
            else
            {
       
       
            $user = new employeeModel;
            
            $user->name = $rq->name;
            $user->email = $rq->email;
            $user->contact = $rq->contact;
            $user->dob =  $rq->dob;
            $user->picture =  'null';
            $found= employeeModel::where('name',$rq->name)->first();
           
                $user->save();
                $list = employeeModel::all();
                if ($list != null)
                {
                    return redirect('/employee');

                }
               
        }
  }


  public function getAllEmployee()
  {

          $users = employeeModel::all();

         
      return view('employeeList')->with('employeelist',$users); 
  }
  public function searchEmployee(Request $rq)
  {
          $users = employeeModel::where('id',$rq->id);
        

         
      return view('employeeList')->with('employeelist',$users); 
  }
  public function updateEmployee(Request $rq)
    {
        $user = employeeModel::where('id',$rq->id) 
        ->first();
            $user->name = $rq->name;
            $user->email = $rq->email;
            $user->contact = $rq->contact;
            $user->dob =  $rq->dob;
            $user->picture =  'null';
    
    $user->save();


    $users = employeeModel::all();
    
    return view('employeeList')->with('employeelist',$users); 
    
    }
    public function updateEmployeeDetails($id)
    {
        $user= employeeModel::where('id', $id)
            ->first();
        
        return view('updateDetails')->with('userlist',$user); 
    }
    public function deleteEmployee($id)
    {
        $user=employeeModel::find($id)->delete();
        
        $users = employeeModel::all();
        return view('employeeList')->with('employeelist',$users); 
    }
}
