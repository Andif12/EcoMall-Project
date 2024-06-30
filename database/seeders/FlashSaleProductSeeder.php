<?php
use Illuminate\Database\Seeder;
use App\Models\FlashSaleProduct;

class FlashSaleProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data dummy untuk produk flash sale
        $products = [
                [
                    'name' => 'Jam Tangan',
                    'description' => 'Jam tangan ini terbuat dari bahan semen yang kokoh dan tahan lama, memberikan tampilan yang unik dan modern. Desainnya yang minimalis membuatnya cocok untuk digunakan dalam berbagai kesempatan, baik formal maupun santai. Dengan penggunaan bahan semen, jam tangan ini tidak hanya tampil gaya, tetapi juga mendukung upaya pelestarian lingkungan dengan mengurangi penggunaan bahan plastik.',
                    'price' => 300000,
                    'discount_price' => 149999,
                    'image' => 'mall\img\Produk\aksesoris\jam tangan semen.jpeg',
                    'category' => 'aksesoris',
                ],
                [
                    'name' => 'Anting-Anting',
                    'description' => 'Anting-anting ini dibuat dari tutup botol bekas yang didaur ulang, memberikan sentuhan vintage dan kreatif pada penampilan Anda. Setiap pasang anting dibuat dengan tangan, memastikan keunikan dan kualitasnya. Pilihan warna dan desain yang bervariasi membuat anting-anting ini menjadi aksesori yang menarik dan penuh karakter, sekaligus mendukung praktik daur ulang yang ramah lingkungan.',
                    'price' => 79000,
                    'discount_price' => 30000,
                    'image' => 'mall\img\Produk\aksesoris\anting-anting.jpeg', 
                    'category' => 'aksesoris', 
                ],
                [
                    'name' => 'Cincin',
                    'description' => 'Cincin ini dirancang dari bahan-bahan daur ulang seperti logam bekas dan material lainnya yang ramah lingkungan. Dengan desain yang elegan dan modern, cincin ini cocok untuk digunakan sehari-hari maupun acara spesial. Menggunakan cincin ini berarti Anda turut berkontribusi dalam menjaga kelestarian lingkungan dengan mengurangi limbah.',
                    'price' => 99899,
                    'discount_price' => 88000,
                    'image' => 'mall\img\Produk\aksesoris\cincin.jpeg', 
                    'category' => 'aksesoris', 
                ],
                [
                    'name' => 'Dompet',
                    'description' => 'Dompet ramah lingkungan ini dibuat dari bahan daur ulang seperti kain bekas, plastik, dan kertas yang telah diproses ulang. Desainnya yang praktis dan stylish membuatnya cocok untuk digunakan sehari-hari. Dengan kompartemen yang cukup untuk kartu, uang kertas, dan koin, dompet ini tidak hanya membantu Anda mengorganisir barang-barang kecil, tetapi juga mendukung upaya pengurangan limbah plastik.',
                    'price' => 200000,
                    'discount_price' => 100000,
                    'image' => 'mall\img\Produk\aksesoris\dompet.jpg', 
                    'category' => 'aksesoris', 
                ],
                [
                    'name' => 'Gantungan Kunci',
                    'description' => 'Gantungan kunci ini dibuat dari berbagai bahan daur ulang seperti kayu bekas, plastik daur ulang, dan bahan alami lainnya. Setiap gantungan kunci memiliki desain yang unik dan artistik, menjadikannya sebagai aksesori yang menarik dan berfungsi. Dengan menggunakan gantungan kunci ini, Anda menunjukkan dukungan Anda terhadap produk-produk ramah lingkungan dan kreativitas dalam mendaur ulang bahan-bahan bekas.',
                    'price' => 50000,
                    'discount_price' => 25000,
                    'image' => 'mall\img\Produk\aksesoris\gantungan kunci.jpeg', 
                    'category' => 'aksesoris', 
                ],
                [
                    'name' => 'Gelang',
                    'description' => 'Gelang ini dibuat dari bahan daur ulang seperti karet bekas dan plastik yang telah diolah kembali. Dengan desain yang stylish dan nyaman digunakan, gelang ini menjadi aksesori yang sempurna untuk melengkapi penampilan sehari-hari Anda. Menggunakan gelang ini berarti Anda turut berkontribusi dalam mengurangi limbah dan menjaga lingkungan.',
                    'price' => 45000,
                    'discount_price' => 22000,
                    'image' => 'mall\img\Produk\aksesoris\gelang.jpeg', 
                    'category' => 'aksesoris', 
                ],
                [
                    'name' => 'Gitar',
                    'description' => 'Gitar ini dibuat dari bahan daur ulang seperti kayu bekas dan logam daur ulang. Dengan suara yang jernih dan desain yang unik, gitar  ini cocok untuk anak-anak maupun orang dewasa yang ingin belajar bermain gitar. Menggunakan gitar ini berarti Anda mendukung upaya pelestarian lingkungan dengan mengurangi penggunaan bahan-bahan baru.',
                    'price' => 150000,
                    'discount_price' => 100000,
                    'image' => 'mall\img\Produk\aksesoris\gitar.jpeg', 
                    'category' => 'aksesoris', 
                ],
                [
                    'name' => 'Kalung',
                    'description' => 'Kalung ini dibuat dari tutup kaleng soda yang didaur ulang menjadi aksesori yang menarik dan unik. Dengan desain yang kreatif dan artistik, kalung ini memberikan sentuhan berbeda pada penampilan Anda. Menggunakan kalung ini berarti Anda turut serta dalam mendukung praktik daur ulang dan mengurangi limbah.',
                    'price' => 60000,
                    'discount_price' => 30000,
                    'image' => 'mall\img\Produk\aksesoris\kalung.jpeg', 
                    'category' => 'aksesoris', 
                ],
                [
                    'name' => 'Topi',
                    'description' => 'Topi ini terbuat dari kertas daur ulang yang telah diproses ulang menjadi bahan yang kuat dan tahan lama. Desainnya yang stylish dan ramah lingkungan menjadikan topi ini pilihan yang tepat untuk Anda yang peduli pada lingkungan. Dengan menggunakan topi ini, Anda turut berkontribusi dalam mengurangi limbah dan menjaga kelestarian alam.',
                    'price' => 75000,
                    'discount_price' => 40000,
                    'image' => 'mall\img\Produk\aksesoris\topi.jpeg', 
                    'category' => 'aksesoris', 
                ],
            ];
            

        // Simpan data dummy ke dalam database
        foreach ($products as $product) {
            FlashSaleProduct::create($product);
        }
    }
}