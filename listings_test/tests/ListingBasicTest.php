<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase 
{ // Write tests for the ListingBasic class to ensure that 
        // all three Exception messages are returned as expected.
    
    /** @test */
    function listingBasicMustReceiveData() {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
       
        $listingBasic = new ListingBasic();
        //$listingBasic->setValues('Unable to create a listing, data unavailable');
    }
}