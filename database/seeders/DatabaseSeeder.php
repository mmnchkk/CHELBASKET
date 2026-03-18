<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Balls;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create([
        'name' => 'Мяч баскетбольный',
        'description' => 'Официальный баскетбольный мяч с логотипом',
    'stock_quantity' => 10,
    'price' => 3990,
    'characteristics' => [],
    'path_img' => 'images/mayach_basket.jpg',
]);

Product::create([
    'name' => 'Тетрадь',
    'description' => 'Тетрадь с брендированной обложкой',
    'stock_quantity' => 10,
    'price' => 290,
    'characteristics' => [],
    'path_img' => 'images/tetrad.jpg',
]);

Product::create([
    'name' => 'Чехол для телефона',
    'description' => 'Защитный чехол с логотипом команды',
    'stock_quantity' => 10,
    'price' => 990,
    'characteristics' => [],
    'path_img' => 'images/chehol_phone.jpg',
]);

Product::create([
    'name' => 'Колонка-ночник',
    'description' => 'Портативная Bluetooth-колонка с функцией ночника',
    'stock_quantity' => 10,
    'price' => 1200,
    'characteristics' => [],
    'path_img' => 'images/kolonka_nochnik.jpg',
]);

Product::create([
    'name' => 'Мешок для обуви',
    'description' => 'Стильный мешок для хранения/переноски обуви',
    'stock_quantity' => 10,
    'price' => 650,
    'characteristics' => [],
    'path_img' => 'images/meshok_obuv.jpg',
]);

Product::create([
    'name' => 'Носки',
    'description' => 'Фирменные спортивные носки',
    'stock_quantity' => 10,
    'price' => 390,
    'characteristics' => [],
    'path_img' => 'images/noski.jpg',
]);

Product::create([
    'name' => 'Значок железный',
    'description' => 'Металлический значок с логотипом',
    'stock_quantity' => 10,
    'price' => 450,
    'characteristics' => [],
    'path_img' => 'images/znachok.jpg',
]);

Product::create([
    'name' => 'Леброша маленький',
    'description' => 'Мини-леброша с логотипом',
    'stock_quantity' => 10,
    'price' => 1500,
    'characteristics' => [],
    'path_img' => 'images/lebroshe_small.jpg',
]);

Product::create([
    'name' => 'Леброша средний',
    'description' => 'Средний размер леброши',
    'stock_quantity' => 10,
    'price' => 2000,
    'characteristics' => [],
    'path_img' => 'images/lebroshe_medium.jpg',
]);

Product::create([
    'name' => 'Леброша большой',
    'description' => 'Большая мягкая леброша',
    'stock_quantity' => 10,
    'price' => 1500,
    'characteristics' => [],
    'path_img' => 'images/lebroshe_large.jpg',
]);

Product::create([
    'name' => 'Мяч мягкий',
    'description' => 'Мягкий антистресс-мяч',
    'stock_quantity' => 10,
    'price' => 1200,
    'characteristics' => [],
    'path_img' => 'images/myach_myagkiy.jpg',
]);

Product::create([
    'name' => 'Подушка',
    'description' => 'Декоративная подушка с принтом',
    'stock_quantity' => 10,
    'price' => 790,
    'characteristics' => [],
    'path_img' => 'images/podushka.jpg',
]);

Product::create([
    'name' => 'Наклейка большая',
    'description' => 'Большая виниловая наклейка',
    'stock_quantity' => 10,
    'price' => 150,
    'characteristics' => [],
    'path_img' => 'images/nakleyka_big.jpg',
]);

Product::create([
    'name' => 'Стикерпак',
    'description' => 'Набор стикеров',
    'stock_quantity' => 10,
    'price' => 150,
    'characteristics' => [],
    'path_img' => 'images/stickerpack.jpg',
]);

Product::create([
    'name' => 'Браслет силиконовый',
    'description' => 'Силиконовый браслет с логотипом',
    'stock_quantity' => 10,
    'price' => 150,
    'characteristics' => [],
    'path_img' => 'images/braslet.jpg',
]);

Product::create([
    'name' => 'Бейсболка детская',
    'description' => 'Детская бейсболка с логотипом',
    'stock_quantity' => 10,
    'price' => 1500,
    'characteristics' => [],
    'path_img' => 'images/beysbolka_detskaya.jpg',
]);

Product::create([
    'name' => 'Кепка',
    'description' => 'Классическая кепка с вышивкой',
    'stock_quantity' => 10,
    'price' => 1990,
    'characteristics' => [],
    'path_img' => 'images/kepka.jpg',
]);

