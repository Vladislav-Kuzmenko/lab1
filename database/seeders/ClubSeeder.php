<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubSeeder extends Seeder
{
    public function run(): void
    {
        $clubs = [
            ['name' => 'Буковина', 'city' => 'Чернівці', 'stadium' => 'СОУ «Буковина»', 'founded_year' => 1958, 'head_coach' => 'Валерій Кривенцов'],
            ['name' => 'Верес', 'city' => 'Рівне', 'stadium' => '«Авангард»', 'founded_year' => 1957, 'head_coach' => 'Олег Шандрук'],
            ['name' => 'Динамо', 'city' => 'Київ', 'stadium' => 'НСК «Олімпійський»', 'founded_year' => 1927, 'head_coach' => 'Олександр Шовковський'],
            ['name' => 'Епіцентр', 'city' => 'Кам\'янець-Подільський', 'stadium' => '«Тонкочеєва»', 'founded_year' => 2019, 'head_coach' => 'Сергій Нагорняк'],
            ['name' => 'Зоря', 'city' => 'Луганськ', 'stadium' => '«Славутич-Арена»', 'founded_year' => 1923, 'head_coach' => 'Юрій Коваль'],
            ['name' => 'Карпати', 'city' => 'Львів', 'stadium' => '«Україна»', 'founded_year' => 1963, 'head_coach' => 'Владислав Лупашко'],
            ['name' => 'Колос', 'city' => 'Ковалівка', 'stadium' => '«Колос»', 'founded_year' => 2012, 'head_coach' => 'Олександр Поздєєв'],
            ['name' => 'Кривбас', 'city' => 'Кривий Ріг', 'stadium' => '«Гірник»', 'founded_year' => 1959, 'head_coach' => 'Юрій Вернидуб'],
            ['name' => 'Кудрівка', 'city' => 'Кудрівка', 'stadium' => '«Кудрівка-Арена»', 'founded_year' => 1982, 'head_coach' => 'Василь Баранов'],
            ['name' => 'ЛНЗ', 'city' => 'Черкаси', 'stadium' => '«Черкаси-Арена»', 'founded_year' => 2006, 'head_coach' => 'Андрес Карраско'],
            ['name' => 'Полісся', 'city' => 'Житомир', 'stadium' => 'Центральний стадіон', 'founded_year' => 1959, 'head_coach' => 'Імад Ашур'],
            ['name' => 'Харків', 'city' => 'Харків', 'stadium' => '«Металіст»', 'founded_year' => 2020, 'head_coach' => 'Віктор Скрипник'],
            ['name' => 'Лівий Берег', 'city' => 'Київ', 'stadium' => '«Лівий Берег»', 'founded_year' => 2017, 'head_coach' => 'Віталій Первак'],
            ['name' => 'Чорноморець', 'city' => 'Одеса', 'stadium' => '«Чорноморець»', 'founded_year' => 1936, 'head_coach' => 'Олександр Бабич'],
            ['name' => 'Шахтар', 'city' => 'Донецьк', 'stadium' => '«Арена Львів»', 'founded_year' => 1936, 'head_coach' => 'Маріно Пушич'],
        ];

        foreach ($clubs as $club) {
            Club::create($club);
        }
    }
}
