<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;
    public function definition(){
        return [
            'name' => $this -> faker -> name(),
            'content' => $this -> faker -> text(),
        ];
    }
}
