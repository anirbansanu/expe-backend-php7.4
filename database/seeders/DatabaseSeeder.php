<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();



        $this->call(SubCategorySeeder::class);
        $this->call(SubCategoryMenuSeeder::class);

        $this->call(GiftsDonationsSeeder::class);
        $this->call(HealthWellnessSeeder::class);
        $this->call(InsuranceSeeder::class);
        $this->call(PersonalCareSeeder::class);
        $this->call(GiftsDonationsSeeder::class);
        $this->call(HealthWellnessSeeder::class);
        $this->call(InsuranceSeeder::class);
        $this->call(PersonalCareSeeder::class);
        $this->call(ClothingAccessoriesSeeder::class);
        $this->call(DebtPaymentsSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(EntertainmentSeeder::class);

        $this->call(TravelVacationSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(UtilitiesSeeder::class);
    }
}
