<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'participant' => 'Participante 1' ],
            [ 'participant' => 'Participante 2' ],
            [ 'participant' => 'Participante 3' ],
            [ 'participant' => 'Participante 4' ],
            [ 'participant' => 'Participante 5' ],

        ];

        foreach ($data as $key) {
            Participant::create($key);
        }
    }
}
