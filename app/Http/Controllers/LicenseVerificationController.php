<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\LicenseApplication;
use App\Models\LicenseCategory;
use App\Models\Owner;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LicenseVerificationController extends Controller
{

    public function display_For_Verification($userid): View
    {
        // Get applications where ProcLvl is Finance Verified and Submit_Date is not null
        $verifiedApplications = LicenseApplication::where('ProcLvl', 'Finance Verified')
            ->whereNotNull('Submit_Date')
            ->get();

        // Pass the data to the view
        return view('license.license-verification', [
            'userid' => $userid,
            'licenseapplications' => $verifiedApplications,
        ]);
    }

//    public function show_license_verification($userid, $id): View
//    {
//        $payment = Payment::with('license_applications.business.owner')
//            ->where('license_application_id', $id)
//            ->first();
//
//        if ($payment) {
//            $license = $payment->license_applications;
//            $business = $license->business;
//            $owner = $business->owner;
//        } else {
//            abort(404, 'Payment not found');
//        }
//
//        return \view('license.show-license-verification-form', [
//            'payment' => $payment,
//            'licenses' => $license,
//            'business' => $business,
//            'owner' => $owner,
//        ]);
//    }

    public function show_license_verification($userid, $id): View
    {
        $payment = Payment::with('license_applications.business.owner')
            ->where('license_application_id', $id)
            ->first();

        // Check if $payment is not null before accessing its properties
        if ($payment) {
            $licenses = $payment->license_applications;

            return view('license.show-license-verification-form', [
                'payment' => $payment,
                'license' => $licenses, // Use the correct variable name
            ]);
        } else {
            abort(404, 'Payment not found');
        }
    }


}
