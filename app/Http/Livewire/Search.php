<?php

namespace App\Http\Livewire;
use App\Models\Orphan;
use App\Models\Location;
use App\Models\LookUp;
use App\Models\User;
use Auth;
use App\Models\SponsorCard;
use App\Http\Controllers\OrphanRelief\Orphans\OrphansController;
use Livewire\Component;

class Search extends Component
{
    public $search = '';
    public function render()
    {
        $search = '';
        $PageInfo = 'All';
        $sponsors = User::where("IsOrphanSponsor", "=", 1)->where("IsActive", "=", 1)->get();
        $provinces = Location::whereNull("Parent_ID")->get();
        $orphans =   Orphan::join('locations as a', 'orphans.Province_ID', '=', 'a.id')
          ->join('locations as b', 'orphans.District_ID', '=', 'b.id')
          ->join('look_ups as c', 'orphans.FamilyStatus_ID', '=', 'c.id')
          ->join('users as d', 'orphans.Created_By', '=', 'd.id')
          ->select(['orphans.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
          -> where('orphans.FirstName', '=', $search)
          -> paginate(100);
        return view('livewire.search', ['datas' => $orphans, 'PageInfo' => $PageInfo, 'provinces' => $provinces, 'sponsors' => $sponsors]);
    }
}
