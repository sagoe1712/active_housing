<?php

class thirdPartyAPITest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function connectionTest()
    {
        $connect = new \activeHousing\callClass();
        $response = $connect->single();
        $this->assertNotEmpty($response);
    }
}