Product::create([
    'name' => 'Бутылка для воды',
    'description' => 'Спортивная бутылка с логотипом',
    'stock_quantity' => 10,
    'price' => 690,
    'characteristics' => [],
    'path_img' => 'images/butilka_voda.jpg',
]);

Product::create([
    'name' => 'Ремувка',
    'description' => 'Ремувка / бирка на рюкзак',
    'stock_quantity' => 10,
    'price' => 290,
    'characteristics' => [],
    'path_img' => 'images/remuvka.jpg',
]);

Product::create([
    'name' => 'Наушники',
    'description' => 'Проводные/беспроводные наушники',
    'stock_quantity' => 10,
    'price' => 1990,
    'characteristics' => [],
    'path_img' => 'images/naushniki.jpg',
]);

Product::create([
    'name' => 'Попсокет',
    'description' => 'PopSocket с брендированным дизайном',
    'stock_quantity' => 10,
    'price' => 150,
    'characteristics' => [],
    'path_img' => 'images/popsoket.jpg',
]);

Product::create([
    'name' => 'Термос',
    'description' => 'Термос для напитков',
    'stock_quantity' => 10,
    'price' => 1200,
    'characteristics' => [],
    'path_img' => 'images/termos.jpg',
]);

Product::create([
    'name' => 'Коврик для мыши',
    'description' => 'Игровой коврик с логотипом',
    'stock_quantity' => 10,
    'price' => 690,
    'characteristics' => [],
    'path_img' => 'images/kovrik_mouse.jpg',
]);

Product::create([
    'name' => 'Картахолдер',
    'description' => 'Картахолдер для карт',
    'stock_quantity' => 10,
    'price' => 290,
    'characteristics' => [],
    'path_img' => 'images/kartkholder.jpg',
]);

Product::create([
    'name' => 'Картахолдер из экокожи',
    'description' => 'Стильный картахолдер из экокожи',
    'stock_quantity' => 10,
    'price' => 550,
    'characteristics' => [],
    'path_img' => 'images/kartkholder_eco.jpg',
]);

Product::create([
    'name' => '3D стикер',
    'description' => 'Объёмный 3D-стикер',
    'stock_quantity' => 10,
    'price' => 100,
    'characteristics' => [],
    'path_img' => 'images/3d_sticker.jpg',
]);

Product::create([
    'name' => 'Кружка',
    'description' => 'Керамическая кружка с принтом',
    'stock_quantity' => 10,
    'price' => 450,
    'characteristics' => [],
    'path_img' => 'images/kruzhka.jpg',
]);

Product::create([
    'name' => 'Шарф',
    'description' => 'Тёплый шарф с логотипом',
    'stock_quantity' => 10,
    'price' => 1290,
    'characteristics' => [],
    'path_img' => 'images/sharf.jpg',
]);

Product::create([
    'name' => 'Ручка',
    'description' => 'Шариковая ручка с логотипом',
    'stock_quantity' => 10,
    'price' => 180,
    'characteristics' => [],
    'path_img' => 'images/ruchka.jpg',
]);

Product::create([
    'name' => 'Кофта',
    'description' => 'Тёплая кофта с логотипом',
    'stock_quantity' => 10,
    'price' => 3000,
    'characteristics' => [],
    'path_img' => 'images/kofta.jpg',
]);

Product::create([
    'name' => 'Бомбер',
    'description' => 'Стильный бомбер',
    'stock_quantity' => 10,
    'price' => 10990,
    'characteristics' => [],
    'path_img' => 'images/bomber.jpg',
]);

// ── Баскетбольные майки ───────────────────────────────────────────────

Product::create([
    'name' => 'Майка тренировочная "ЧБК"',
    'description' => 'Тренировочная майка ЧБК',
    'stock_quantity' => 10,
    'price' => 2000,
    'characteristics' => [],
    'path_img' => 'images/mayka_tren_chbk.jpg',
]);

Product::create([
    'name' => 'Майка игровая чёрная',
    'description' => 'Игровая майка чёрного цвета',
    'stock_quantity' => 10,
    'price' => 2500,
    'characteristics' => [],
    'path_img' => 'images/mayka_igrovaya_black.jpg',
]);

Product::create([
    'name' => 'Майка игровая белая',
    'description' => 'Игровая майка белого цвета',
    'stock_quantity' => 10,
    'price' => 2500,
    'characteristics' => [],
    'path_img' => 'images/mayka_igrovaya_white.jpg',
]);

Product::create([
    'name' => 'Бутылка для воды',
    'description' => 'Спортивная бутылка с логотипом',
    'stock_quantity' => 10,
    'price' => 690,
    'characteristics' => [],
    'path_img' => 'images/butilka_voda.jpg',
]);

