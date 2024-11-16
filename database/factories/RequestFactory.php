<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DocumentReferral>
 */
class RequestFactory extends Factory
{
    protected static int $index = 0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $request_type = ['Document', 'Assistance', 'Others'];

        $curIndex = self::$index % count($request_type);
        self::$index++;

        return [
            //
            'request_type' => $request_type[$curIndex],
            'details' => '',
            'requested_document' => '',
            'request_purpose' => '',
            'request_details' => ''
        ];
    }
}
