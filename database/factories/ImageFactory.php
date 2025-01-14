<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Crear una imagen en memoria con GD Library
        $width = 640;
        $height = 480;
        $image = imagecreatetruecolor($width, $height);

        // Generar colores aleatorios para el fondo
        $red = rand(0, 255);
        $green = rand(0, 255);
        $blue = rand(0, 255);
        $backgroundColor = imagecolorallocate($image, $red, $green, $blue);

        // Rellenar la imagen con el color de fondo
        imagefill($image, 0, 0, $backgroundColor);

        // Agregar texto aleatorio (opcional)
        $textColor = imagecolorallocate($image, 255 - $red, 255 - $green, 255 - $blue); // Texto con contraste
        $text = $this->faker->word();
        imagestring($image, 5, $width / 2 - strlen($text) * 5, $height / 2, $text, $textColor);

        // Obtener una cadena única para el nombre del archivo
        $filename = uniqid() . '.png';

        // Guardar la imagen en el disco
        ob_start();
        imagepng($image);
        $imageData = ob_get_contents();
        ob_end_clean();
        Storage::disk('public')->put('posts/' . $filename, $imageData);

        // Liberar la memoria
        imagedestroy($image);

        return [
            'url' => 'posts/' . $filename,
        ];
    }
}
