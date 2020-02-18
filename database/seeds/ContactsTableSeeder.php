<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->fisrtName = 'Hai';
        $contact->lastName ="Tran Van";
        $contact->phone = "0989704982";
        $contact->email = 'tranhaicoder@gmail.com';
        $contact->address = 'Ha Tinh';
        $contact->avatar = "0989704982.jpg";
        $contact->save();

        $contact = new Contact();
        $contact->fisrtName = 'Phuoc';
        $contact->lastName ="Tran Van";
        $contact->phone = "05587815";
        $contact->email = 'tranphuoc@gmail.com';
        $contact->address = 'Ha Noi';
        $contact->avatar = "05587815.jpg";
        $contact->save();
    }
}
