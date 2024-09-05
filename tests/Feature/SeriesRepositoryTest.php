<?php

namespace Tests\Feature;

use App\Http\Requests\SeriesFormRequest;
use App\Repositories\SeriesRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeriesRepositoryTest extends TestCase
{
    
    public function test_when_a_series_is_created_its_seasons_and_episodes_must_also_be_created()
    {
        /**
         * A basic feature test example.
         *
         * @var SeriesRepository $repository */
         // arange prepara 
         $repository = $this->app->make(SeriesRepository::class);
         $request = new SeriesFormRequest();
         $request->nome = "Batmna";
         $request->seasonsQty = 1;
         $request->episodesPerSeason = 1;
         

         //act adição
         $repository->add($request);

         //asset verifica se deu certo
         $this->assertDatabaseHas('series', ['nome' => 'Batmna']);
         $this->assertDatabaseHas('seasons', ['number' => 1]);
         $this->assertDatabaseHas('episodes', ['number' => 1]);
    }
}
