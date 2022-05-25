<?php

namespace Tests\Unit; 
use App\CustomUser;
use Symfony\Component\VarDumper\Cloner\Data;
use Tests\TestCase;
 

class CustomUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
   
 
    //Check that it store Dublicate data or not
    public function test_user_duplication()
    {
        $user1 = CustomUser::make([
            'first_name' => 'John',
            'last_name' => 'Doe'
        ]);

        $user2 = CustomUser::make([
            'first_name' => 'Abc',
            'last_mail' => 'xyz',
        ]);

        $this->assertTrue($user1->first_name != $user2->first_name);
    }


    //post() request : Check that it stor data or not
      public function test_DB_stores_new_users()
      {
          $response = $this->post('/custom_users_save', [
              'first_name' => 'Abc',
              'last_mail' => 'xyz', 
          ]);

          $response->assertRedirect($response == 'done'); 
      } 
 
}
