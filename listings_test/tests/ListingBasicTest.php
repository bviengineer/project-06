<?php 

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase 
{ // Write tests for the ListingBasic class to ensure that 
        // all three Exception messages are returned as expected.
    
    /** @test */
    function listingMustReceiveData() {
        $this->expectException(InvalidArgumentException::class);
       
        $listingBasic = new ListingBasic();
        $listingBasic->setValues('1', 'test', 'www.test.com', 'tes@test.com', '@test', 'active', 'img/test.png');
    }
}