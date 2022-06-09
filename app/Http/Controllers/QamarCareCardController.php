<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QamarCareCard;
use App\Models\AssignCareCardServices;
use App\Models\ServiceType;
use App\Models\ServiceProviders;

use App\Models\Location;
use App\Models\LookUp;

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

      $countries =   LookUp::where("Parent_Name", "=", "Country")->get();
      $genders =   LookUp::where("Parent_Name", "=", "Gender")->get();
      $tribes =   LookUp::where("Parent_Name", "=", "Tribe")->get();
      $languages =   LookUp::where("Parent_Name", "=", "Language")->get();
      $currentjobs =   LookUp::where("Parent_Name", "=", "CurrentJob")->get();
      $futurejobs =   LookUp::where("Parent_Name", "=", "FutureJob")->get();
      $educationlevels =   LookUp::where("Parent_Name", "=", "EducationLevel")->get();
      $relationships =   LookUp::where("Parent_Name", "=", "RelativeRelationship")->get();
      $incomestreams =   LookUp::where("Parent_Name", "=", "IncomeStream")->get();
      $familystatus =   LookUp::where("Parent_Name", "=", "FamilyStatus")->get();
      $provinces = Location::whereNull("Parent_ID")->get();

      



      
      return view('QamarCardCard.Create', ['countries' => $countries,'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
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
      'Gender_ID' => 'required|max:255',
      'Language_ID' => 'required|max:255',
      'CurrentJob_ID' => 'required|max:255',
      'FutureJob_ID' => 'required|max:255',
      'EducationLevel_ID' => 'required|max:255',
      'PrimaryNumber' => 'required|max:10',
      // 'SecondaryNumber' => 'required|max:10',
      'RelativeNumber' => 'required|max:10',
      'Province_ID' => 'required|max:255',
      'District_ID' => 'required|max:255',
      'Village' => 'required|max:255',
      // 'Email' => 'required|email|max:255',
      'FatherName' => 'required|max:255',
      'SpuoseName' => 'required|max:255',
      'EldestSonAge' => 'required|max:255',
      'MonthlyFamilyIncome' => 'required|max:10',
      'MonthlyFamilyExpenses' => 'required|max:10',
      'NumberFamilyMembers' => 'required|max:10',
      'IncomeStreem_ID' => 'required|max:255',
      'LevelPoverty' => 'required|max:255',
      // 'Tazkira' => 'required|max:255',

      'RelativeNumber' => 'required|max:10',
      'RelativeRelationship_ID' => 'required|max:255',
      'RelativeName' => 'required|max:255',
      'FamilyStatus_ID' => 'required|max:255',
      'Country_ID' => 'required|max:255',
      'Tribe_ID' => 'required|max:255',

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
          'Gender_ID' => request('Gender_ID'),
          'Language_ID' => request('Language_ID'),
          'CurrentJob_ID' => request('CurrentJob_ID'),
          'FutureJob_ID' => request('FutureJob_ID'),
          'EducationLevel_ID' => request('EducationLevel_ID'),
          'PrimaryNumber' => request('PrimaryNumber'),
          'SecondaryNumber' => request('SecondaryNumber'),
          'RelativeNumber' => request('RelativeNumber'),
          'Province_ID' => request('Province_ID'),
          'District_ID' => request('District_ID'),
          'Village' => request('Village'),
          'Email' => request('Email'),
          'FatherName' => request('FatherName'),
          'SpuoseName' => request('SpuoseName'),
          'EldestSonAge' => request('EldestSonAge'),
          'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
          'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
          'NumberFamilyMembers' => request('NumberFamilyMembers'),
          'IncomeStreem_ID' => request('IncomeStreem_ID'),
          'LevelPoverty' => request('LevelPoverty'),
         'Tazkira' => request('Tazkira'),
          'Status' => 'Pending',
          'Created_By' => auth()->user()->name,

          'RelativeNumber' => request('RelativeNumber'),
          'RelativeRelationship_ID' => request('RelativeRelationship_ID'),
          'RelativeName' => request('RelativeName'),
          'FamilyStatus_ID' => request('FamilyStatus_ID'),
          'Country_ID' => request('Country_ID'),
          'Tribe_ID' => request('Tribe_ID'),
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
     
    //  $qamarcarecards =   QamarCareCard::all();

     $qamarcarecards =   QamarCareCard::join('locations as a','qamar_care_cards.Province_ID', '=', 'a.id')
                                            ->join('locations as b','qamar_care_cards.District_ID', '=', 'b.id')
                                            // ->join('LookUp as c','qamar_care_cards.Education_ID', '=', 'c.id')
                                            ->select(['qamar_care_cards.*','a.Name as ProvinceName', 'b.Name as DistrictName', ])
                                             
                                             ->get();
     return view('QamarCardCard.All', compact('qamarcarecards'));
   }



    public function Approved()
    {

      $qamarcarecards =   QamarCareCard::join('locations as a','qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b','qamar_care_cards.District_ID', '=', 'b.id')
      // ->join('LookUp as c','qamar_care_cards.Education_ID', '=', 'c.id')
      ->select(['qamar_care_cards.*','a.Name as ProvinceName', 'b.Name as DistrictName', ])
       ->where("Status", "=", 'Approved')
       ->get();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }


    public function Rejected()
    {
      
      // $qamarcarecards =   QamarCareCard::where("Status", "=", 'Rejected')->get();
      $qamarcarecards =   QamarCareCard::join('locations as a','qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b','qamar_care_cards.District_ID', '=', 'b.id')
      // ->join('LookUp as c','qamar_care_cards.Education_ID', '=', 'c.id')
      ->select(['qamar_care_cards.*','a.Name as ProvinceName', 'b.Name as DistrictName', ])
       ->where("Status", "=", 'Rejected')
       ->get();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }

       
 

         
    public function Pending()
    {
      
      // $qamarcarecards =   QamarCareCard::where("Status", "=", 'Pending')->get();
      $qamarcarecards =   QamarCareCard::join('locations as a','qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b','qamar_care_cards.District_ID', '=', 'b.id')
      // ->join('LookUp as c','qamar_care_cards.Education_ID', '=', 'c.id')
      ->select(['qamar_care_cards.*','a.Name as ProvinceName', 'b.Name as DistrictName', ])
       ->where("Status", "=", 'Pending')
       ->get();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }


    public function Released()
    {
      
      // $qamarcarecards =   QamarCareCard::where("Status", "=", 'Released')->get();
      $qamarcarecards =   QamarCareCard::join('locations as a','qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b','qamar_care_cards.District_ID', '=', 'b.id')
      ->select(['qamar_care_cards.*','a.*','a.Name as ProvinceName', 'b.Name as DistrictName', ])
       ->where("Status", "=", 'Released')
       ->get();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }



  


    // status
    public function Status(QamarCareCard $data)
    {

    $qamarcarecards =   QamarCareCard:: where("qamar_care_cards.id", "=", $data -> id)
      
      
      
->join('locations as a','qamar_care_cards.Province_ID', '=', 'a.id')
->join('locations as b','qamar_care_cards.District_ID', '=', 'b.id')
->join('look_ups as c','qamar_care_cards.Country_ID', '=', 'c.id')
->join('look_ups as d','qamar_care_cards.Gender_ID', '=', 'd.id')
->join('look_ups as e','qamar_care_cards.Language_ID', '=', 'e.id')
->join('look_ups as f','qamar_care_cards.CurrentJob_ID', '=', 'f.id')
->join('look_ups as g','qamar_care_cards.FutureJob_ID', '=', 'g.id')
->join('look_ups as h','qamar_care_cards.EducationLevel_ID', '=', 'h.id')
->join('look_ups as i','qamar_care_cards.RelativeRelationship_ID', '=', 'i.id')
->join('look_ups as j','qamar_care_cards.FamilyStatus_ID', '=', 'j.id')
->join('look_ups as k','qamar_care_cards.Tribe_ID', '=', 'k.id')
->join('look_ups as l','qamar_care_cards.IncomeStreem_ID', '=', 'l.id')


->select('qamar_care_cards.*',
'a.Name as Province', 
'b.Name as District',
'c.Name as Country', 
'd.Name as Gender', 
'e.Name as Language', 
'f.Name as CurrentJob', 
'g.Name as FutureJob', 
'h.Name as EducationLevel', 
'i.Name as RelativeRelationship', 
'j.Name as FamilyStatus', 
'k.Name as Tribe', 
'l.Name as IncomeStreem'
)

 ->get();
//  $qamarcarecards  = $data;
 
return view('QamarCardCard.Status',  ['datas' => $qamarcarecards]);

      
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
      $qamarcarecards =   QamarCareCard::join('locations as a','qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b','qamar_care_cards.District_ID', '=', 'b.id')
      // ->join('LookUp as c','qamar_care_cards.Education_ID', '=', 'c.id')
      ->select(['qamar_care_cards.*','a.*','a.Name as ProvinceName', 'b.Name as DistrictName', ])
       ->where("Status", "=", 'Released')
       ->get();


      
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
      $provinces = Location::whereNull("Parent_ID")->get();
      $servicetypes = ServiceType::all();
      return view('QamarCardCard.AssignToService', ['data' => $data, 'users' => $users, 'provinces' => $provinces, 'servicetypes' => $servicetypes]);
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






    // service Provider
    public function ServiceProviders()
    {
      
      $serviceproviders =   ServiceProviders::join('Locations as a','service_providers.Province', '=', 'a.id')
                                            ->join('Locations as b','service_providers.District', '=', 'b.id')->select(['service_providers.*','a.*','a.Name as ProvinceName', 'b.Name as DistrictName'])
                                             
                                             ->get();
      return view('QamarCardCard.ServiceProviders', compact('serviceproviders'));
    }
    

    public function ServiceProviderIndex()
    {
             return view('QamarCardCard.ServiceProviderIndex');
    }
    
    
    public function CreateServiceProviderIndividual()
    {
      $provinces = Location::whereNull("Parent_ID")->get();
      $servicetypes = ServiceType::all();

      return view('QamarCardCard.CreateServiceProviderIndividual', ['provinces' => $provinces, 'servicetypes' => $servicetypes]);
    }


        public function StoreServiceProviderIndividual(Request $request)
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
      'Profession' => 'required|max:255',
      'EducationLevel' => 'required|max:255',
      'PrimaryNumber' => 'required|max:10',

      // 'SecondaryNumber' => 'required|max:10',
      // 'RelativeNumber' => 'required|max:10',
      'Province' => 'required|max:255',
      'District' => 'required|max:255',
      // 'Village' => 'required|max:255',
      // 'Email' => 'required|email|max:255',
      'ProvinceService' => 'required|max:255',
      'DistrictService' => 'required|max:255',
      'ServiceType' => 'required|max:255',
      // 'MonthlyFamilyIncome' => 'required|max:10',
      // 'MonthlyFamilyExpenses' => 'required|max:10',
      // 'NumberFamilyMembers' => 'required|max:10',
      // 'IncomeStreem' => 'required|max:255',
      // 'LevelPoverty' => 'required|max:255',
      // 'Tazkira' => 'required|max:255',

      // 'RelativeNumber' => 'required|max:10',
      // 'RelativeRelationship' => 'required|max:255',
      // 'RelativeName' => 'required|max:255',
      // 'FamilyStatus' => 'required|max:255',
      // 'Country' => 'required|max:255',
      // 'Tribe' => 'required|max:255',

       ]);

  
    //    if ($validator->fails()) {
    //     $error = $validator->errors()->first();
    //  }
     

     
    ServiceProviders::create([
          'FirstName' => request('FirstName'),
          'LastName' => request('LastName'),
          'TazkiraID' => request('TazkiraID'),
          'QCC' => request('QCC'),
          'Profile' => request('Profile'),
          'DOB' => request('DOB'),
          'Gender' => request('Gender'),
          'Language' => request('Language'),
          'CurrentJob' => request('CurrentJob'),
          'Profession' => request('Profession'),
          'EducationLevel' => request('EducationLevel'),
          'PrimaryNumber' => request('PrimaryNumber'),
          'SecondaryNumber' => request('SecondaryNumber'),
          // 'EmergencyNumber' => request('EmergencyNumber'),
          'Province' => request('Province'),
          'District' => request('District'),
          // 'Village' => request('Village'),
          'Email' => request('Email'),
          'ProvinceService' => request('ProvinceService'),
          'DistrictService' => request('DistrictService'),
          'ServiceType' => request('ServiceType'),
        //   'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
        //   'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
        //   'NumberFamilyMembers' => request('NumberFamilyMembers'),
        //   'IncomeStreem' => request('IncomeStreem'),
        //   'LevelPoverty' => request('LevelPoverty'),
        //  'Tazkira' => request('Tazkira'),
          'Status' => 'Pending',
          'Created_By' => auth()->user()->name,

          // 'RelativeNumber' => request('RelativeNumber'),
          // 'RelativeRelationship' => request('RelativeRelationship'),
          // 'RelativeName' => request('RelativeName'),
          // 'FamilyStatus' => request('FamilyStatus'),
          // 'Country' => request('Country'),
          // 'Tribe' => request('Tribe'),
          'Owner' => 1,



          ]);

         return redirect()->route('ServiceProvidersQamarCareCard')->with('toast_success', 'Record Created Successfully!');

      


  

    }


    public function CreateServiceProviderOrganization()
    {
             return view('QamarCardCard.CreateServiceProviderOrganization');
    }






  
    public function FindServiceProvider( $RequestedService, $Province, $District)
    {

     if($RequestedService != "None")
     {
       
        if($Province != "None")
        {

          if($District != "None")
          {
 
            $result =   ServiceProviders::select('FirstName', 'LastName', 'ServiceType')->where("ServiceType", "=", $RequestedService)->where("ProvinceService", "=", $Province)->where("DistrictService", "=", $District)->get();
            return response()->json($result);

          }
 
          else if($District == "None")
          {
            $result =   ServiceProviders::select('FirstName', 'LastName', 'ServiceType')->where("ServiceType", "=", $RequestedService)->where("ProvinceService", "=", $Province)->get();
            return response()->json($result);

          }
       

        }

     }
      // return "hi";
      
      // return response()->json($result);
    }




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
