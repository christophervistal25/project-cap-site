<?php

namespace App\Http\Controllers\Repositories;
use App\Person;
use App\Barangay;
use App\City;
use App\Http\Controllers\Repositories\Encrytor;
use Illuminate\Support\Str;

class PersonnelRepository 
{
    public const QR_SEPERATOR = '|';
    public const ID_SEPERATOR = '-';
    public const GENDER = ['Male', 'Female'];

    public static function generateQR(Person $person)
    {
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );
        
        $QR_NAME = time() . '_' . md5(time() . '_' . $person->firstname) . '_qr.png';

        $QR_CODE_PATH = storage_path('/app/public/qr_images/' . $QR_NAME);
        
        $writer = new Writer($renderer);
        $data = $writer->writeFile(self::generateQRbyData($person), $QR_CODE_PATH);

        return $QR_NAME;
    }

    public static function generateQRbyData(Person $person)
    {
        $user_information =   $person->id . self::QR_SEPERATOR . $person->firstname . self::QR_SEPERATOR . $person->middlename . self::QR_SEPERATOR . $person->lastname 
        . self::QR_SEPERATOR . $person->suffix . self::QR_SEPERATOR . $person->address . self::QR_SEPERATOR .   $person->date_of_birth . self::QR_SEPERATOR . $person->rapid_test_issued;
        return Encryptor::process($user_information);
    }

    private static function countPersonInCityAndBarangay($cityZipCode, $barangayId)
    {
        return Person::where(['city_zip_code' => $cityZipCode, 'barangay_id' => $barangayId])->latest()->first();
    }

    private static function makeCounter($lastRegisteredPerson) :int
    {
        if(is_null($lastRegisteredPerson)) {
            $counter = 1;
        } else {
            list($provinceCode, $cityCode, $barangayCode, $personCounter) 
                        = explode(self::ID_SEPERATOR, $lastRegisteredPerson->person_id);
            $counter = ($personCounter + 1);
        }
        return $counter;
    }

    private static function makeID(Person $person, int $personCounter) :string
    {
        
        return Str::replaceFirst('166', '', City::PROVINCE_CODE)
        . self::ID_SEPERATOR 
        . Str::replaceFirst('166', '', $person->city->code) 
        . self::ID_SEPERATOR 
        . Str::replaceFirst('166', '', $person->barangay->code) 
        . self::ID_SEPERATOR 
        . ($personCounter);
    }

    public static function generateID(Person $person) :string
    {
        $lastRegisteredPerson = self::countPersonInCityAndBarangay($person->city->zip_code, $person->barangay->id);

        $personCounter = self::makeCounter($lastRegisteredPerson);

        return self::makeID($person, $personCounter);
    }
}
