<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            ['code' => 'NGN', 'name' => 'Naira', 'symbol' => '₦', 'rate_to_naira' => 1, 'country_code' => 'NG','flag'=>'https://files.ekmcdn.com/1000flagsuk/images/nigeria-presidential-flag-with-rope-toggle-137638-p.png'],
            ['code' => 'USD', 'name' => 'US Dollar', 'symbol' => '$', 'rate_to_naira' => 1500, 'country_code' => 'US', 'flag'=>'https://shop.flagfactory.bg/image/cache/catalog/products/flags/national/mockups/usa-1200x720.jpg'],
            ['code' => 'GHS', 'name' => 'Ghanaian Cedi', 'symbol' => '₵', 'rate_to_naira' => 130, 'country_code' => 'GH', 'flag' => 'https://t4.ftcdn.net/jpg/02/10/66/61/360_F_210666124_Z8bYqTWfGx8xisTIvqJgJdsSBOV5i3B7.jpg'],
            ['code' => 'KES', 'name' => 'Kenyan Shilling', 'symbol' => 'KSh', 'rate_to_naira' => 10, 'country_code' => 'KE', 'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Kenya.svg/2560px-Flag_of_Kenya.svg.png'],
            ['code' => 'ZAR', 'name' => 'South African Rand', 'symbol' => 'R', 'rate_to_naira' => 85, 'country_code' => 'ZA', 'flag' => 'https://i.ebayimg.com/images/g/ooIAAOSw9gVjYDKS/s-l1200.jpg'],
            ['code' => 'EUR', 'name' => 'Euro', 'symbol' => '€', 'rate_to_naira' => 1650, 'country_code' => 'EU', 'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/European_flag%2C_incorrect_star_rotation.svg/250px-European_flag%2C_incorrect_star_rotation.svg.png'],
            ['code' => 'GBP', 'name' => 'British Pound', 'symbol' => '£', 'rate_to_naira' => 1900, 'country_code' => 'GB', 'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png'],
            ['code' => 'XOF', 'name' => 'West African CFA franc', 'symbol' => 'CFA', 'rate_to_naira' => 2.5, 'country_code' => 'CI', 'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_C%C3%B4te_d%27Ivoire.svg/2560px-Flag_of_C%C3%B4te_d%27Ivoire.svg.png'],
            ['code' => 'XAF', 'name' => 'Central African CFA franc', 'symbol' => 'FCFA', 'rate_to_naira' => 2.7, 'country_code' => 'CM', 'flag' => 'https://flagpedia.net/data/flags/w1600/cm.png'],
            ['code' => 'ETB', 'name' => 'Ethiopian Birr', 'symbol' => 'Br', 'rate_to_naira' => 30, 'country_code' => 'ET', 'flag' => 'https://www.fotw.info/images/e/et.gif'],
        ];

        foreach ($currencies as $c)
        {
            Currency::updateOrCreate(['code' => $c['code']], $c);
        }
    }
}
