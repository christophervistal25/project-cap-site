<?php

namespace App\Http\Controllers\Repositories;
use App\Person;
use App\Barangay;
use App\City;
use App\Province;
use App\Http\Controllers\Repositories\Encrytor;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PersonnelRepository
{
    public const QR_SEPERATOR = '|';
    public const ID_SEPERATOR = '-';
    public const GENDER = ['Male', 'Female'];
    public const CIVIL_STATUS = ['Single', 'Single Parent', 'Married', 'Separated', 'Widow', 'Widowed', 'Annuled'];

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
        $user_information =   $person->id . self::QR_SEPERATOR . $person->firstname . self::QR_SEPERATOR . $person->middlename .  self::QR_SEPERATOR . $person->lastname . self::QR_SEPERATOR . $person->suffix . self::QR_SEPERATOR . $person->address . self::QR_SEPERATOR .  $person->person_id;

        return Encryptor::process($user_information);
    }

    private static function counterForPerson(array $data = [])
    {
        $province = $data['province'];
        $city     = $data['city'];
        $barangay = $data['barangay'];
        return Person::where(['province_code' => $province, 'city_code' => $city, 'barangay_code' => $barangay])
                ->orderBy('person_id', 'DESC')
                ->first();
            
    }

    private static function makeCounter($lastRegisteredPerson) :int
    {
        // No registered person
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
        return $person->province_code
        . self::ID_SEPERATOR
        . $person->city_code
        . self::ID_SEPERATOR
        . $person->barangay_code
        . self::ID_SEPERATOR
        . ($personCounter);
    }

    public static function generateID(Person $person) :string
    {
            $lastRegisteredPerson = self::counterForPerson([
                'province' => $person->province_code,
                'city'     => $person->city_code,
                'barangay' => $person->barangay_code,
            ]);

            $personCounter = self::makeCounter($lastRegisteredPerson);
            return self::makeID($person, $personCounter);
        
    }


    public function getAge(string $birthdate) :int
    {
        $birthDateYear = Carbon::parse($birthdate)->year;
        $currentYear   = Carbon::now()->year;

        return $currentYear - $birthDateYear;
    }
}

