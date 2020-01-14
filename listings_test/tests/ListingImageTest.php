<?php
/**
 * Created by PhpStorm.
 * User: alena
 * Date: 2019-02-01
 * Time: 14:17
 */
//require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingImageTest extends TestCase
{
    public function testNoImage()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'image' => '',
        ];
        $listing = new ListingBasic($data);
        // $this->assertFalse($listing->getImage());
        $this->assertEmpty($data['image']);

    }
    public function testFullPathImage()
    {
        define('BASE_URL', '/');
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'image' => 'https://www.cascadiaphp.com/images/logo.svg',
        ];
        $listing = new ListingBasic($data);
        $this->assertIsString($data['image']);
        $this->assertEquals($data['image'], $listing->getImage());

    }
    public function testBuildPathImage()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'image' => 'images/listings/1.png',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals(BASE_URL.'/'.$data['image'], $listing->getImage());
    }
}
