<?php
 
use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase 
{
      /** @test */
      function getStatusMethodReturnsPremium()
      {
          // The Data
          $data = [
              'id' => 1,
              'title' => 'Verify the status for this premium class'
          ];
  
          // Instance of ListingPremium
          $returnStatus = new ListingPremium($data);
  
          // Assertion
          $this->assertEquals('premium', $returnStatus->getStatus());
     }

     /** @test */
     function getDescriptionMethodReturnsExcpectedResults()
     {
        // The Data
        $data = [
            'id' => 2,
            'title' => 'Return the description',
            'description' => 'The ListingPremium class extends the ListingBasic class'
        ];

        // Instance of ListingPremium  class
        $getDescription = new ListingPremium($data);
        
        // Assertion
        $this->assertNotNull($data['description']);
        $this->assertThat(
            $data['description'],
            $this->equalTo($getDescription->getDescription()),
        );
     }
}