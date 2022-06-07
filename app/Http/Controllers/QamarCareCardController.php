<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QamarCareCard;
use App\Models\AssignCareCardServices;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class QamarCareCardController extends Controller
{
  




public function __construct()
{
  $this-> middleware('auth', ['except' => ['Verify', 'Search']]);
}



  // index
    public function Index()
    {
      
      return view('QamarCardCard.Index');
    }

  






    // create
    public function Create()
    {
      
      return view('QamarCardCard.Create');
    }

    public function Store(Request $request)
    {
      
       $validator = $request->validate([
      'FirstName' => 'bail|required|max:255',
      'LastName' => 'required|max:255',
      'TazkiraID' => 'required|max:10',
      'QCC' => 'required|unique:qamar_care_cards|max:255',
      'Profile' => 'required|max:255',
      'DOB' => 'required|max:255',
      'Gender' => 'required|max:255',
      'Language' => 'required|max:255',
      'CurrentJob' => 'required|max:255',
      'FutureJob' => 'required|max:255',
      'EducationLevel' => 'required|max:255',
      'PrimaryNumber' => 'required|max:10',
      'SecondaryNumber' => 'required|max:10',
      'RelativeNumber' => 'required|max:10',
      'Province' => 'required|max:255',
      'District' => 'required|max:255',
      'Village' => 'required|max:255',
      'Email' => 'required|email|max:255',
      'FatherName' => 'required|max:255',
      'SpuoseName' => 'required|max:255',
      'EldestSonAge' => 'required|max:255',
      'MonthlyFamilyIncome' => 'required|max:10',
      'MonthlyFamilyExpenses' => 'required|max:10',
      'NumberFamilyMembers' => 'required|max:10',
      'IncomeStreem' => 'required|max:255',
      'LevelPoverty' => 'required|max:255',
      // 'Tazkira' => 'required|max:255',

      'RelativeNumber' => 'required|max:10',
      'RelativeRelationship' => 'required|max:255',
      'RelativeName' => 'required|max:255',
      'FamilyStatus' => 'required|max:255',
      'Country' => 'required|max:255',
      'Tribe' => 'required|max:255',

       ]);

  
    //    if ($validator->fails()) {
    //     $error = $validator->errors()->first();
    //  }
     

     
        QamarCareCard::create([
          'FirstName' => request('FirstName'),
          'LastName' => request('LastName'),
          'TazkiraID' => request('TazkiraID'),
          'QCC' => request('QCC'),
          'Profile' => request('Profile'),
          'DOB' => request('DOB'),
          'Gender' => request('Gender'),
          'Language' => request('Language'),
          'CurrentJob' => request('CurrentJob'),
          'FutureJob' => request('FutureJob'),
          'EducationLevel' => request('EducationLevel'),
          'PrimaryNumber' => request('PrimaryNumber'),
          'SecondaryNumber' => request('SecondaryNumber'),
          'EmergencyNumber' => request('EmergencyNumber'),
          'Province' => request('Province'),
          'District' => request('District'),
          'Village' => request('Village'),
          'Email' => request('Email'),
          'FatherName' => request('FatherName'),
          'SpuoseName' => request('SpuoseName'),
          'EldestSonAge' => request('EldestSonAge'),
          'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
          'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
          'NumberFamilyMembers' => request('NumberFamilyMembers'),
          'IncomeStreem' => request('IncomeStreem'),
          'LevelPoverty' => request('LevelPoverty'),
         'Tazkira' => request('Tazkira'),
          'Status' => 'Pending',
          'Created_By' => auth()->user()->name,

          'RelativeNumber' => request('RelativeNumber'),
          'RelativeRelationship' => request('RelativeRelationship'),
          'RelativeName' => request('RelativeName'),
          'FamilyStatus' => request('FamilyStatus'),
          'Country' => request('Country'),
          'Tribe' => request('Tribe'),
          'Owner' => 1,



          ]);

         return redirect()->route('AllQamarCareCard')->with('toast_success', 'Record Created Successfully!');

      


  

    }

















    // update
    public function Edit(QamarCareCard $data)
    {
     
      
      return view('QamarCardCard.Edit', ['data' => $data]);
    }

    public function Update(QamarCareCard $data )
    {
      
      $data -> update([

        'FirstName' => request('FirstName'),
        'LastName' => request('LastName'),
        'Email' => request('Email'),
        'PNumber' => request('PNumber'),
        'SNumber' => request('SNumber'),
        'Province' => request('Province'),
        'District' => request('District')

      ]);
      $qamarcarecards =   QamarCareCard::all();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }















     // Delete
     public function Delete(QamarCareCard $data)
     {
       
          $data->delete();
          return back()->with('success','Record deleted successfully');

     }

    








  

   // list
   public function All()
   {
     
     $qamarcarecards =   QamarCareCard::all();
     return view('QamarCardCard.All', compact('qamarcarecards'));
   }



    public function Approved()
    {
      
      $qamarcarecards =   QamarCareCard::where("Status", "=", 'Approved')->get();

      return view('QamarCardCard.All', compact('qamarcarecards'));
    }


    public function Rejected()
    {
      
      $qamarcarecards =   QamarCareCard::where("Status", "=", 'Rejected')->get();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }

       
 

         
    public function Pending()
    {
      
      $qamarcarecards =   QamarCareCard::where("Status", "=", 'Pending')->get();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }


    public function Released()
    {
      
      $qamarcarecards =   QamarCareCard::where("Status", "=", 'Released')->get();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }



  


    // status
    public function Status(QamarCareCard $data)
    {
      
      return view('QamarCardCard.Status',  ['data' => $data]);
    }

    public function Approve(QamarCareCard $data )
    {
      
      $data -> update([

        'Status' => 'Approved',
        'Status_By' => auth()->user()->name


      ]);
      return redirect()->route('ApprovedQamarCareCard')->with('toast_success', 'Record Approved Successfully!');

    }

    public function Reject(QamarCareCard $data )
    {
      
      $data -> update([
        'Status_By' => auth()->user()->name,

        'Status' => 'Rejected'

      ]);
      return redirect()->route('RejectedQamarCareCard')->with('toast_error', 'Record Rejected Successfully!');
    }


    public function ReInitiate(QamarCareCard $data )
    {
      
      $data -> update([
        'Status_By' => auth()->user()->name,

        'Status' => 'Pending'

      ]);
      return redirect()->route('PendingQamarCareCard')->with('toast_warning', 'Record Re-Initiated Successfully!');
    }


    

    public function Release(QamarCareCard $data )
    {
      
      $data -> update([
        'Status_By' => auth()->user()->name,

        'Status' => 'Released'

      ]);
      return redirect()->route('ReleasedQamarCareCard')->with('toast_warning', 'The card has been Printed!');
    }




    // print

    public function Printing(QamarCareCard $data )
    {
      
     
      return view('QamarCardCard.Printing', compact('data'));
    }

    public function Print(QamarCareCard $data )
    {
      
      $data -> update([
        'Status_By' => auth()->user()->name,

        'Status' => 'Printed'

      ]);
      return redirect()->route('PrintedQamarCareCard')->with('toast_warning', 'The card has been Printed!');
    }

    public function Printed()
    {
        
        $qamarcarecards =   QamarCareCard::where("Status", "=", 'Printed')->get();
        return view('QamarCardCard.All', compact('qamarcarecards'));
   }





   // services 

   public function AssigningService()
    {
      
      $qamarcarecards =   QamarCareCard::where("Status", "=", 'Released')->get();
      return view('QamarCardCard.AssigningService', compact('qamarcarecards'));
    }

    public function PendingServices(QamarCareCard $data)
    {
      $qamarcarecards =   AssignCareCardServices::where("Status", "=", 'Pending')->get();
      return view('QamarCardCard.AssigningService', compact('qamarcarecards'));
    }
   
    public function RecievedServices(QamarCareCard $data)
    {
      $qamarcarecards =   AssignCareCardServices::where("Status", "=", 'Recieved')->get();
      return view('QamarCardCard.AssigningService', compact('qamarcarecards'));
    }

    public function RejectedServices(QamarCareCard $data)
    {
      $qamarcarecards =   AssignCareCardServices::where("Status", "=", 'Rejected')->get();
      return view('QamarCardCard.AssigningService', compact('qamarcarecards'));
    }




    public function AssignToService(QamarCareCard $data)
    {
      $users =   User::all();
      
      return view('QamarCardCard.AssignToService', ['data' => $data, 'users' => $users]);
    }



 
    // public function AssignService(QamarCareCard $data )
    // {
      
    //   $data -> update([

    //     'FirstName' => request('FirstName'),
    //     'LastName' => request('LastName'),
    //     'Email' => request('Email'),
    //     'PNumber' => request('PNumber'),
    //     'SNumber' => request('SNumber'),
    //     'Province' => request('Province'),
    //     'District' => request('District')

    //   ]);
    //   $qamarcarecards =   QamarCareCard::all();
    //   return view('QamarCardCard.PendingServices', compact('qamarcarecards'));
    // }


    public function AssignService(Request $request)
    {
      
      //  $validator = $request->validate([
      // 'FirstName' => 'bail|required|max:255',
      // 'LastName' => 'required|max:255',
      // 'TazkiraID' => 'required|max:10',
      // 'QCC' => 'required|unique:qamar_care_cards|max:255',
      // 'Profile' => 'required|max:255',
      // 'DOB' => 'required|max:255',
      // 'Gender' => 'required|max:255',
      // 'Language' => 'required|max:255',
      // 'CurrentJob' => 'required|max:255',
      // 'FutureJob' => 'required|max:255',
      // 'EducationLevel' => 'required|max:255',
      // 'PrimaryNumber' => 'required|max:10',
      // 'SecondaryNumber' => 'required|max:10',
      // 'RelativeNumber' => 'required|max:10',
      // 'Province' => 'required|max:255',
      // 'District' => 'required|max:255',
      // 'Village' => 'required|max:255',
      // 'Email' => 'required|email|max:255',
      // 'FatherName' => 'required|max:255',
      // 'SpuoseName' => 'required|max:255',
      // 'EldestSonAge' => 'required|max:255',
      // 'MonthlyFamilyIncome' => 'required|max:10',
      // 'MonthlyFamilyExpenses' => 'required|max:10',
      // 'NumberFamilyMembers' => 'required|max:10',
      // 'IncomeStreem' => 'required|max:255',
      // 'LevelPoverty' => 'required|max:255',
      // // 'Tazkira' => 'required|max:255',

      // 'RelativeNumber' => 'required|max:10',
      // 'RelativeRelationship' => 'required|max:255',
      // 'RelativeName' => 'required|max:255',
      // 'FamilyStatus' => 'required|max:255',
      // 'Country' => 'required|max:255',
      // 'Tribe' => 'required|max:255',

      //  ]);

  
    //    if ($validator->fails()) {
    //     $error = $validator->errors()->first();
    //  }
     

     
    AssignCareCardServices::create([
          'FirstName' => request('FirstName'),
          'LastName' => request('LastName'),
          'TazkiraID' => request('TazkiraID'),
          'QCC' => request('QCC'),
          'Profile' => request('Profile'),
          'DOB' => request('DOB'),
          'Gender' => request('Gender'),
          'Language' => request('Language'),
          'CurrentJob' => request('CurrentJob'),
          'FutureJob' => request('FutureJob'),
          'EducationLevel' => request('EducationLevel'),
          'PrimaryNumber' => request('PrimaryNumber'),
          'SecondaryNumber' => request('SecondaryNumber'),
          'EmergencyNumber' => request('EmergencyNumber'),
          'Province' => request('Province'),
          'District' => request('District'),
          'Village' => request('Village'),
          'Email' => request('Email'),
          'FatherName' => request('FatherName'),
          'SpuoseName' => request('SpuoseName'),
          'EldestSonAge' => request('EldestSonAge'),
          'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
          'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
          'NumberFamilyMembers' => request('NumberFamilyMembers'),
          'IncomeStreem' => request('IncomeStreem'),
          'LevelPoverty' => request('LevelPoverty'),
         'Tazkira' => request('Tazkira'),
          'Status' => 'Pending',
          'Created_By' => auth()->user()->name,

          'RelativeNumber' => request('RelativeNumber'),
          'RelativeRelationship' => request('RelativeRelationship'),
          'RelativeName' => request('RelativeName'),
          'FamilyStatus' => request('FamilyStatus'),
          'Country' => request('Country'),
          'Tribe' => request('Tribe'),
          'Owner' => 1,



          ]);

         return redirect()->route('PendingServicesQamarCareCard')->with('toast_success', 'Record Assign Successfully!');

      


  

    }



       // update
       public function ServiceEdit(AssignCareCardServices $data)
       {
      $users =   User::all();
        
         
         return view('QamarCardCard.ServiceEdit', ['data' => $data,  'users' => $users]);
       }
   
       public function ServiceUpdate(AssignCareCardServices $data )
       {
         
         $data -> update([
   
           'FirstName' => request('FirstName'),
           'LastName' => request('LastName'),
           'Email' => request('Email'),
           'PNumber' => request('PNumber'),
           'SNumber' => request('SNumber'),
           'Province' => request('Province'),
           'District' => request('District')
   
         ]);
         $qamarcarecards =   QamarCareCard::all();
         return view('QamarCardCard.All', compact('qamarcarecards'));
       }

       


    public function ServiceDeleteDelete(AssignCareCardServices $data)
    {
      
         $data->delete();
         return back()->with('success','Record deleted successfully');

    }

    public function ServiceReleased(AssignCareCardServices $data )
    {
      
      $data -> update([
        'Status_By' => auth()->user()->name,

        'Status' => 'Recieved'

      ]);
      return redirect()->route('RecievedServicesQamarCareCard')->with('toast_warning', 'The card has been Printed!');
    }


    // public function ServiceReject(AssignCareCardServices $data )
    // {
      
    //   $data -> update([
    //     'Status_By' => auth()->user()->name,

    //     'Status' => 'Rejected'

    //   ]);
    //   return redirect()->route('RecievedServicesQamarCareCard')->with('toast_warning', 'The card has been Printed!');
    // }





   // Verify
   public function Verify()
   {
            $qamarcarecards = null;
            return view('QamarCardCard.Verify', compact('qamarcarecards'));
   }
  
   
   public function Search()
   {
      
      $qamarcarecards =   QamarCareCard::where("QCC", "=",  request('ID'))->get();
      return view('QamarCardCard.Verify', compact('qamarcarecards'));
   }


   

}
