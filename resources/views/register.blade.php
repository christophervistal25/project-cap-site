@extends('templates-2.app')

@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-xl font-semibold" style = "font-family:Futura">
           <p class="text-center text-indigo-600">Add New Personnel
            </p>
            <p class="text-sm font-medium" style="font-family:Futura text-gray-700">Personnel Information
            </p>
        </h2>
    </div>
    <div class="grid grid-flow-control-col auto-cols-max">
        {{-- <diva class="intro-y col-span-12 lg:col-span-6"> --}}
            <!-- BEGIN: Input -->
            {{-- {{-- <div class="intro-y box"> --}}
                {{-- <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto" style = "font-family:Futura">
                        Personnel Information
                    </h2>
                </div> --}}
                {{-- <diva class="md:grid md:grid-cols-3 md:gap-6">    --}}
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class = "grid  grid-cols-3 gap-4">
                <div class="col-span-6 sm:col-span-5 lg:col-span-1">
                  <label for="first_name" class="block text-sm font-medium text-gray-700" style="Font-family:Futura">Firstname<span class="text-red-600">*</span></label>
                  <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md py-2 px-2" placeholder="Enter Firstname" style="Font-family:Futura">
                </div>
                <div class="col-span-6 sm:col-span-5 lg:col-span-1">
                  <label for="middle_name" class="block text-sm font-medium text-gray-700" style="Font-family:Futura">Middlename<span class="text-red-600">*</span></label>
                  <input type="text" name="middle_name" id="middle_name" autocomplete="family-name" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md py-2 px-2" style="Font-family:Futura" placeholder="Enter Middlename" >
                </div>
                <div class="col-span-6 sm:col-span-5 lg:col-span-1">
                  <label for="last_name" class="block text-sm font-medium text-gray-700" style="Font-family:Futura">Lastname<span class="text-red-600">*</span></label>
                  <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md py-2 px-2" placeholder="Enter Lastname" style="Font-family:Futura">
                </div>
                <div class="col-span-6 sm:col-span-5 lg:col-span-1">
                  <label for="last_name" class="block text-sm font-medium text-gray-700" style="Font-family:Futura">Suffix</label>
                  <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md py-2 px-2" placeholder="e.g Jr." style="Font-family:Futura">
                </div>

                 <div class="col-span-6 sm:col-span-4">
                   <label for="date_of_birth" class="block text-sm font-medium text-gray-700" style="Font-family:Futura">Date of Birth<span class="text-red-600">*</span></label>
                   <div class="absolute rounded-l w-10 h-10 flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div> <input type="text" class="w-full datepicker input pl-12 border">
                </div>
                {{-- <div class="col-span-6 sm:col-span-3"> --}}
                <div class="col-start-1 col-end-7">
                  <label for="country" class="block text-sm font-medium text-gray-700 py-1" style="Font-family:Futura">Province<span class="text-red-600">*</span></label>
                  <select name="province" id="province" autocomplete="province" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="Font-family:Futura">
                  <option value="140100000">ABRA</option>
                  <option value="160200000">AGUSAN DEL NORTE</option>
                  <option value="160300000">AGUSAN DEL SUR</option>
                  <option value="60400000">AKLAN</option>
                  <option value="50500000">ALBAY</option>
                  <option value="60600000"> ANTIQUE</option>
                  <option value="148100000"> APAYAO</option>
                  <option value="37700000"> AURORA</option>
                  <option value="150700000"> BASILAN</option>
                  <option value="30800000"> BATAAN</option>
                  <option value="20900000"> BATANES</option>
                  <option value="41000000"> BATANGAS</option>
                  <option value="141100000"> BENGUET</option>
                  <option value="87800000"> BILIRAN</option>
                  <option value="71200000"> BOHOL</option>
                  <option value="101300000"> BUKIDNON</option>
                  <option value="31400000"> BULACAN</option>
                  <option value="21500000"> CAGAYAN</option>
                  <option value="51600000"> CAMARINES NORTE</option>
                  <option value="51700000"> CAMARINES SUR</option>
                  <option value="101800000"> CAMIGUIN</option>
                  <option value="61900000"> CAPIZ</option>
                 <option value="52000000"> CATANDUANES</option>
                 <option value="42100000"> CAVITE</option>
                 <option value="72200000"> CEBU</option>
                 <option value="118200000"> COMPOSTELA VALLEY</option>
                 <option value="124700000"> COTABATO (NORTH COTABATO)</option>
                 <option value="112300000"> DAVAO DEL NORTE</option>
                 <option value="112400000"> DAVAO DEL SUR</option>
                 <option value="118600000"> DAVAO OCCIDENTAL</option>
                 <option value="112500000"> DAVAO ORIENTAL</option>
                 <option value="168500000"> DINAGAT ISLANDS</option>
                 <option value="82600000"> EASTERN SAMAR</option>
                 <option value="67900000"> GUIMARAS</option>
                 <option value="142700000"> IFUGAO</option>
                 <option value="12800000"> ILOCOS NORTE</option>
                 <option value="12900000"> ILOCOS SUR</option>
                 <option value="63000000"> ILOILO</option>
                 <option value="23100000"> ISABELA</option>
                 <option value="143200000"> KALINGA</option>
                 <option value="13300000"> LA UNION</option>
                 <option value="43400000"> LAGUNA</option>
                 <option value="103500000"> LANAO DEL NORTE</option>
                 <option value="153600000"> LANAO DEL SUR</option>
                 <option value="83700000"> LEYTE</option>
                 <option value="153800000"> MAGUINDANAO</option>
                 <option value="174000000"> MARINDUQUE</option>
                 <option value="54100000"> MASBATE</option>
                 <option value="104200000"> MISAMIS OCCIDENTAL</option>
                 <option value="104300000"> MISAMIS ORIENTAL</option>
                 <option value="144400000"> MOUNTAIN PROVINCE</option>
                 <option value="64500000"> NEGROS OCCIDENTAL</option>
                 <option value="74600000"> NEGROS ORIENTAL</option>
                <option value="84800000"> NORTHERN SAMAR</option>
                <option value="34900000"> NUEVA ECIJA</option>
                <option value="25000000"> NUEVA VIZCAYA</option>
                <option value="175100000"> OCCIDENTAL MINDORO</option>
                <option value="175200000"> ORIENTAL MINDORO</option>
                <option value="175300000"> PALAWAN</option>
                <option value="35400000"> PAMPANGA</option>
                <option value="15500000"> PANGASINAN</option>
                <option value="45600000"> QUEZON</option>
                <option value="25700000"> QUIRINO</option>
                <option value="45800000"> RIZAL</option>
                <option value="175900000"> ROMBLON</option>
                <option value="86000000"> SAMAR (WESTERN SAMAR)</option>
                <option value="128000000"> SARANGANI</option>
                <option value="76100000"> SIQUIJOR</option>
                <option value="56200000"> SORSOGON</option>
                <option value="126300000"> SOUTH COTABATO</option>
                <option value="86400000"> SOUTHERN LEYTE</option>
                <option value="126500000"> SULTAN KUDARAT</option>
                <option value="156600000"> SULU</option>
                <option value="166700000"> SURIGAO DEL NORTE</option>
                <option value="166800000"> SURIGAO DEL SUR</option>
                <option value="36900000"> TARLAC</option>
                <option value="157000000"> TAWI-TAWI</option>
                <option value="37100000"> ZAMBALES</option>
                <option value="97200000"> ZAMBOANGA DEL NORTE</option>
                <option value="97300000"> ZAMBOANGA DEL SUR</option>
                <option value="98300000"> ZAMBOANGA SIBUGAY</option>
                </select>
                <div class="row">
                <div class="col-span-6 sm:col-span-3">
                <label for="city" style="Font-family:Futura" class="block text-sm font-medium text-gray-700 py-1">City<span class="text-red-600">*</span></label>
                <select name="city" id="cities" autocomplete="country" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="Font-family:Futura">
                <option value="" disabled="" style="Font-family:Futura">Select Province</option>
                </select>
                </div>
                <div class="col-span-6 sm:col-span-5">
                <label for="barangay" style="Font-family:Futura" class="block text-sm font-medium text-gray-700 py-1">Barangay<span class="text-red-600">*</span></label>
                <select name="barangay" id="barangay" autocomplete="country" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm py-1">
                <option value="" disabled="">Select City</option>
                </select>
                </div>
                </div>
                <div class="col-span-6 sm:col-span-4">
                  <label for="temporary_address" class="block text-sm font-medium text-gray-700 py-1"style="Font-family:Futura">Temporary Address<span class="text-red-600">*</span></label>
                  <input type="text" name="temporary_address" id="temporary_address" autocomplete="temporary" class="h-24 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md py-2 px-2">
                </div>
                <div class="col-span-6 sm:col-span-4">
                  <label for="permanent_address" class="block text-sm font-medium text-gray-700 py-1"style="Font-family:Futura">Permanent Address<span class="text-red-600">*</span></label>
                  <input type="text" name="permanent_address" id="permanent_address" autocomplete="permanent" class="h-24 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md py-2 px-2">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="sex" class="block text-sm font-medium text-gray-700 py-1"style="Font-family:Futura">Sex<span class="text-red-600">*</span></label>
                  <select id="sex" name="sex" autocomplete="sex" class="block w-full py-2 px-3 border border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="Font-family:Futura">
                    <option>Female</option>
                    <option>Male</option>
                  </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="status" class="block text-sm font-medium text-gray-700 py-1" style="Font-family:Futura">Status<span class="text-red-600">*</span></label>
                  <select id="status" name="status" autocomplete="status" class="block w-full py-2 px-3 border border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"style="Font-family:Futura">
                    <option>Single</option>
                    <option>Single Parent</option>
                    <option>Married</option>
                    <option>Separated</option>
                    <option>Widow</option>
                    <option>Widowed</option>
                    <option>Annuled</option>
                  </select>
                </div>
                <div class="col-span-6 sm:col-span-4">
                  <label for="email_address" class="block text-sm font-medium text-gray-700 py-1" style="Font-family:Futura">Email address</label>
                  <input type="text" name="email_address" id="email_address" autocomplete="email" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md py-2 px-2" placeholder="Optional" style="Font-family:Futura">
                </div>

                  <div class="col-span-6 sm:col-span-5 lg:col-span-1 w-1/4">
                    <label for="mobile_number" class="block text-sm font-medium text-gray-700 py-1" style="Font-family:Futura">Mobile Number<span class="text-red-600">*</span></label>
                    <input type="text" name="mobile_number" id="mobile_number" autocomplete="family-name" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md py-2 px-2" style="Font-family:Futura">
                </div>

                <div class="col-span-6 sm:col-span-5 lg:col-span-1 w-1/4">
                    <label for="telephone_number" class="block text-sm font-medium text-gray-700 py-1" style="Font-family:Futura">Telephone Number</label>
                    <input type="text" name="telephone_number" id="telephone_number" autocomplete="family-name" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md py-2 px-2" style="Font-family:Futura" placeholder="Optional">
                </div>
                <div class="form-group">
                  <label for="" style="Font-family:Futura" class="block text-sm font-medium text-gray-700 py-2">Image<span class="text-red-600">*</span></label>
                  <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input " id="imageFile" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  <label class="custom-file-label" for="imageFile" style="Font-family:Futura"></label>
                  <div class="invalid-feedback"></div>
                </div>
                </div>

        
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="Font-family:Futura">
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    
@endsection
