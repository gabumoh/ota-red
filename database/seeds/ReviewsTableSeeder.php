<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
            Review::create([
                'guest_id' => $faker->numberBetween(1, 10),
                'channel_id' => 1,
                'property_id' => $faker->numberBetween(1, 10),
                'message_title' => 'Awesome',
                'message' => 'My experience in your hotels was awesome. Everything worked as I expected. Thanks for a wonderful service',
                'status' => 1,
                'reviewer' => 'Mr. Chinedu',
                'review_id' => substr(md5(uniqid(mt_rand(5,8))), 0,10),
                'rating' => 5,
                'created_at'=> $faker->dateTimeInInterval($startDate = 'now', $timezone = 'Africa/Lagos'),
                'updated_at'=> $faker->dateTimeInInterval($startDate = 'now', $interval = '+ 5 days', $timezone = 'Africa/Lagos'),
            ]);

            Review::create([
                'guest_id' => mt_rand(1,4),
                'channel_id' => 1,
                'property_id' => 1,
                'message_title' => 'Dissatisfaction',
                'message' => 'I was utterly disappointed with your facilities, do make sure you put things to good shape',
                'status' => 2,
                'reviewer' => 'Mr Okon',
                'review_id' => substr(md5(uniqid(mt_rand(5,8))), 0,10),
                'rating' => 2.4,
                'created_at'=> $faker->dateTimeInInterval($startDate = 'now', $timezone = 'Africa/Lagos'),
                'updated_at'=> $faker->dateTimeInInterval($startDate = 'now', $interval = '+ 5 days', $timezone = 'Africa/Lagos'),
            ]);

            Review::create([
                'guest_id' => mt_rand(1,4),
                'channel_id' => 1,
                'property_id' => 1,
                'message_title' => 'My opinion',
                'message' => 'Your hotel is really a place to be. Excellent services, state-of-the-art facilities, I can\'t testify enough, kudos!',
                'status' => 3,
                'reviewer' => 'Miss Blessing Giwa',
                'review_id' => substr(md5(uniqid(mt_rand(5,8))), 0,10),
                'rating' => 5,
                'created_at'=> $faker->dateTimeInInterval($startDate = 'now',  $timezone = 'Africa/Lagos'),
                'updated_at'=> $faker->dateTimeInInterval($startDate = 'now', $interval = '+ 5 days', $timezone = 'Africa/Lagos'),
            ]);

            Review::create([
                'guest_id' => mt_rand(1,4),
                'channel_id' => 1,
                'property_id' => 1,
                'message_title' => 'Wonderful place to be',
                'message' => 'Wow, your hotels is indeed a london in Africa, modern facilities, smart attendants just to mention but a few',
                'status' => 1,
                'reviewer' => 'Chuks Benson',
                'review_id' => substr(md5(uniqid(mt_rand(5,8))), 0,10),
                'rating' => 4.9,
                'created_at'=> $faker->dateTimeInInterval($startDate = 'now', $timezone = 'Africa/Lagos'),
                'updated_at'=> $faker->dateTimeInInterval($startDate = 'now', $interval = '+ 5 days', $timezone = 'Africa/Lagos'),
            ]);
    }
}
