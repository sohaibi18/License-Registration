<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\BusinessType;
use App\Models\District;
use App\Models\LicenseCategory;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LicenseApplicationController extends Controller
{
    public function show($id): View
    {
        $licensecategories = LicenseCategory::all();
        $districts = District::all();
        $businesstypes = BusinessType::all();
        return view('License.show-application-form', [
            'id' => $id, 'districts' => $districts, 'businesstypes' => $businesstypes,
            'licensecategories' => $licensecategories,
        ]);
    }

    public function display($id, Request $request)
    {
        $path = $request->file('Profile_Image')->store('profile_images', 'public');
        $cnicpath = $request->file('CNIC_Image')->store('profile_images', 'public');
        $personaldata = Owner::create([
            'Applicant_Name' => $request->Applicant_Name,
            'Applicant_Father_Name' => $request->Applicant_Father_Name,
            'CNIC' => $request->CNIC,
            'Mobile_Number' => $request->Mobile_Number,
            'Email' => $request->Email,
            'Personal_Address' => $request->Personal_Address,
            'Gender' => $request->Gender,
            'Profile_Image' => $path,
            'CNIC_Image' => $cnicpath,
            'district_id' => $request->districts[0],
        ]);
        $businessdata = Business::create([
            'Business_Name' => $request->Business_Name,
            'Business_Address' => $request->Business_Address,
            'Contact_Number' => $request->Contact_Number,
            'Business_Email' => $request->Business_Email,
            'Website' => $request->Website,
            'Start_Date' => $request->Start_Date,
            'Food_Handlers' => $request->Food_Handlers,
            'district_id' => $request->districts[0],
            'business_type_id' => $request->businesstypes[0],
        ]);

        return view('license.display-submitted-data', [
            'id' => $id, 'personaldata' => $personaldata, 'businessdata' => $businessdata,
        ]);
    }
}
