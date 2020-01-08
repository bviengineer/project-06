<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase 
{ // Write tests for the ListingBasic class to ensure that 
        // all three Exception messages are returned as expected.
    
    /** @test */
    function listingCannotBeCreatedDataIsUnavailable() {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
       
        new ListingBasic();
        //$listingBasic->setValues('Unable to create a listing, data unavailable');
    }
}