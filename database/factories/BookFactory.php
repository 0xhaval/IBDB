<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->paragraph(20),
            'isbn' => '12345678910',
            'pages' => '1000',
            'user_id' => '1',
            'category_id' => '1',
            'image' => 'YnPNQ8LnXOgXSwAy5YAaMmxIkPlVB7e7wz7tKuuv.jpg',
            'author' => 'Aziz'
        ];
    }
}
