<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookingLogicTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

  /**
   * Tests for Database return active bookings
   */
    public function testActiveBookings()
    {
      $this->assertDatabaseHas('bookings', [
        'name' => 'Ricardo'
      ]);
    }
}
