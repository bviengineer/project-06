<?php
// Write tests for the ListingBasic class to ensure that all three Exception messages are returned as expected.

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase 
{ 
    /** @test */
    function listingCannotBeCreatedDataIsUnavailable() 
    {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
       
        $data = [
            'id' => 1,
            'title' => "Caribbean"
        ];
        
        $newListing = new ListingBasic($data); // associative array with the id and value, title and value, and pass it into 
        //$newListing->setValues($data);
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

    /** @test */
    function listingIsAnObjectInstance()
    {
        $listing = new ListingBasic();
        //$listing->setValues($data['id'], $data['title']);
        // $listing->setId($data['id']);
        // $listing->setTitle($data['title']);

        $this->assertInstanceOf('ListingBasic', $listing->setValues($data['id'], $data['title']));
    }

    /** @test */
    function getStatusMethodReturnsBasic()
    {
        $returnStatus = new ListingBasic();
        $status = $returnStatus->setStatus('basic');

        $this->assertEquals('basic', $returnStatus->getStatus());

        //$myStatus = 'basic';
        // $this->assertThat(
        //     $myStatus,
        //     $this->equalTo($status)
        // );
        // $this->expectOutputString('basic');
        // print $status; 
    }
}