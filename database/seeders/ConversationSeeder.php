<?php

namespace Database\Seeders;

use App\Models\Conversation;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Conversation::create([
            'title' => 'Test Conversation',
            'creator_id' => 1,
            'inter1_id' => 2,
            'inter2_id' => 3,
        ]);

        Conversation::create([
            'title' => 'Another Test Conversation',
            'creator_id' => 2,
            'inter1_id' => 3,
            'inter2_id' => 4,
        ]);
        factory(Conversation::class, 10)->create();
    }
}
