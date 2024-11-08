<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $statuses= [
            "Pending",
            "Active",
            "Inactive",
            "Completed",
            "In Progress",
        ];

        DB::table('statuses')->truncate();
        foreach ($statuses as $entry){
            $entry = Status::create([
                'name'=> $entry
            ]);
            $entry->save();
        }

        $services= [
            "Decoder Renewal",
            "General Inquiries",
        ];

        DB::table('services')->truncate();
        foreach ($services as $entry){
            $entry = Service::create([
                'name'=> $entry
            ]);
            $entry->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
