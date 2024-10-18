<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $titles = [
            'Akfa Medline Clinic',
            'Villa, Karachi, Pakistan',
            'Maldives Seaplane Airport',
            'Puertos Offices Argentina',
            'Pilará Residence',
            'Integrating Hotel',
            'Huanji Gene Technology',
            'Biocad Biopharmaceutical Factory',
            'ZAMIN BIO HEALTH',
            'Merrymed Farm Factory',
            'Pharmaceutical plant',
            'Citi Doctor',
            'Netherland Embassy',
            'National Police Headquarters',
            'Maldives Seaplane Airpor',
            'Mendoza Government House Argentina',
            'Tripoli International Airport',
            'Museum Cao Bang',
            'Tashkent Berinuy Ice Rink',
            'Cibinong City Mall',
            'TUCSON Restaurant',
            'Anor Plaza Shopping Center',
            'DAC Center',
            'Cinema Platinum',
            'Plaza Sukaramai',
            'SM City Shopping Mall',
            'Conrad Resort Bali',
            'Basra Mall Kourah',
            'Citcy Center Sohar',
            'Imperial Star',
            'Foxconn CTTV',
            'Qisda',
            'Neweb',
            'Amphenol',
            'Imperial Star',
            'BARDON Energy',
            'Gemtek Ha Nam',
            'Olam',
            'Strada Fagului Plant',
                                    

        ];

        $brand = 'TICA Projects';

        $ticaCategories = [
             'Semicon',
             'Chemicals',
             'F&B',
             'Garment Sector',
             'Hospital',
             'Hotel',
             'University',
             'Research Center',
             'Office',
             'Plastic Factory',
             'Solar',
             'Medical',
             'Microelectronics',
             'Commercial Building',
             'Church',
             'Cinema',
             'Factory',
             'Pharmaceutical Factory',
             'Museum',
             'Restaurant',
             'Airport',
             'Governments & Private',
             'Hotel & Shopping Center',
             'Electronic Factory',
        ];

     
        $category = $this->faker->randomElement($ticaCategories);
    
        // do {
        //     $title = $this->faker->randomElement($titles);
        // } while (Project::where('title', $title)->exists());

        do {
            $title = $this->faker->unique->randomElement($titles);
            
            $slug = Str::slug($title);
            
            $originalSlug = $slug;
            $counter = 1;
            
            while (Project::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $counter++;
            }
        
        } while (Project::where('title', $title)->exists());

        return [
            'title' => $title,
            'description' => $this->faker->paragraph,
            'project_img' => $this->faker->imageUrl(640, 480, 'project', true),
            'brand' => $brand,
            'category' => $category,
            'featured' => true,
            'status' => true,
            'slug' =>  $slug,
            'country' => 'TEST Country',
            'product_type' => 'TEST PRODUCT TYPE x 100',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
