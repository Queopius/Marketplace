<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class AuthenticationTest extends TestCase
{
//     /** @test */
//     function required_fields_for_registration()
//     {
//         $this->json('POST', 'api/User/', ['Accept' => 'application/json'])
//             ->assertStatus(422)
//             ->assertJson([
//                 "message" => "The given data was invalid.",
//                 "errors" => [
//                     "name" => ["The name field is required."],
//                     "email" => ["The email field is required."],
//                     "password" => ["The password field is required."],
//                 ]
//             ]);
//     }

//     /** @test */
//     function repeat_rassword()
//     {
//         $userData = [
//             "name" => "John Doe",
//             "email" => "doe@example.com",
//             "password" => "demo12345"
//         ];

//         $this->json('POST', 'api/register', $userData, ['Accept' => 'application/json'])
//             ->assertStatus(422)
//             ->assertJson([
//                 "message" => "The given data was invalid.",
//                 "errors" => [
//                     "password" => ["The password confirmation does not match."]
//                 ]
//             ]);
//     }

//     /** @test */
//     function successful_registration()
//     {
//         $userData = [
//             "name" => "John Doe",
//             "email" => "doe@example.com",
//             "password" => "demo12345",
//             "password_confirmation" => "demo12345"
//         ];

//         $this->json('POST', 'api/register', $userData, ['Accept' => 'application/json'])
//             ->assertStatus(201)
//             ->assertJsonStructure([
//                 "user" => [
//                     'id',
//                     'name',
//                     'email',
//                     'created_at',
//                     'updated_at',
//                 ],
//                 "access_token",
//                 "message"
//             ]);
//     }
}