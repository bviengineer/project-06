<?php
// Write tests for the ListingBasic class to ensure that all three Exception messages are returned as expected.

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase 
{ 
    /** @test */
    function listingCannotBeCreatedDataIsUnavailable() 
    {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
       
        new ListingBasic();
        //$listingBasic->setValues('Unable to create a listing, data unavailable');
    }
    
    /** @test */
    function invalidIdCannotCreateListing() 
    {
        $this->expectExceptionMessage('Unable to create a listing, invalid id');

        $newListing = new ListingBasic();
        $newListing->setId($data['id']);
    }
}