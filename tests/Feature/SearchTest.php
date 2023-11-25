<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class SearchTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function vinyl_search_page_is_accessible()
    {
        $this->get('/')->assertOk();
    }

    /** @test */
    public function vinyl_search_page_has_all_the_required_page_data()
    {
      Product::factory()->count(3)->create();


      $response=$this->get('/');

      $items=Product::get();
      $response->assertViewIs('search')->assertViewHas('items',$items);

    }
    /** @test */
    public function vinyl_search_page_shows_the_items(){
        Product::factory()->count(3)->create();

        $items=Product::get();

        $this->get('/')
            ->assertSeeInOrder([
                $items[0]->name,
                $items[1]->name,
                $items[2]->name,
            ]);
    }

    /** @test */
    public function vinyl_can_be_searched_given_a_query(){

        Product::factory()->create([
            'name'=>'Metallica'
        ]);
        Product::factory()->create([
           'name'=>'Guns N roses'
        ]);
        Product::factory()->create([
           'name'=>'Pink floyd'
        ]);

        $this->get('/?query=metallica')
            ->assertSee('Metallica')
            ->assertDontSeeText('Guns N roses')
            ->assertDontSeeText('Pink floyd');

        $this->get('/')->assertSeeInOrder([
            'Metallica',
            'Guns N roses',
            'Pink floyd'
        ]);
    }
}
