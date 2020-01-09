<?php
// Write tests for the ListingBasic class to ensure that all three Exception messages are returned as expected.

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase 
{ 
    /** @test */
    function listingCannotBeCreatedDataIsUnavailable() 
    {
        // Exception
        $this->expectException(Exception::class);
       
        // Data 
        $data = [
            'id' => null,
            'title' => null
        ];
        
        // Code to be tested 
        $newListing = new ListingBasic($data);
    }
    
    /** @test */
    function invalidIdCannotCreateListing() 
    {
        // Exception
        $this->expectException(Exception::class);

        // Data
        $data = [
            'id' => null,
            'title' => 'Caribbean'
        ];

        // Code being tested 
        $newListingId = new ListingBasic($data);
    }

    /** @test */
    function invalidTitleCannotCreateListing()
    {
        // Exception
        $this->expectException(Exception::class);

        // Data
        $data = [
            'id' => 1,
            'title' => null
        ];

        // Code being tested 
        $newListingTitle = new ListingBasic($data);
    }

    /** @test */
    // function listingIsAnObjectInstance()
    // {
    //     $listing = new ListingBasic();
        //$listing->setValues($data['id'], $data['title']);
        // $listing->setId($data['id']);
        // $listing->setTitle($data['title']);

    //     $this->assertInstanceOf('ListingBasic', $listing->setValues($data['id'], $data['title']));
    // }

    /** @test */
    // function getStatusMethodReturnsBasic()
    // {
    //     $returnStatus = new ListingBasic();
    //     $status = $returnStatus->setStatus('basic');

    //     $this->assertEquals('basic', $returnStatus->getStatus());

        //$myStatus = 'basic';
        // $this->assertThat(
        //     $myStatus,
        //     $this->equalTo($status)
        // );
        // $this->expectOutputString('basic');
        // print $status; 
   // }
}