Product::create([
    'name' => 'Ремувка',
    'description' => 'Ремувка / бирка на рюкзак',
    'stock_quantity' => 10,
    'price' => 290,
    'characteristics' => [],
    'path_img' => 'images/remuvka.jpg',
]);

Product::create([
    'name' => 'Наушники',
    'description' => 'Проводные/беспроводные наушники',
    'stock_quantity' => 10,
    'price' => 1990,
    'characteristics' => [],
    'path_img' => 'images/naushniki.jpg',
]);

Product::create([
    'name' => 'Попсокет',
    'description' => 'PopSocket с брендированным дизайном',
    'stock_quantity' => 10,
    'price' => 150,
    'characteristics' => [],
    'path_img' => 'images/popsoket.jpg',
]);

Product::create([
    'name' => 'Термос',
    'description' => 'Термос для напитков',
    'stock_quantity' => 10,
    'price' => 1200,
    'characteristics' => [],
    'path_img' => 'images/termos.jpg',
]);

Product::create([
    'name' => 'Коврик для мыши',
    'description' => 'Игровой коврик с логотипом',
    'stock_quantity' => 10,
    'price' => 690,
    'characteristics' => [],
    'path_img' => 'images/kovrik_mouse.jpg',
]);

Product::create([
    'name' => 'Картахолдер',
    'description' => 'Картахолдер для карт',
    'stock_quantity' => 10,
    'price' => 290,
    'characteristics' => [],
    'path_img' => 'images/kartkholder.jpg',
]);

Product::create([
    'name' => 'Картахолдер из экокожи',
    'description' => 'Стильный картахолдер из экокожи',
    'stock_quantity' => 10,
    'price' => 550,
    'characteristics' => [],
    'path_img' => 'images/kartkholder_eco.jpg',
]);

Product::create([
    'name' => '3D стикер',
    'description' => 'Объёмный 3D-стикер',
    'stock_quantity' => 10,
    'price' => 100,
    'characteristics' => [],
    'path_img' => 'images/3d_sticker.jpg',
]);

Product::create([
    'name' => 'Кружка',
    'description' => 'Керамическая кружка с принтом',
    'stock_quantity' => 10,
    'price' => 450,
    'characteristics' => [],
    'path_img' => 'images/kruzhka.jpg',
]);

Product::create([
    'name' => 'Шарф',
    'description' => 'Тёплый шарф с логотипом',
    'stock_quantity' => 10,
    'price' => 1290,
    'characteristics' => [],
    'path_img' => 'images/sharf.jpg',
]);

Product::create([
    'name' => 'Ручка',
    'description' => 'Шариковая ручка с логотипом',
    'stock_quantity' => 10,
    'price' => 180,
    'characteristics' => [],
    'path_img' => 'images/ruchka.jpg',
]);

Product::create([
    'name' => 'Кофта',
    'description' => 'Тёплая кофта с логотипом',
    'stock_quantity' => 10,
    'price' => 3000,
    'characteristics' => [],
    'path_img' => 'images/kofta.jpg',
]);

Product::create([
    'name' => 'Бомбер',
    'description' => 'Стильный бомбер',
    'stock_quantity' => 10,
    'price' => 10990,
    'characteristics' => [],
    'path_img' => 'images/bomber.jpg',
]);

// ── Баскетбольные майки ───────────────────────────────────────────────

Product::create([
    'name' => 'Майка тренировочная "ЧБК"',
    'description' => 'Тренировочная майка ЧБК',
    'stock_quantity' => 10,
    'price' => 2000,
    'characteristics' => [],
    'path_img' => 'images/mayka_tren_chbk.jpg',
]);

Product::create([
    'name' => 'Майка игровая чёрная',
    'description' => 'Игровая майка чёрного цвета',
    'stock_quantity' => 10,
    'price' => 2500,
    'characteristics' => [],
    'path_img' => 'images/mayka_igrovaya_black.jpg',
]);

Product::create([
    'name' => 'Майка игровая белая',
    'description' => 'Игровая майка белого цвета',
    'stock_quantity' => 10,
    'price' => 2500,
    'characteristics' => [],
    'path_img' => 'images/mayka_igrovaya_white.jpg',
]);

Product::create([
    'name' => 'Майка оранжевая игровая',
    'description' => 'Яркая оранжевая игровая майка',
    'stock_quantity' => 10,
    'price' => 2500,
    'characteristics' => [],
    'path_img' => 'images/mayka_orange.jpg',
]);

