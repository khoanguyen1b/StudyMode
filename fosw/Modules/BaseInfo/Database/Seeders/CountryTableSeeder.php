<?php

namespace Modules\BaseInfo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('sys_countries')->delete();
        DB::table('sys_countries')->insert([
            [
                'id' => 1,
                'code' => 'AF',
                'name' => 'Afghanistan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'code' => 'AL',
                'name' => 'Albania',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'code' => 'DZ',
                'name' => 'Algeria',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'code' => 'DS',
                'name' => 'American Samoa',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'code' => 'AD',
                'name' => 'Andorra',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'code' => 'AO',
                'name' => 'Angola',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'code' => 'AI',
                'name' => 'Anguilla',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'code' => 'AQ',
                'name' => 'Antarctica',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'code' => 'AG',
                'name' => 'Antigua and Barbuda',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'code' => 'AR',
                'name' => 'Argentina',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 11,
                'code' => 'AM',
                'name' => 'Armenia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 12,
                'code' => 'AW',
                'name' => 'Aruba',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 13,
                'code' => 'AU',
                'name' => 'Australia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 14,
                'code' => 'AT',
                'name' => 'Austria',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 15,
                'code' => 'AZ',
                'name' => 'Azerbaijan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 16,
                'code' => 'BS',
                'name' => 'Bahamas',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 17,
                'code' => 'BH',
                'name' => 'Bahrain',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 18,
                'code' => 'BD',
                'name' => 'Bangladesh',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 19,
                'code' => 'BB',
                'name' => 'Barbados',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 20,
                'code' => 'BY',
                'name' => 'Belarus',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 21,
                'code' => 'BE',
                'name' => 'Belgium',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 22,
                'code' => 'BZ',
                'name' => 'Belize',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 23,
                'code' => 'BJ',
                'name' => 'Benin',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 24,
                'code' => 'BM',
                'name' => 'Bermuda',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 25,
                'code' => 'BT',
                'name' => 'Bhutan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 26,
                'code' => 'BO',
                'name' => 'Bolivia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 27,
                'code' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 28,
                'code' => 'BW',
                'name' => 'Botswana',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 29,
                'code' => 'BV',
                'name' => 'Bouvet Island',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 30,
                'code' => 'BR',
                'name' => 'Brazil',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 31,
                'code' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 32,
                'code' => 'BN',
                'name' => 'Brunei Darussalam',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 33,
                'code' => 'BG',
                'name' => 'Bulgaria',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 34,
                'code' => 'BF',
                'name' => 'Burkina Faso',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 35,
                'code' => 'BI',
                'name' => 'Burundi',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 36,
                'code' => 'KH',
                'name' => 'Cambodia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 37,
                'code' => 'CM',
                'name' => 'Cameroon',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 38,
                'code' => 'CA',
                'name' => 'Canada',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 39,
                'code' => 'CV',
                'name' => 'Cape Verde',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 40,
                'code' => 'KY',
                'name' => 'Cayman Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 41,
                'code' => 'CF',
                'name' => 'Central African Republic',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 42,
                'code' => 'TD',
                'name' => 'Chad',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 43,
                'code' => 'CL',
                'name' => 'Chile',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 44,
                'code' => 'CN',
                'name' => 'China',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 45,
                'code' => 'CX',
                'name' => 'Christmas Island',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 46,
                'code' => 'CC',
                'name' => 'Cocos (Keeling) Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 47,
                'code' => 'CO',
                'name' => 'Colombia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 48,
                'code' => 'KM',
                'name' => 'Comoros',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 49,
                'code' => 'CD',
                'name' => 'Democratic Republic of the Congo',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 50,
                'code' => 'CG',
                'name' => 'Republic of Congo',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 51,
                'code' => 'CK',
                'name' => 'Cook Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 52,
                'code' => 'CR',
                'name' => 'Costa Rica',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 53,
                'code' => 'HR',
                'name' => 'Croatia (Hrvatska)',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 54,
                'code' => 'CU',
                'name' => 'Cuba',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 55,
                'code' => 'CY',
                'name' => 'Cyprus',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 56,
                'code' => 'CZ',
                'name' => 'Czech Republic',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 57,
                'code' => 'DK',
                'name' => 'Denmark',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 58,
                'code' => 'DJ',
                'name' => 'Djibouti',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 59,
                'code' => 'DM',
                'name' => 'Dominica',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 60,
                'code' => 'DO',
                'name' => 'Dominican Republic',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 61,
                'code' => 'TP',
                'name' => 'East Timor',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 62,
                'code' => 'EC',
                'name' => 'Ecuador',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 63,
                'code' => 'EG',
                'name' => 'Egypt',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 64,
                'code' => 'SV',
                'name' => 'El Salvador',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 65,
                'code' => 'GQ',
                'name' => 'Equatorial Guinea',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 66,
                'code' => 'ER',
                'name' => 'Eritrea',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 67,
                'code' => 'EE',
                'name' => 'Estonia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 68,
                'code' => 'ET',
                'name' => 'Ethiopia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 69,
                'code' => 'FK',
                'name' => 'Falkland Islands (Malvinas)',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 70,
                'code' => 'FO',
                'name' => 'Faroe Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 71,
                'code' => 'FJ',
                'name' => 'Fiji',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 72,
                'code' => 'FI',
                'name' => 'Finland',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 73,
                'code' => 'FR',
                'name' => 'France',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 74,
                'code' => 'FX',
                'name' => 'France, Metropolitan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 75,
                'code' => 'GF',
                'name' => 'French Guiana',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 76,
                'code' => 'PF',
                'name' => 'French Polynesia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 77,
                'code' => 'TF',
                'name' => 'French Southern Territories',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 78,
                'code' => 'GA',
                'name' => 'Gabon',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 79,
                'code' => 'GM',
                'name' => 'Gambia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 80,
                'code' => 'GE',
                'name' => 'Georgia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 81,
                'code' => 'DE',
                'name' => 'Germany',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 82,
                'code' => 'GH',
                'name' => 'Ghana',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 83,
                'code' => 'GI',
                'name' => 'Gibraltar',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 84,
                'code' => 'GK',
                'name' => 'Guernsey',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 85,
                'code' => 'GR',
                'name' => 'Greece',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 86,
                'code' => 'GL',
                'name' => 'Greenland',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 87,
                'code' => 'GD',
                'name' => 'Grenada',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 88,
                'code' => 'GP',
                'name' => 'Guadeloupe',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 89,
                'code' => 'GU',
                'name' => 'Guam',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 90,
                'code' => 'GT',
                'name' => 'Guatemala',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 91,
                'code' => 'GN',
                'name' => 'Guinea',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 92,
                'code' => 'GW',
                'name' => 'Guinea-Bissau',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 93,
                'code' => 'GY',
                'name' => 'Guyana',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 94,
                'code' => 'HT',
                'name' => 'Haiti',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 95,
                'code' => 'HM',
                'name' => 'Heard and Mc Donald Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 96,
                'code' => 'HN',
                'name' => 'Honduras',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 97,
                'code' => 'HK',
                'name' => 'Hong Kong',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 98,
                'code' => 'HU',
                'name' => 'Hungary',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 99,
                'code' => 'IS',
                'name' => 'Iceland',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 100,
                'code' => 'IN',
                'name' => 'India',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 101,
                'code' => 'IM',
                'name' => 'Isle of Man',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 102,
                'code' => 'ID',
                'name' => 'Indonesia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 103,
                'code' => 'IR',
                'name' => 'Iran (Islamic Republic of)',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 104,
                'code' => 'IQ',
                'name' => 'Iraq',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 105,
                'code' => 'IE',
                'name' => 'Ireland',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 106,
                'code' => 'IL',
                'name' => 'Israel',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 107,
                'code' => 'IT',
                'name' => 'Italy',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 108,
                'code' => 'CI',
                'name' => 'Ivory Coast',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 109,
                'code' => 'JE',
                'name' => 'Jersey',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 110,
                'code' => 'JM',
                'name' => 'Jamaica',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 111,
                'code' => 'JP',
                'name' => 'Japan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 112,
                'code' => 'JO',
                'name' => 'Jordan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 113,
                'code' => 'KZ',
                'name' => 'Kazakhstan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 114,
                'code' => 'KE',
                'name' => 'Kenya',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 115,
                'code' => 'KI',
                'name' => 'Kiribati',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 116,
                'code' => 'KP',
                'name' => 'Korea, Democratic People\'s Republic of',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 117,
                'code' => 'KR',
                'name' => 'Korea, Republic of',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 118,
                'code' => 'XK',
                'name' => 'Kosovo',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 119,
                'code' => 'KW',
                'name' => 'Kuwait',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 120,
                'code' => 'KG',
                'name' => 'Kyrgyzstan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 121,
                'code' => 'LA',
                'name' => 'Lao People\'s Democratic Republic',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 122,
                'code' => 'LV',
                'name' => 'Latvia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 123,
                'code' => 'LB',
                'name' => 'Lebanon',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 124,
                'code' => 'LS',
                'name' => 'Lesotho',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 125,
                'code' => 'LR',
                'name' => 'Liberia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 126,
                'code' => 'LY',
                'name' => 'Libyan Arab Jamahiriya',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 127,
                'code' => 'LI',
                'name' => 'Liechtenstein',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 128,
                'code' => 'LT',
                'name' => 'Lithuania',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 129,
                'code' => 'LU',
                'name' => 'Luxembourg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 130,
                'code' => 'MO',
                'name' => 'Macau',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 131,
                'code' => 'MK',
                'name' => 'North Macedonia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 132,
                'code' => 'MG',
                'name' => 'Madagascar',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 133,
                'code' => 'MW',
                'name' => 'Malawi',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 134,
                'code' => 'MY',
                'name' => 'Malaysia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 135,
                'code' => 'MV',
                'name' => 'Maldives',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 136,
                'code' => 'ML',
                'name' => 'Mali',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 137,
                'code' => 'MT',
                'name' => 'Malta',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 138,
                'code' => 'MH',
                'name' => 'Marshall Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 139,
                'code' => 'MQ',
                'name' => 'Martinique',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 140,
                'code' => 'MR',
                'name' => 'Mauritania',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 141,
                'code' => 'MU',
                'name' => 'Mauritius',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 142,
                'code' => 'TY',
                'name' => 'Mayotte',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 143,
                'code' => 'MX',
                'name' => 'Mexico',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 144,
                'code' => 'FM',
                'name' => 'Micronesia, Federated States of',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 145,
                'code' => 'MD',
                'name' => 'Moldova, Republic of',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 146,
                'code' => 'MC',
                'name' => 'Monaco',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 147,
                'code' => 'MN',
                'name' => 'Mongolia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 148,
                'code' => 'ME',
                'name' => 'Montenegro',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 149,
                'code' => 'MS',
                'name' => 'Montserrat',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 150,
                'code' => 'MA',
                'name' => 'Morocco',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 151,
                'code' => 'MZ',
                'name' => 'Mozambique',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 152,
                'code' => 'MM',
                'name' => 'Myanmar',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 153,
                'code' => 'NA',
                'name' => 'Namibia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 154,
                'code' => 'NR',
                'name' => 'Nauru',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 155,
                'code' => 'NP',
                'name' => 'Nepal',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 156,
                'code' => 'NL',
                'name' => 'Netherlands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 157,
                'code' => 'AN',
                'name' => 'Netherlands Antilles',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 158,
                'code' => 'NC',
                'name' => 'New Caledonia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 159,
                'code' => 'NZ',
                'name' => 'New Zealand',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 160,
                'code' => 'NI',
                'name' => 'Nicaragua',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 161,
                'code' => 'NE',
                'name' => 'Niger',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 162,
                'code' => 'NG',
                'name' => 'Nigeria',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 163,
                'code' => 'NU',
                'name' => 'Niue',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 164,
                'code' => 'NF',
                'name' => 'Norfolk Island',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 165,
                'code' => 'MP',
                'name' => 'Northern Mariana Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 166,
                'code' => 'NO',
                'name' => 'Norway',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 167,
                'code' => 'OM',
                'name' => 'Oman',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 168,
                'code' => 'PK',
                'name' => 'Pakistan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 169,
                'code' => 'PW',
                'name' => 'Palau',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 170,
                'code' => 'PS',
                'name' => 'Palestine',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 171,
                'code' => 'PA',
                'name' => 'Panama',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 172,
                'code' => 'PG',
                'name' => 'Papua New Guinea',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 173,
                'code' => 'PY',
                'name' => 'Paraguay',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 174,
                'code' => 'PE',
                'name' => 'Peru',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 175,
                'code' => 'PH',
                'name' => 'Philippines',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 176,
                'code' => 'PN',
                'name' => 'Pitcairn',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 177,
                'code' => 'PL',
                'name' => 'Poland',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 178,
                'code' => 'PT',
                'name' => 'Portugal',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 179,
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 180,
                'code' => 'QA',
                'name' => 'Qatar',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 181,
                'code' => 'RE',
                'name' => 'Reunion',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 182,
                'code' => 'RO',
                'name' => 'Romania',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 183,
                'code' => 'RU',
                'name' => 'Russian Federation',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 184,
                'code' => 'RW',
                'name' => 'Rwanda',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 185,
                'code' => 'KN',
                'name' => 'Saint Kitts and Nevis',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 186,
                'code' => 'LC',
                'name' => 'Saint Lucia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 187,
                'code' => 'VC',
                'name' => 'Saint Vincent and the Grenadines',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 188,
                'code' => 'WS',
                'name' => 'Samoa',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 189,
                'code' => 'SM',
                'name' => 'San Marino',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 190,
                'code' => 'ST',
                'name' => 'Sao Tome and Principe',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 191,
                'code' => 'SA',
                'name' => 'Saudi Arabia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 192,
                'code' => 'SN',
                'name' => 'Senegal',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 193,
                'code' => 'RS',
                'name' => 'Serbia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 194,
                'code' => 'SC',
                'name' => 'Seychelles',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 195,
                'code' => 'SL',
                'name' => 'Sierra Leone',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 196,
                'code' => 'SG',
                'name' => 'Singapore',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 197,
                'code' => 'SK',
                'name' => 'Slovakia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 198,
                'code' => 'SI',
                'name' => 'Slovenia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 199,
                'code' => 'SB',
                'name' => 'Solomon Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 200,
                'code' => 'SO',
                'name' => 'Somalia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 201,
                'code' => 'ZA',
                'name' => 'South Africa',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 202,
                'code' => 'GS',
                'name' => 'South Georgia South Sandwich Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 203,
                'code' => 'SS',
                'name' => 'South Sudan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 204,
                'code' => 'ES',
                'name' => 'Spain',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 205,
                'code' => 'LK',
                'name' => 'Sri Lanka',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 206,
                'code' => 'SH',
                'name' => 'St. Helena',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 207,
                'code' => 'PM',
                'name' => 'St. Pierre and Miquelon',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 208,
                'code' => 'SD',
                'name' => 'Sudan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 209,
                'code' => 'SR',
                'name' => 'Suriname',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 210,
                'code' => 'SJ',
                'name' => 'Svalbard and Jan Mayen Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 211,
                'code' => 'SZ',
                'name' => 'Swaziland',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 212,
                'code' => 'SE',
                'name' => 'Sweden',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 213,
                'code' => 'CH',
                'name' => 'Switzerland',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 214,
                'code' => 'SY',
                'name' => 'Syrian Arab Republic',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 215,
                'code' => 'TW',
                'name' => 'Taiwan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 216,
                'code' => 'TJ',
                'name' => 'Tajikistan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 217,
                'code' => 'TZ',
                'name' => 'Tanzania, United Republic of',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 218,
                'code' => 'TH',
                'name' => 'Thailand',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 219,
                'code' => 'TG',
                'name' => 'Togo',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 220,
                'code' => 'TK',
                'name' => 'Tokelau',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 221,
                'code' => 'TO',
                'name' => 'Tonga',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 222,
                'code' => 'TT',
                'name' => 'Trinidad and Tobago',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 223,
                'code' => 'TN',
                'name' => 'Tunisia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 224,
                'code' => 'TR',
                'name' => 'Turkey',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 225,
                'code' => 'TM',
                'name' => 'Turkmenistan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 226,
                'code' => 'TC',
                'name' => 'Turks and Caicos Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 227,
                'code' => 'TV',
                'name' => 'Tuvalu',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 228,
                'code' => 'UG',
                'name' => 'Uganda',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 229,
                'code' => 'UA',
                'name' => 'Ukraine',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 230,
                'code' => 'AE',
                'name' => 'United Arab Emirates',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 231,
                'code' => 'GB',
                'name' => 'United Kingdom',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 232,
                'code' => 'US',
                'name' => 'United States',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 233,
                'code' => 'UM',
                'name' => 'United States minor outlying islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 234,
                'code' => 'UY',
                'name' => 'Uruguay',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 235,
                'code' => 'UZ',
                'name' => 'Uzbekistan',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 236,
                'code' => 'VU',
                'name' => 'Vanuatu',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 237,
                'code' => 'VA',
                'name' => 'Vatican City State',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 238,
                'code' => 'VE',
                'name' => 'Venezuela',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 239,
                'code' => 'VN',
                'name' => 'Vietnam',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 240,
                'code' => 'VG',
                'name' => 'Virgin Islands (British)',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 241,
                'code' => 'VI',
                'name' => 'Virgin Islands (U.S.)',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 242,
                'code' => 'WF',
                'name' => 'Wallis and Futuna Islands',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 243,
                'code' => 'EH',
                'name' => 'Western Sahara',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 244,
                'code' => 'YE',
                'name' => 'Yemen',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 245,
                'code' => 'ZM',
                'name' => 'Zambia',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 246,
                'code' => 'ZW',
                'name' => 'Zimbabwe',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}



