<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase 
{
    /** @test */
    function getStatusMethodReturnsFeatured()
    {
        // The Data
        $data = [
            'id' => 1,
            'title' => 'Verify that the status for this is featured'
        ];

        // Instance of ListingFeatured
        $returnStatus = new ListingFeatured($data);

        // Test
        $this->assertEquals('featured', $returnStatus->getStatus());
    }

    /** @test */
    function getCocMethodReturnsExcpectedResults()
    {
       // The Data
       $data = [
            'id' => 2,
            'title' => 'Return expected results',
            'coc' => 'This is the COC'
       ];

       // Instance of ListingFeatured  class
       $getCoc = new ListingFeatured($data);
       
       // Assertion
       $this->assertThat(
           $data['coc'],
           $this->equalTo($getCoc->getCoc()),
       );
    }
}