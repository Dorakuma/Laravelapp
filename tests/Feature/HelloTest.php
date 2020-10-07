<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\User;
use App\Person;

class HelloTest extends TestCase
{
  use DatabaseMigrations;

  public function testHello()
  {
    factory(User::class)->create([
      'name' => 'AAA',
      'email' => 'BBB@CCC.COM',
      'password' => 'ABCABC',
    ]);
    factory(User::class, 10)->create();

    $this->assertDatabaseHas('users', [
      'name' => 'AAA',
      'email' => 'BBB@CCC.COM',
      'password' => 'ABCABC',
    ]);
    
    factory(Person::class, 10)->create();

    $this->assertDatabaseHas('people', [
      'name' => 'XXX',
      'mail' => 'YYY@ZZZ.COM',
      'age' => 123,
    ]);
  }
}
