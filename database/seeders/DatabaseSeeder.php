<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Account;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $countries = json_decode(Storage::disk('local')->get('countries.json'));

        foreach($countries as $country){
            $data = [
                'name' => $country->name,
                'code' => $country->alpha3Code,
                'capital' => $country->capital,
                'callingCodes' => $country->callingCodes[0],
                'timezones' => $country->timezones[0],
                'currenciesCode' => $country->currencies[0]->code,
                'currencySymbol' => $country->currencies[0]->symbol,
                'flag' => $country->flag,
            ];
            Country::firstOrCreate($data);
        }

        $user = User::factory()->create([
            // 'account_id' => $account->id,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'password' => 'secret',
            'owner' => true,
        ]);

        Account::create([
            'user_id' => $user->id, 
            'first_name' => 'John',
            'last_name' => 'Doe',
            'dob' => '1973-04-25',
            'address' => '11 Valentines Road, Ilford',
            'city' => 'London',
            'state' => 'Essex',
            'zip' => 'IG1 4RZ',
            'country_id' => '088',
            'phone' => '0770492700',
        ]);

        User::factory(5)->create(
            // ['account_id' => $account->id]
        );

        $organizations = Organization::factory(100)
            ->create();

        Contact::factory(100)
            ->create()
            ->each(function ($contact) use ($organizations) {
                $contact->update(['organization_id' => $organizations->random()->id]);
            });

        $this->call([
            RolePermissionSeeder::class,
            PairSeeder::class
        ]);
        
    }
}
