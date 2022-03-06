<?php

namespace Modules\BaseInfo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('sys_provinces')->delete();
        DB::table('sys_provinces')->insert([
            [
                'id' => 3761,
                'code' => 'V58',
                'country_code' => 'VN',
                'name' => 'Nghệ An',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3762,
                'code' => 'V59',
                'country_code' => 'VN',
                'name' => 'Ninh Bình',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3763,
                'code' => 'V60',
                'country_code' => 'VN',
                'name' => 'Ninh Thuận',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3764,
                'code' => 'V65',
                'country_code' => 'VN',
                'name' => 'Sóc Trăng',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3765,
                'code' => 'V67',
                'country_code' => 'VN',
                'name' => 'Trà Vinh',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3766,
                'code' => 'V68',
                'country_code' => 'VN',
                'name' => 'Tuyên Quang',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3767,
                'code' => 'V69',
                'country_code' => 'VN',
                'name' => 'Vĩnh Long',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3768,
                'code' => 'V70',
                'country_code' => 'VN',
                'name' => 'Yên Bái',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3769,
                'code' => 'V90',
                'country_code' => 'VN',
                'name' => 'Lào Cai',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3770,
                'code' => 'V37',
                'country_code' => 'VN',
                'name' => 'Tiền Giang',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3771,
                'code' => 'V66',
                'country_code' => 'VN',
                'name' => 'Thừa Thiên Huế',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3772,
                'code' => 'V55',
                'country_code' => 'VN',
                'name' => 'Kon Tum',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3773,
                'code' => 'V34',
                'country_code' => 'VN',
                'name' => 'Thanh Hóa',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3774,
                'code' => 'V35',
                'country_code' => 'VN',
                'name' => 'Thái Bình',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3775,
                'code' => 'V33',
                'country_code' => 'VN',
                'name' => 'Tây Ninh',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3776,
                'code' => 'V32',
                'country_code' => 'VN',
                'name' => 'Sơn La',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3777,
                'code' => 'V64',
                'country_code' => 'VN',
                'name' => 'Quảng Trị',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3778,
                'code' => 'V30',
                'country_code' => 'VN',
                'name' => 'Quảng Ninh',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3779,
                'code' => 'V63',
                'country_code' => 'VN',
                'name' => 'Quảng Ngãi',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3780,
                'code' => 'V62',
                'country_code' => 'VN',
                'name' => 'Quảng Bình',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3781,
                'code' => 'V61',
                'country_code' => 'VN',
                'name' => 'Phú Yên',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3782,
                'code' => 'V53',
                'country_code' => 'VN',
                'name' => 'Hòa Bình',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3783,
                'code' => 'V24',
                'country_code' => 'VN',
                'name' => 'Long An',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3784,
                'code' => 'V39',
                'country_code' => 'VN',
                'name' => 'Lạng Sơn',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3785,
                'code' => 'V23',
                'country_code' => 'VN',
                'name' => 'Lâm Đồng',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3786,
                'code' => 'V89',
                'country_code' => 'VN',
                'name' => 'Lai Châu',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3787,
                'code' => 'V21',
                'country_code' => 'VN',
                'name' => 'Kiên Giang',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3788,
                'code' => 'V54',
                'country_code' => 'VN',
                'name' => 'Khánh Hòa',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3789,
                'code' => 'V20',
                'country_code' => 'VN',
                'name' => 'Hồ Chí Minh',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3790,
                'code' => 'V52',
                'country_code' => 'VN',
                'name' => 'Hà Tĩnh',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3791,
                'code' => 'V50',
                'country_code' => 'VN',
                'name' => 'Hà Giang',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3792,
                'code' => 'V49',
                'country_code' => 'VN',
                'name' => 'Gia Lai',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3793,
                'code' => 'V44',
                'country_code' => 'VN',
                'name' => 'Ha Nội',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3794,
                'code' => 'V87',
                'country_code' => 'VN',
                'name' => 'Cần Thơ',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3795,
                'code' => 'V13',
                'country_code' => 'VN',
                'name' => 'Hải Phòng',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3796,
                'code' => 'V47',
                'country_code' => 'VN',
                'name' => 'Bình Thuận',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3797,
                'code' => 'V09',
                'country_code' => 'VN',
                'name' => 'Đồng Tháp',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3798,
                'code' => 'V43',
                'country_code' => 'VN',
                'name' => 'Đồng Nai',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3799,
                'code' => 'V88',
                'country_code' => 'VN',
                'name' => 'Ðắc Lắk',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3800,
                'code' => 'V45',
                'country_code' => 'VN',
                'name' => 'Bà Rịa-Vũng Tàu',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3801,
                'code' => 'V05',
                'country_code' => 'VN',
                'name' => 'Cao Bằng',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3802,
                'code' => 'V46',
                'country_code' => 'VN',
                'name' => 'Bình Định',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3803,
                'code' => 'V03',
                'country_code' => 'VN',
                'name' => 'Bến Tre',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3804,
                'code' => 'V01',
                'country_code' => 'VN',
                'name' => 'An Giang',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3805,
                'code' => 'V91',
                'country_code' => 'VN',
                'name' => 'Ðắk Nông',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3806,
                'code' => 'V92',
                'country_code' => 'VN',
                'name' => 'Ðiện Biên',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3807,
                'code' => 'V74',
                'country_code' => 'VN',
                'name' => 'Bắc Ninh',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3808,
                'code' => 'V71',
                'country_code' => 'VN',
                'name' => 'Bắc Giang',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3809,
                'code' => 'V78',
                'country_code' => 'VN',
                'name' => 'Đà Nẵng',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3810,
                'code' => 'V75',
                'country_code' => 'VN',
                'name' => 'Bình Dương',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3811,
                'code' => 'V76',
                'country_code' => 'VN',
                'name' => 'Bình Phước',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3812,
                'code' => 'V85',
                'country_code' => 'VN',
                'name' => 'Thái Nguyên',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3813,
                'code' => 'V84',
                'country_code' => 'VN',
                'name' => 'Quảng Nam',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3814,
                'code' => 'V83',
                'country_code' => 'VN',
                'name' => 'Phú Thọ',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3815,
                'code' => 'V82',
                'country_code' => 'VN',
                'name' => 'Nam Định',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3816,
                'code' => 'V80',
                'country_code' => 'VN',
                'name' => 'Hà Nam',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3817,
                'code' => 'V72',
                'country_code' => 'VN',
                'name' => 'Bắc Kạn',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3818,
                'code' => 'V73',
                'country_code' => 'VN',
                'name' => 'Bạc Liêu',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3819,
                'code' => 'V77',
                'country_code' => 'VN',
                'name' => 'Cà Mau',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3820,
                'code' => 'V79',
                'country_code' => 'VN',
                'name' => 'Hải Dương',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3821,
                'code' => 'V81',
                'country_code' => 'VN',
                'name' => 'Hưng Yên',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3822,
                'code' => 'V86',
                'country_code' => 'VN',
                'name' => 'Vĩnh Phúc',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3823,
                'code' => 'V93',
                'country_code' => 'VN',
                'name' => 'Hậu Giang',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

