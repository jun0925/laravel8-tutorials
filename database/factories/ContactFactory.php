<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * 팩토리가 사용될 모델 클래스
     * 
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // 고정값 만들기
        // return [
        //     'name' => 'Lupita Smith',
        //     'email' => 'lupita@gmail.com',
        // ];

        // faker 사용
        // return [
        //     'name' => $this->faker->name,
        //     'email' => $this->faker->email,
        // ];

        // 임의로 생성된 데이터의 유니크 값 보장하기
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->email,
        ];

    }

    public function vip()
    {
        return $this->state(function (array $attributes) {
            return [
                'vip' => true
            ];
        });
    }
}
