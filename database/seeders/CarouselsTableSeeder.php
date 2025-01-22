<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarouselsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carousels')->delete();
        
        \DB::table('carousels')->insert(array (
            0 => 
            array (
                'id_carousel' => 1,
                'created_at' => '2023-07-04 19:34:25',
                'updated_at' => '2025-01-22 18:16:55',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1737569812/PandanViewMandeh/piagam_lx6kmv_avzx9c.avif',
                'title' => 'Kantor Wilayah Kementerian Agama Prov. Sumatera Barat',
                'active' => 'yes',
            ),
            1 => 
            array (
                'id_carousel' => 2,
                'created_at' => '2023-07-04 19:38:03',
                'updated_at' => '2025-01-22 18:17:16',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1737569833/PandanViewMandeh/image_750x_648fb061e6571_hke1ce_ivbgp7.avif',
                'title' => 'Kanwil Kemenag Tampak Belakang',
                'active' => 'yes',
            ),
            2 => 
            array (
                'id_carousel' => 3,
                'created_at' => '2023-07-04 19:41:24',
                'updated_at' => '2025-01-22 18:17:39',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1737569855/PandanViewMandeh/image_750x_64dddb4cc7b28_ubcssu_lgxpb7.avif',
                'title' => 'Kanwil Tampak Samping',
                'active' => 'yes',
            ),
            3 => 
            array (
                'id_carousel' => 4,
                'created_at' => '2023-07-04 19:41:42',
                'updated_at' => '2025-01-22 18:18:18',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1737569891/PandanViewMandeh/image_750x_629fed6566c53_jequ9z_vfnxbg.avif',
                'title' => 'Kanwil Tampak Atas',
                'active' => 'yes',
            ),
        ));
        
        
    }
}