Product::create([
    'name' => 'Майка "MEDIA BASKET"',
    'description' => 'Майка с надписью MEDIA BASKET',
    'stock_quantity' => 10,
    'price' => 2500,
    'characteristics' => [],
    'path_img' => 'images/mayka_media.jpg',
]);

Product::create([
    'name' => 'Майка "Славянка-ЧКПЗ"',
    'description' => 'Майка Славянка-ЧКПЗ',
    'stock_quantity' => 10,
    'price' => 2000,
    'characteristics' => [],
    'path_img' => 'images/mayka_slavyanka.jpg',
]);

// ── Одежда (футболки, лонгсливы и т.д.) ────────────────────────────────

Product::create([
    'name' => 'Футболка "Квадрат"',
    'description' => 'Футболка с дизайном "Квадрат"',
    'stock_quantity' => 10,
    'price' => 3500,
    'characteristics' => [],
    'path_img' => 'images/futbolka_kvadrat.jpg',
]);

Product::create([
    'name' => 'Футболка "Logo Chelbasket"',
    'description' => 'Футболка с логотипом Chelbasket',
    'stock_quantity' => 10,
    'price' => 2990,
    'characteristics' => [],
    'path_img' => 'images/futbolka_logo.jpg',
]);

Product::create([
    'name' => 'Футболка "ЧБК"',
    'description' => 'Футболка с надписью ЧБК',
    'stock_quantity' => 10,
    'price' => 1990,
    'characteristics' => [],
    'path_img' => 'images/futbolka_chbk.jpg',
]);

Product::create([
    'name' => 'Футболка "Championship"',
    'description' => 'Футболка Championship',
    'stock_quantity' => 10,
    'price' => 2300,
    'characteristics' => [],
    'path_img' => 'images/futbolka_championship.jpg',
]);

Product::create([
    'name' => 'Футболка "CHILL GUY"',
    'description' => 'Футболка Chill Guy',
    'stock_quantity' => 10,
    'price' => 1990,
    'characteristics' => [],
    'path_img' => 'images/futbolka_chill_guy.jpg',
]);

Product::create([
    'name' => 'Поло "ЧБК"',
    'description' => 'Поло с логотипом ЧБК',
    'stock_quantity' => 10,
    'price' => 2500,
    'characteristics' => [],
    'path_img' => 'images/polo_chbk.jpg',
]);

Product::create([
    'name' => 'Футболка с логотипом',
    'description' => 'Базовая футболка с логотипом',
    'stock_quantity' => 10,
    'price' => 1990,
    'characteristics' => [],
    'path_img' => 'images/futbolka_logo_base.jpg',
]);

Product::create([
    'name' => 'Футболка детская вышивка',
    'description' => 'Детская футболка с вышивкой',
    'stock_quantity' => 10,
    'price' => 1990,
    'characteristics' => [],
    'path_img' => 'images/futbolka_detskaya_vyshivka.jpg',
]);

Product::create([
    'name' => 'Футболка детская с логотипом',
    'description' => 'Детская футболка с принтом логотипа',
    'stock_quantity' => 10,
    'price' => 1500,
    'characteristics' => [],
    'path_img' => 'images/futbolka_detskaya_logo.jpg',
]);

Product::create([
    'name' => 'Лонгслив "ВЫШЕ.БЫСТРЕЕ.СИЛЬНЕЕ."',
    'description' => 'Лонгслив с мотивационной надписью',
    'stock_quantity' => 10,
    'price' => 3200,
    'characteristics' => [],
    'path_img' => 'images/longsleeve_motivation.jpg',
]);

Product::create([
    'name' => 'Лонгслив "ЧБК"',
    'description' => 'Лонгслив с логотипом ЧБК',
    'stock_quantity' => 10,
    'price' => 2990,
    'characteristics' => [],
    'path_img' => 'images/longsleeve_chbk.jpg',
]);

Product::create([
    'name' => 'Костюм спортивный',
    'description' => 'Спортивный костюм (куртка + штаны)',
    'stock_quantity' => 10,
    'price' => 6990,
    'characteristics' => [],
    'path_img' => 'images/kostyum_sport.jpg',
]);

Product::create([
    'name' => 'Шорты',
    'description' => 'Спортивные шорты',
    'stock_quantity' => 10,
    'price' => 1990,
    'characteristics' => [],
    'path_img' => 'images/shorty.jpg',
]);

Product::create([
    'name' => 'Разминка игровая',
    'description' => 'Игровая разминочная форма',
    'stock_quantity' => 10,
    'price' => 3500,
    'characteristics' => [],
    'path_img' => 'images/razminka.jpg',
]);
    }

}
