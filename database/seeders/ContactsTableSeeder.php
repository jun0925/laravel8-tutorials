<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('contacts')->insert([
        //     'name' => 'Lupita Smith',
        //     'email' => 'lupita@gmail.com',
        // ]);
        
        // 1개 생성
        // $contact = Contact::factory()->create();

        // 20개 생성
        // $contacts = Contact::factory()->count(20)->create();

        // vip() 함수를 ContactFactory에 추가해서 사용하기
        // 1개 생성
        // $vip = Contact::factory()->vip()->create();

        // 3개 생성
        $vips = Contact::factory()->count(3)->vip()->create();
    }   
}
