<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id'=>1,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Thanh Xuân, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Chung cư Hòa Bình',
                'address'=>'Minh Khai, Hai Bà Trưng, Hà Nội',
                'price'=>100000000,
                'information'=>'Cao tầng ngắm cảnh',
                'detail'=>'Rộng 60m2',
                'images'=>'https://www.chotot.com/kinhnghiem/wp-content/uploads/2016/07/mot-so-cach-trang-tri-nha-chung-cu-hien-dai-va-tien-loi.png'
            ],
            [
                'id'=>3,
                'name'=>'Chung cư RoyalCity R8',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>60000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 40m2',
                'images'=>'http://www.muabannhadat.vn/tin-tuc/wp-content/uploads/2016/12/uu-diem-cua-can-ho-chung-cu.jpg'
            ],
            [
                'id'=>4,
                'name'=>'Chung cư TimeCity T4',
                'address'=>'Minh Khai, Hai Bà Trưng, Hà Nội',
                'price'=>99000000,
                'information'=>'Nhà rộng thênh thang',
                'detail'=>'Rộng 80m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/img20151031100016763.jpg'
            ],
            [
                'id'=>5,
                'name'=>'Chung cư RoyalCity R6',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>6,
                'name'=>'Chung cư Giải Phóng',
                'address'=>'Giải Phóng, Hà Nội',
                'price'=>40000000,
                'information'=>'Hàng xóm thân thiện',
                'detail'=>'Rộng 40m2',
                'images'=>'http://sohanews.sohacdn.com/thumb_w/660/2015/2-nhung-dai-ky-trong-phong-thuy-cho-nha-o-chung-cu-hinh-anh-2-1450845209462-63-0-267-400-crop-1450845440312.jpg'
            ],
            [
                'id'=>7,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>8,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>9,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>10,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>11,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>12,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>13,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>14,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>15,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>16,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>17,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>18,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>19,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ],
            [
                'id'=>20,
                'name'=>'Chung cư RoyalCity',
                'address'=>'Ngã tư Sở, Hai Bà Trưng, Hà Nội',
                'price'=>80000000,
                'information'=>'Nhà rất đẹp và thoáng',
                'detail'=>'Rộng 60m2',
                'images'=>'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg'
            ]
        ]);
    }
}
