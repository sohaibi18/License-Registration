<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->

        <div class="container mt-5">
{{--            <h2 class="mb-4">Complete Applicant Data</h2>--}}
{{--            --}}{{--            <div class="card-body m-100 ">--}}
{{--            --}}{{--                <div class="demo-inline-spacing">--}}
{{--            --}}{{--                    <a href="/profile/update/{{ $users['id'] }}">--}}
{{--            --}}{{--                        <button type="button" class="btn rounded-pill btn-primary">Update Profile</button>--}}
{{--            --}}{{--                    </a>--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
{{--            --}}{{--            <div class="card-body m-100">--}}
{{--            --}}{{--                <div class="demo-inline-spacing">--}}
{{--            --}}{{--                    <a href="/profile/delete/{{ $users['id'] }}">--}}
{{--            --}}{{--                        <button type="button" class="btn rounded-pill btn-primary">Delete Profile</button>--}}
{{--            --}}{{--                    </a>--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Applicant Name</th>
                    @if($personaldata)
                        <td>{{ $personaldata->Applicant_Name }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Applicant Father Name</th>
                    @if($personaldata)
                        <td>{{ $personaldata->Applicant_Father_Name }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>CNIC</th>
                    @if($personaldata)
                        <td>{{ $personaldata->CNIC }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Contact Number</th>
                    @if($personaldata)
                        <td>{{ $personaldata->Mobile_Number }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Email</th>
                    @if($personaldata)
                        <td>{{ $personaldata->Email }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Personal Address</th>
                    @if($personaldata)
                        <td>{{ $personaldata->Personal_Address }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Gender</th>
                    @if($personaldata)
                        <td>{{ $personaldata->Gender }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Profile Image</th>
                    @if($personaldata)
                        <td>{{ $personaldata->Profile_Image }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>CNIC Image</th>
                    @if($personaldata)
                        <td>{{ $personaldata->CNIC_Image }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Residential District</th>
                    @if($personaldata)
                        <td>
                            @if($personaldata->district)
                                {{ $personaldata->district->name }}
                            @else
                                Not Found
                            @endif
                        </td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Business Name</th>
                    @if($businessdata)
                        <td>{{ $businessdata->alternate_mobile_no }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>

                <tr>
                    <th>Business Address</th>
                    @if($businessdata)
                        <td>{{ $businessdata->current_address }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Contact Number</th>
                    @if($businessdata)
                        <td>{{ $businessdata->permanent_address }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Business Email</th>
                    @if($businessdata)
                        <td>{{ $businessdata->postal_code }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Website</th>
                    @if($businessdata)
                        <td>{{ $businessdata->primary_contact }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Start Date</th>
                    @if($businessdata)
                        <td>{{ $businessdata->alternate_contact }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Food Handlers</th>
                    @if($businessdata)
                        <td>{{ $businessdata->relationship }}</td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Business District</th>
                    @if($businessdata)
                        <td>
                            @if($businessdata->district)
                                {{ $businessdata->district->name }}
                            @else
                                Not Found
                            @endif
                        </td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
                <tr>
                    <th>Business District</th>
                    @if($businessdata)
                        <td>
                            @if($businessdata->business)
                                {{ $businessdata->business->Business_Types }}
                            @else
                                Not Found
                            @endif
                        </td>
                    @else
                        <td>Not Found</td>
                    @endif
                </tr>
{{--                <tr>--}}
{{--                    <th>License Category</th>--}}
{{--                    @if($account)--}}
{{--                        <td>{{ $account->iban }}</td>--}}
{{--                    @else--}}
{{--                        <td>Not Found</td>--}}
{{--                    @endif--}}
{{--                </tr>--}}
                </tbody>
            </table>
        </div>
    </div>




</x-layouts.app>
