<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'  => $this->faker->firstName,
            'last_name'   => $this->faker->lastName,
            'email'       => $this->faker->unique()->safeEmail, // メール
            'gender'      => $this->faker->randomElement(['male', 'female', 'other']), // 性別
            'tel'         => $this->faker->phoneNumber, // 電話番号
            'address'     => $this->faker->address, // 住所
            'building'    => $this->faker->secondaryAddress, // 建物名
            'select_box'  => $this->faker->randomElement(['商品の交換について', '返品について', 'その他']), // お問い合わせの種類
            'content'     => $this->faker->realText(100), // お問い合わせ内容
            'created_at'  => now(),
            'updated_at'  => now(),
        ];
    }
}
