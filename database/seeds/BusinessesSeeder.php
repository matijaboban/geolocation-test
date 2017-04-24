<?php

use App\Models\Businesses;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BusinessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                // Create random requests
        factory(Businesses::class, rand(2000, 3000))
            ->create();

            // Requests::chunk(100, function ($requests) {
            //     foreach ($requests as $request) {

            //         // Create request inputs
            //         foreach (Types::getTypeFields($request->request_type) as $field) {

            //             // define values
            //             switch ($field->type) {
            //                 case 'text':
            //                     $value = (Faker::create())->realText($maxNbChars = $field->validation->maxlength->rule);
            //                     break;

            //                 case 'number':
            //                     $value = (Faker::create())->year($max = 'now');
            //                     break;

            //                 default:
            //                     $value = (Faker::create())->realText($maxNbChars = 200);
            //                     break;
            //             };

            //             factory(RequestInputs::class, 1)
            //                 ->create(
            //                 [
            //                     'request_id'    => $request->id,
            //                     'type_id'       => $request->request_type,
            //                     'type_field_id' => $field->field_id,
            //                     'value'         => $value,
            //                 ]);
            //         }

            //         // Create initial request status entry
            //         factory(RequestStatuses::class, 1)
            //             ->create(
            //             [
            //                 'request_id'    => $request->id,
            //                 'note'         => 'Initial request',
            //             ]);

            //         // Randomly create additional request status entry
            //         // A 1 second timestamp is added to the status in order for
            //         // the status collection/processign function to differentiate
            //         // them as intended
            //         if (random_int(0, 1)) {
            //             $timeStamp = Carbon::now()->addSeconds(1);
            //             factory(RequestStatuses::class, 1)
            //             ->create(
            //             [
            //                 'request_id'    => $request->id,
            //                 'status_id'     => rand(2, Statuses::max('id')),
            //                 'note'         => (Faker::create())->realText($maxNbChars = 60),
            //                 'created_at'    => $timeStamp,
            //                 'updated_at'    => $timeStamp,
            //             ]);
            //         }

            //         // Force garabage collection
            //         // Garbage collection is force at the end of the cycle due to high memory usage
            //         // of the factory/Faker class. If it was left unattented untill the end of the
            //         // cycle it would potentionly cause a fatal "Out of memory" error.
            //         gc_collect_cycles();
            //     }
            // });
    }
}
