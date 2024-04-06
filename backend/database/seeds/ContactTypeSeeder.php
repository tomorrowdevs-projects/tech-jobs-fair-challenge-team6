<?php

    use App\ContactType;
    use Illuminate\Database\Seeder;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactTypeLabels = [
            'Internal',
            'External',
            'Partner',
        ];

        foreach ($contactTypeLabels as $label) {
            ContactType::create(['label' => $label]);
        }
    }
}
