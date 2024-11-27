<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use function Laravel\Prompts\text;
use function Laravel\Prompts\select;
use function Laravel\Prompts\confirm;

class MakePokemonCommand extends Command
{
    protected $signature = 'make:pokemon';
    protected $description = 'Create a new Pokémon';

    public function handle()
    {
        // Prompt to get the name of the Pokémon
        $name = text('What should the name be?');

        // Prompt to get the Pokémon's type (with options)
        $type = select('What type of Pokémon is this?', ['Fire', 'Water', 'Electric', 'Grass', 'Bug', 'Fairy']);

        // Prompt to get the Pokémon's level (numeric)
        $level = text('What is the Pokémon\'s level?', default: '5');

        // Confirm prompt to ask if the Pokémon has a nickname
        $hasNickname = confirm('Does this Pokémon have a nickname?');

        // If they confirmed, ask for the nickname
        $nickname = $hasNickname ? text('What is the Pokémon\'s nickname?') : null;
        // Output with styles
        $this->info("\nYour Pokémon is being created...\n");
        $this->line("<fg=cyan>Name:</> $name");
        $this->line("<fg=green>Type:</> $type");
        $this->line("<fg=yellow>Level:</> $level");

        if ($nickname) {
            $this->line("<fg=magenta>Nickname:</> $nickname");
        } else {
            $this->line("<fg=red>No nickname provided.</>");
        }
        $this->info("\nYour Pokémon has been successfully created!");
    }
}
