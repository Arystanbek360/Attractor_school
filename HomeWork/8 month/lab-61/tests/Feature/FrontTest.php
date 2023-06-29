<?php

namespace Tests\Feature;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Dish;
use App\Models\DishType;
use App\Models\Institution;
use App\Models\InstitutionCategory;
use App\Models\Kitchen;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FrontTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    private function data(): array
    {
        $categories = [
            ['name' => 'Ресторан'],
            ['name' => 'Кафе'],
            ['name' => 'Кофейня'],
            ['name' => 'Бар'],
            ['name' => 'антикафе'],
            ['name' => 'клуб'],
            ['name' => 'лаундж'],
        ];
        foreach ($categories as $category) {
            InstitutionCategory::create($category);
        }
        $types = [
            ['name' => 'Супы'],
            ['name' => 'Салаты'],
            ['name' => 'Бургеры'],
            ['name' => 'Десерты'],
            ['name' => 'Гарниры'],
        ];
        foreach ($types as $type) {
            DishType::create($type);
        }
        $categories = [
            ['name' => 'Русская'],
            ['name' => 'Китайская'],
            ['name' => 'Казахская'],
        ];

        foreach ($categories as $category) {
            Kitchen::create($category);
        }
        $institutions = Institution::factory(5)->create();
        $inst = Institution::all();
        foreach ($inst as $ins) {
            Dish::factory(35)->create([
                'institution_id' => $ins->id,
                'kitchen_id' => rand(1, 3),
            ]);
        }
        return ['institutions' => $institutions];
    }

    public function test_index(): void
    {
        $institutions = Institution::all();

        $response = $this->get(route('institutions.index'));

        $response->assertOk();
        $response->assertViewIs('front.index');
        $response->assertViewHas('institutions');
    }

    public function test_show(): void
    {
        $categories = [
            ['name' => 'Ресторан'],
            ['name' => 'Кафе'],
            ['name' => 'Кофейня'],
            ['name' => 'Бар'],
            ['name' => 'антикафе'],
            ['name' => 'клуб'],
            ['name' => 'лаундж'],
        ];

        foreach ($categories as $category) {
            InstitutionCategory::create($category);
        }
        $institution = Institution::factory()->create();

        $response = $this->get(route('institutions.show', compact(['institution'])));

        $response->assertOk();
        $response->assertViewIs('front.show');
        $response->assertViewHas('institution', $institution);
    }

    public function test_show_(): void
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.show', compact(['institution'])));

        $response->assertOk();
        $response->assertViewIs('front.show');
    }

    public function test_show_text_dish_name()
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.show', compact(['institution'])));

        $response->assertOk();
        $response->assertViewIs('front.show');
        $response->assertSee($dishes->first()->name);
    }

    public function test_show_text_dish_picture()
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.show', compact(['institution'])));

        $response->assertOk();
        $response->assertViewIs('front.show');
        $response->assertSee($dishes->first()->picture);
    }

    public function test_show_text_dish_description()
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.show', compact(['institution'])));

        $response->assertOk();
        $response->assertViewIs('front.show');
        $response->assertSee($dishes->first()->description);
    }

    public function test_show_dish_kitchen_name()
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.show', compact(['institution'])));

        $response->assertOk();
        $response->assertViewIs('front.show');
        $response->assertSeeText($dishes->first()->kitchen->name);
    }

    public function test_index_has_dish_kitchen()
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.index'));

        $response->assertOk();
        $response->assertViewIs('front.index');
        $response->assertSeeText($dishes->first()->kitchen->name);
    }

    public function test_index_has_delivery()
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.index'));

        $response->assertOk();
        $response->assertViewIs('front.index');
        $response->assertSeeText($institution->delivery);
    }

    public function test_index_has_category()
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.index'));

        $response->assertOk();
        $response->assertViewIs('front.index');
        $response->assertSeeText($institution->category->name);
    }

    public function test_index_has_picture()
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.index'));

        $response->assertOk();
        $response->assertViewIs('front.index');
        $response->assertSeeText($institution->name);
    }

    public function test_index_has_route_category()
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.index'));

        $response->assertOk();
        $response->assertViewIs('front.index');
        $response->assertSee(route('category', 1));
    }

    public function test_index_has_route()
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.index'));

        $response->assertOk();
        $response->assertViewIs('front.index');
        $response->assertSee(route('category', 2));
    }

    public function test_index_has_route_category_2()
    {
        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();

        $response = $this->get(route('institutions.index'));

        $response->assertOk();
        $response->assertViewIs('front.index');
        $response->assertSee(route('category', 3));
    }

    public function test_AddDishToCart_method()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();
        $dish = $dishes->first();

        $response = $this->postJson(route('cart.addDishToCart'), [
            'dish_id' => $dish->id,
        ]);

        $response->assertJsonStructure([
            'id',
            'items' => [
                '*' => [
                    'id',
                    'dish_id',
                    'quantity',
                    'price',
                ],
            ],
            'total',
        ]);

        $cartItem = CartItem::where('dish_id', $dish->id)->first();
        $this->assertNotNull($cartItem);
        $this->assertEquals(1, $cartItem->quantity);
        $this->assertEquals($dish->price, $cartItem->price);
    }

    public function testRemoveItemFromCart()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $cart = Cart::factory()->create(['user_id' => $user->id]);

        $institutions = $this->data();
        $institution = $institutions['institutions'][0];
        $dishes = $institution->dishes();
        $dish = $dishes->first();
        $cartItem = CartItem::factory()->create([
            'cart_id' => $cart->id,
            'dish_id' => $dish->id,
            'quantity' => 2,
            'price' => $dish->price,
        ]);

        $response = $this->actingAs($user)->delete(route('cart.remove', $dish->id));
        $response->assertStatus(405);
    }
}
