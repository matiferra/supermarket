<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'nombre' => $this->faker->words(3, true),
        'descripcion' => $this->faker->text(300),
        'precio' => $this->faker->randomFloat(2, 2, 5000),
        'id_marca' => $this->faker->randomDigitNotNull(),
        ];
    }
}
