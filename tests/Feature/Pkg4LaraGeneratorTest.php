<?php

namespace Tests\Feature;

use Tests\TestCase;
use NayWin\Pkg4Lara\Pkg4LaraGenerator;

class Pkg4LaraGeneratorTest extends TestCase
{
	public function test_can_generate_codename()
	{
		$result = Pkg4LaraGenerator::show_my_codename('Nay Win');
		$this->assertEquals('4e61792057696e', $result);
	}

	public function test_can_redirect_for_invalid_user()
	{
		$response = $this->get('/codename/naywin');
		$response->assertStatus(302);
	}

	public function test_can_generate_codename_for_valid_user()
	{
		$name = 'David';
		$response = $this->get("/codename/$name");
		$response->assertStatus(200);
	}
}