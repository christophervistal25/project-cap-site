@extends('templates-2.app')
@section('page-title', 'Dashboard')
@section('content')
 <!-- BEGIN: Content -->
 <div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <!-- BEGIN: Add New Personnel -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Add New Personnel
                    </h2>
                    <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                </div>
                <div class="grid grid-cols mt-5">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Input -->
                        <div class="intro-y box">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    Personnel Information
                                </h2>
                            </div>
                            <div class="p-5" id="input">
                                <div class="preview">
                                    <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                                        <div class="flex-1 flex flex-col md:flex-row">
                                            <div class="w-full flex-1 mx-2">
                                                Firstname
                                                <div class="p-1 bg-white flex border border-gray-200 rounded">
                                                    <input placeholder="Enter Firstname" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 ">
                                                </div>
                                            </div>
                                            <div class="w-full flex-1 mx-2">
                                                Middlename
                                                <div class="p-1 bg-white flex border border-gray-200 rounded">
                                                    <input placeholder="Enter Middlename" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 ">
                                                </div>
                                            </div>

                                            <div class="w-full flex-1 mx-2">
                                                Lastname
                                                <div class="p-1 bg-white flex border border-gray-200 rounded">
                                                    <input placeholder="Enter Lastname" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 ">
                                                </div>
                                            </div>

                                            <div class="w-full flex-1 mx-2">
                                                Suffix
                                                <div class="p-1 bg-white flex border border-gray-200 rounded">
                                                    <input placeholder="Enter Suffix" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full flex-1 mx-2">
                                        Date of Birth
                                        <div class="mb-2 p-1 bg-white flex border border-gray-200 rounded">
                                            <input placeholder="Date of Birth" class="p-1 px-2 appearance-none outline-none w-full text-gray-800" type="date">
                                        </div>
                                    </div>

                                    <div class="flex-1 flex flex-col md:flex-row">
                                        <div class="w-full flex-1 mx-2">
                                            Province
                                            <div class=" p-1 bg-white flex">
                                                <select class="input border p-2 px-2 appearance-none outline-none w-full text-gray-800">
                                                    <option value="1">Province</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w-full flex-1 mx-2">
                                            City
                                            <div class="p-1 bg-white flex ">
                                                <select class="input border p-2 px-2 appearance-none outline-none w-full text-gray-800">
                                                    <option value="1">City</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="w-full flex-1 mx-2">
                                            Barangay
                                            <div class="p-1 bg-white">
                                                <select class="input border p-2 px-2 appearance-none outline-none w-full text-gray-800">
                                                    <option value="1">Barangay</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                </div>
                            </div>
                        </div>
                        <!-- END: Input -->
                    </div>
                </div>
            </div>
            <!-- END: Add New Personnel -->
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection
