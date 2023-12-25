<?php

namespace Tests\Feature;

use App\Models\User;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
//    public function test_example(): void
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }
//    public function test_Heders(): void
//    {
//        $response = $this->
//        withHeaders([
//            'ExampleHeader'=>'Example'
//        ])->
//        json('POST','/users',['data'=>'HELLOWorld']);
//
//        $response->assertStatus(200);
//        $response->assertStatus(200)->assertJson([
//            'status'=>'success'
//        ])->assertHeader('ResponseHeader','Responce');
//    }
//    public function testSession(): void
//    {
//        $user=factory(User::class)->create();
//        $response = $this->actingAs($user)->
//        withSession([
//            'user'=>'Ben'
//        ])
//        ->get('/users');
//        $response->assertStatus(200);
//    }
//public function testFile(){
//    Storage::fake('files');
//    $file = UploadedFile::fake()->image('picture.jpg');
//
//    $response= $this->json('POST','users',[
//        'picture'=>$file
//    ]);
//    $response->assertStatus(200);
//    Storage::disk('public')->assertExist($file->hashName());
//}
public function testDB(){
//    $this->assertDatabaseHas('users',[
//        'email'=>'hardy.block@example.org'
//    ]);
}
}
