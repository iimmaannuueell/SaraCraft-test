<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PatientTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function patient_page_contains_livewire_component()
    {
        $this->get('/home')->assertSeeLivewire('show-patient');
    }
}
