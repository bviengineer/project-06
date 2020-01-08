<?php
// Write tests for the ListingBasic class to ensure that all three Exception messages are returned as expected.

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase 
{ 
    /** @test */
    function listingCannotBeCreatedDataIsUnavailable() 
    {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
       
        $listing = new ListingBasic();
        $listing->setValues($data);
    }
    
    /** @test */
    function invalidIdCannotCreateListing() 
    {
        $this->expectException(Exception::class);

        $newListingId = new ListingBasic();
        $newListingId->setId($data['id']);
    }

    /** @test */
    function invalidTitleCannotCreateListing()
    {
        $this->expectException(Exception::class);

        $newListingTitle = new ListingBasic();
        $newListingTitle->setTitle($data['title']);
    }
}