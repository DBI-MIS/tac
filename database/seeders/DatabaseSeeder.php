<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'password' => Hash::make('password'),
            'email' => 'admin@example.com',
        ]);

        Page::factory()->create([
            'title' => 'One Asian Vision',
            'section' => 'hero',
            'img' => null,
            'desc1' => 'United & Driven by Excellence',
            'desc2' => 'United & Driven by Excellence',
        ]);

        Page::factory()->create([
            'title' => 'Authorized Dealer',
            'section' => 'dealership',
            'img' => null,
            'desc1' => 'We are dedicated to offering top-notch service and genuine products that meet your needs.',
            'desc2' => 'Top-Notch Service & Genuine Products',
        ]);

        Page::factory()->create([
            'title' => 'Trusted by Famous Global Brands',
            'section' => 'global_brand',
            'img' => null,
            'desc1' => 'Our commitment to excellence, innovation, and quality has earned us the confidence of industry leaders worldwide.',
            'desc2' => 'Our commitment to excellence, innovation, and quality has earned us the confidence of industry leaders worldwide.',
        ]);

        Page::factory()->create([
            'title' => 'Certifications and Accreditations',
            'section' => 'certification',
            'img' => null,
            'desc1' => 'At Team Asia Corporation, our commitment to excellence and quality is demonstrated through our numerous certifications and accreditations. These certifications ensure that our products and processes meet the highest industry standards, providing our customers with the confidence they need in choosing our offerings.',
            'desc2' => 'At Team Asia Corporation, our commitment to excellence and quality is demonstrated through our numerous certifications and accreditations. These certifications ensure that our products and processes meet the highest industry standards, providing our customers with the confidence they need in choosing our offerings.',
        ]);

        Page::factory()->create([
            'title' => 'Team Asia Corporation',
            'section' => 'about_page_title',
            'img' => null,
            'desc1' => 'Established in 1975 and headquartered in Manila, Philippines, Team Asia Corporation provides organic and all-natural products, while also specializing in R&D, design, production, sales, installation, and maintenance of central air conditioning, composite materials, and solar energy products. The company integrates environmental and thermal energy utilization services, with production departments in Luzon, Cebu, Davao, and other locations.',
            'desc2' => 'With over 3,000 hectares of coconut palms certified by USDA and OFDC, major products include organic virgin coconut oil, organic refined coconut oil, organic coconut powder, and coconut skin care products. As a leader in the coconut industry, Team Asia Corporation is committed to uplifting coconut farmers from poverty and holds a strong leadership position as a manufacturer and supplier of health and lifestyle products in Asia..

The Coconut Industry is a sunshine industry. It is today one of the most promising industries which can help our coconut farmers rise from poverty. Team Asia Corporation holds a strong leadership position as a manufacturer and supplier of health and lifestyle products in Asia.',
        ]);

        Page::factory()->create([
            'title' => 'Vision',
            'section' => 'about_page_vision',
            'img' => null,
            'desc1' => 'To become the leader in providing wellness, all natural, and specialty food health products in the Philippines and in Asia by satisfying the principles of excellence, integrity, sustainability, consistency, and strong partnership of all stakeholders and business partners.',
            'desc2' => 'To become the leader in providing wellness, all natural, and specialty food health products in the Philippines and in Asia by satisfying the principles of excellence, integrity, sustainability, consistency, and strong partnership of all stakeholders and business partners.',
        ]);

        Page::factory()->create([
            'title' => 'Mission',
            'section' => 'about_page_mission',
            'img' => null,
            'desc1' => 'To surpass the expectations of all our stakeholders; which includes business partners, associates and customers. Our goal is to share the real wonders of nature through our health products. We are committed to provide the best natural ingredients to improve the health and lifestyle of every person, both locally and globally.',
            'desc2' => 'To surpass the expectations of all our stakeholders; which includes business partners, associates and customers. Our goal is to share the real wonders of nature through our health products. We are committed to provide the best natural ingredients to improve the health and lifestyle of every person, both locally and globally.',
        ]);

        Page::factory()->create([
            'title' => 'Main Office',
            'section' => 'about_page_office',
            'img' => null,
            'desc1' => '<p>
            430 Lt. Artiaga Street San Juan, Metro Manila, Philippines 1500
            </p>
            <p>
            Tel: (+632) 8723-4461 to 64
            </p>
            <p>
            Fax: (+632) 8723-2782, (+632) 8723-4461
            </p>',
            'desc2' => 'Email: jrg@dbiphils.com',
        ]);

        Page::factory()->create([
            'title' => 'Business Office Showroom',
            'section' => 'about_page_showroom',
            'img' => null,
            'desc1' => '<p>
            17 A. Juan Street, Brgy. Salapan, San Juan City, Metro Manila, Philippines 1500
                </p>
            <p>
                
            Tel No: (02) 8723-8863
                </p>',
            'desc2' => ' ',
        ]);

        Page::factory()->create([
            'title' => 'Singapore Office',
            'section' => 'about_page_singapore',
            'img' => null,
            'desc1' => '
            <p>
            3 Ubi Ave 3, Crocodile House, #07-05,Singapore 408857
            </p>
            <p>
            Tel. No.: +65 66864688
                </p>
            <p>
            Fax No.: +65 68965778
                    </p>
            <p>
            Website: www.gga-technologies.com
                </p>
            <p>
            Email: sales@gga.com.sg
                    </p>
            ',
            'desc2' => ' ',
        ]);

        Page::factory()->create([
            'title' => 'Shanghai Office',
            'section' => 'about_page_shanghai',
            'img' => null,
            'desc1' => '
            <p>4F Building 6 No. 619, Longchang Road, Yangpu District, Shanghai, China 200090
                    </p>
            <p>
            Tel No.: +86 (21) 55662100/55660519
                    </p>
            <p>
            Fax No.: +86 (21) 35350282
                    </p>
            <p>
            Website: www.panchenmaoyi.cn
                    </p>
            ',
            'desc2' => ' ',
        ]);

        // Project::factory()->count(50)->create();
    }
}
