<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['id'=>1],
        [
            'address'=>'Address 1',
            'phone'=>'0123456789',
            'email'=>'info@info.com',       
            'facebook'=>'https://www.facebook.com/@Company',       
            'youtube'=>'https://www.youtube.com/@Company',       
            'instgram'=>'https://www.instgram.com/@Company',       
            'linkedin'=>'https://www.linkedin.com/@Company',       
            'twitter'=>'https://www.Twitter.com/@Company',       
        ]);
    }
}
