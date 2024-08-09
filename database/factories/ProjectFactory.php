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
            'Uzbekistan - Akfa Medline Clinic, Uzbekistan',
            'Villa, Karachi, Pakistan',
            'Maldives Seaplane Airport',
            'Puertos Offices Argentina',
            'Argentina - Pilará Residence',
            'Cambodia - Integrating Hotel, Cambodia',
            'Thailand- Huanji Gene Technology',
            'Russia - Biocad Biopharmaceutical Factory, Russia',
            'Nipro - Indonesia',
            'Uzbekistan - ZAMIN BIO HEALTH, Uzbekistan',
            'Uzbekistan - Merrymed Farm Factory, Uzbekistan',
            'Europe - Pharmaceutical plant',
            'Ukraine - Citi Doctor, Ukraine',
            'Indonesia-Netherland Embassy',
            'Indonesia - National Police Headquarters',
            'Maldives Seaplane Airpor',
            'Argentina - Mendoza Government House Argentina',
            'Libya - Tripoli International Airport',
            'Vietnam - Museum Cao Bang',
            'Europe - Opera and Ballet Theatre, 1864, 1959-1961',
            'Tashkent - Tashkent Berinuy Ice Rink',
            'Indonesia - Cibinong City Mall',
            'Argentina - TUCSON Restaurant',
            'Uzbekistan - Anor Plaza Shopping Center, Uzbekistan',
            'Argentina - DAC Center',
            'Indonesia - Cinema Platinum',
            'Indonesia - Plaza Sukaramai',
            'Philippines - SM City Shopping Mall, Philippines',
            'Indonesia - Conrad Resort Bali',
            'Basra - Basra Mall Kourah',
            'Sohar - Citcy Center Sohar',
            'Electronic Factory/ Industrial cooling 10',
            'Vietnam - Imperial Star Solar Energy',
            'Vietnam- Foxconn CTTV',
            'Vietnam  - Qisda',
            'Vietnam - Neweb',
            'Vietnam - Amphenol',
            'Cambodia - Imperial Star ,Solar Energy',
            'Cambodia - BARDON Energy',
            'Viet Nam - Gemtek Ha Nam',
            'Viet Nam - Olam',
            'Romania - Strada Fagului Plant',
                                    

        ];
        $brands = [
            'GRAD Projects',
            'TICA Projects'
        ];

        $brand = $this->faker->randomElement($brands);

        $gradCategories = [
            'Domestic Engineering',
            'Foreign Engineering',
        ];

        $ticaCategories = [
            'Hospital',
            'Pharmaceutical Factory',
            'Governments & Private',
            'Hotel & Shopping Center',
            'Electronic Factory',
        ];

        if ($brand === 'GRAD Projects') {
            $category = $this->faker->randomElement($gradCategories);
        } else {
            $category = $this->faker->randomElement($ticaCategories);
        }

        $title = $this->faker->sentence;
        
        return [
            'title' => $title,
            'description' => $this->faker->paragraph,
            'project_img' => $this->faker->imageUrl(640, 480, 'project', true),
            'brand' => $brand,
            'category' => $category,
            'featured' => $this->faker->boolean,
            'status' => $this->faker->boolean,
            'slug' => Str::slug($title),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
