<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        $this->call(RoleSeeder::class);   
        $this->call(UserSeeder::class);    
        $this->call(PositionSeeder::class); 
        $this->call(ProfessionSeeder::class); 
        $this->call(PersonTypeSeeder::class); 
        $this->call(EventSeeder::class); 
        $this->call(FamilyRoleSeeder::class); 
        $this->call(FamilySeeder::class); 
        $this->call(GenderSeeder::class); 
        $this->call(MaritalStatusSeeder::class); 
        $this->call(PersonSeeder::class);    
       
        $this->call(GroupSettingSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(PostMetaSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PostTagSeeder::class);
        $this->call(PostCategorySeeder::class);

        $this->call(SubmissionSeeder::class);
        $this->call(SubmissionDataSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(SlideSeeder::class);
        $this->call(CampaignSeeder::class);
        $this->call(DonationSeeder::class);
        $this->call(SocialMediaSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(ClassroomSeeder::class);
        $this->call(StudentSeeder::class);
        //$this->call(AttendanceSeeder::class);
        //$this->call(ClassroomStudentSeeder::class);
        $this->call(ManufacturerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FaqSeeder::class);
    }
}
