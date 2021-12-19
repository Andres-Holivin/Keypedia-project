<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class create_keyboard extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keyboard')->insert([
            'name'=>'Gigabyte Aorus K9 - Optical Gaming Keyboard',
            'price'=>'2240000',
            'description'=>"
                Gigabyte Aorus K9 - Optical Gaming Keyboard<br>
                Feature<br>
                - 0.03ms Debounce Time - When Speed Matters<br>
                - Ultra Durable - 100 Million Keystrokes<br>
                - Splash proof<br>
                - Swappable Switches - Custom Gaming Experience<br>
                - Chatterproof<br>
                - Exclusive Top-quality Steel Springs<br>
                - Full RGB Backlighting<br>
                - AORUS Engine - You're In Control<br>
                - N-Key Rollover<br>
                - Floating Key Design<br>
                - Braided Cable<br>
                - Cable Management",
            'image'=>'storage/keyboard2.png',
            'category_id'=>'1',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Fantech MK872 TKL RGB Optilite Gaming Keyboard - Blue Switch',
            'price'=>'529000',
            'description'=>"
                Fantech MK872 - Gaming Keyboard<br>
                - TKL<br>
                - Blue/Black Optical Switch<br>
                - Waterproof<br>
                - Non Floating Keycaps<br>
                - All Keys Anti-ghost<br>
                - High Speed USB gaming grade cable",
            'image'=>'storage/keyboard3.png',
            'category_id'=>'1',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Razer BlackWidow V3 Pro Wireless Mechanical Gaming Keyboard Chroma RGB - Kuning',
            'price'=>'3799000',
            'description'=>"
                    TECH SPECS<br>
                    SWITCH TYPE : Razer™ Green Mechanical Switch<br>
                    KEY FEEL : Tactile and Clicky<br>
                    SIZES : Full Size<br>
                    LIGHTING : Razer Chroma™ backlighting with 16.8 million customizable color options<br>
                    WRIST REST : Yes<br>
                    ONBOARD MEMORY : Hybrid onboard storage – up to 5 profiles<br>
                    MEDIA KEYS : Dedicated Media Controls<br>
                    CONNECTIVITY :<br>
                    - Wired<br>
                    - 2.4 Ghz Wireless<br>
                    - Bluetooth<br>
                    KEYCAPS : Doubleshot ABS",
            'image'=>'storage/keyboard9.png',
            'category_id'=>'1',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Rexus MX9 TKL Keyboard Gaming Mechanical Legionare MX9 TKL RGB - Hitam, Blue Switch',
            'price'=>'375000',
            'description'=>"
                Spesifikasi:<br>
                Tipe: Keyboard Mekanikal (Dengan switch Biru dan Merah)<br>
                Jumlah tombol: 87 tombol<br>
                Daya tahan tombol: 50 juta klik<br>
                Material: Plastik ABS<br>
                Gaya tekanan tombol: 60 ± 10G<br>
                Polling rate: 1000 Hz<br>
                Arus: 100 – 260 mA<br>
                Memori: 64 kb<br>
                Tegangan: 5.0 ± 0.25 V<br>
                Panjang kabel: 1,8 Meter<br>
                Dimensi: 361 x 22.5 x 133.5 mm<br>
                Berat: 950 ± 30 Gram<br>
                Kompatibilitas: Windows 7 / 8 / 8.1 / 10",
            'image'=>'storage/keyboard7.png',
            'category_id'=>'2',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Fantech MK857 Maxfit61 60% Gaming Mechanical Keyboard - Putih, Red switch',
            'price'=>'439000',
            'description'=>"
                Spesifikasi lengkap<br>
                <br>
                - 60% KEYBOARD LAYOUT (61 Tombol)<br>
                - HOT-SWAPPABLE (Support up to 5 pin Switches)<br>
                - Outemu Switch Bawaan (Blue Switch, Red Switch)<br>
                - Pre-Lube Stabilizer (SHIFT, ENTER, SPACE-BAR, BACKSPACE)<br>
                - Include Damper Foam (EVA FOAM)<br>
                - MAGIC FN<br>
                - Detachable Type-C<br>
                - Onboard Memory<br>
                - ALL ANTIGHOSTING<br>
                - RGB Per-Key<br>
                - Berat 566gr<br>
                - Software MK857",
            'image'=>'storage/keyboard4.png',
            'category_id'=>'3',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Redragon Mechanical Gaming Keyboard 60% PINK WHITE RAINBOW FIZZ-K617-R',
            'price'=>'357000',
            'description'=>"
                OUTEMU BLUE SWITCH<br>
                <br>
                PINK - WHITE RAINBOW FIZZ<br>
                Compact / portable design<br>
                Durable switch with 50 million click life<br>
                Removeable keycap and mechanical switch<br>
                N-Key rollover<br>
                Rainbow backlighting",
            'image'=>'storage/keyboard5.png',
            'category_id'=>'3',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Fantech Maxfit61 MK857 60% - Mechanical Gaming Keyboard - Hitam, Blue Switch',
            'price'=>'450000',
            'description'=>"
                Features :<br>
                - Hotswap 5 lobang available (bisa di gonta-ganti)<br>
                - Stabz sudah di lube (feel typing semakin smooth)<br>
                - MAXFIT61 is a 60% form factor wired mechanical keyboard, designed around the needs of mobility and a clean desktop look, without cutting corners on features.<br>
                - Featuring full flexibility for gamers and office workers, alike. In a mechanical keyboard, the feel of the keys is the most important thing. MAXFIT is designed with universal hotswappable Outemu switches, and fully allows users to replace he switches from any brand, to meet their needs.<br>
                - YOUR Keyboard, YOUR Way – Easily replace any switch and create custom layout with a custom feeling.<br>
                - Small Size, Full Power – 61 keys doesn’t mean cutting corners. MAXFIT has all the power and capability of a full-sized keyboard but makes more room for mouse movement and smaller setups.<br>
                - Smooth, Slick Movement – Pre-lubed stabilizers for your enjoyment. We’ve heard the demands of gamers for smooth ENTER/BACKSPACE/SHIFT keys, and we’ve got you covered.",
                'image'=>'storage/keyboard6.png',
            'category_id'=>'3',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Redragon K617R Mechanical Gaming Keyboard 60% GREY WHITE RAINBOW FIZZ',
            'price'=>'370000',
            'description'=>"
                OUTEMU BLUE SWITCH<br>
                <br>
                GREY WHITE RAINBOW FIZZ<br>
                Compact / portable design<br>
                Durable switch with 50 million click life<br>
                Removeable keycap and mechanical switch<br>
                N-Key rollover<br>
                Rainbow backlighting",
                'image'=>'storage/keyboard8.png',
            'category_id'=>'3',
        ]);


        DB::table('keyboard')->insert([
            'name'=>'Keyboard Gaming Kabel Mechanical Divipard GK-50 RGB LED Untuk Komputer - Putih',
            'price'=>'180000',
            'description'=>"
                Detail produk :<br>
                - Model keyboard gaming Divipard GK-50<br>
                - Dilengkapi dengan lampu led RGB<br>
                - Tombol mengambang yang nyaman digunakan<br>
                - Dilengkapi dengan tombol multimedia<br>
                - Support window & mac<br>
                - Cocok untuk penggunaan dirumah, sekolah, kantor atau warnet<br>
                - Plug and play<br>
                - Koneksi menggunakan port usb<br>
                - Kompatibel dengan sebagian besar sistem operasi saat ini<br>
                - Packaging mewah<br>
                - Please Follow toko kami agar dapat update produk-produk terbaru<br>
                - Mohon pengisian alamat diharapkan selengkap2nya di sertakan nomor telepon yang bisa dihubungi agar mempermudah kurir dalam pengantaran paket<br>
                - Thanks enjoy your shopping",
            'image'=>'storage/pngfind.com-broken-keyboard-png-6929039.png',
            'category_id'=>'1',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Keyboard Gaming Mechanical AULA S-2022 BLACK -New LED- Macro Software',
            'price'=>'239000',
            'description'=>"
            AULA S2022 is a high-value and powerful faction, four colors are available (pink, blue, green, black)<br>
            The keycap adopts two-color injection molding process, which is durable and not easy to fade. Multi-color optional<br>
            Ultra-thin keyboard, sensitive keystrokes, trigger stroke 2.0MM<br>
            Using mechanical axis switch design, 60 million keystrokes life, durable, excellent hand feeling<br>
            Support 26-key conflict-free function<br>
            With intelligent sleep mode: the host enters the sleep or standby state, the backlight function is turned off, and the host resumes the previous mode after it is started.<br>
            Keycap and gap backlight, uniform color, optional single color or mixed light<br>
            The keyboard has a humanized design, and a series of commonly used shortcut function keys are added in conjunction with Fn.<br>
            <br>
            Gaming keyboard<br>
            -Two-color injection molded keyboard<br>
            -Number of keys: 104/105/106<br>
            -Keystroke:<br>
            -Blue switch: 60±10gf Red switch: 60±15gf<br>
            -Black switch: 80±15gf Brown switch: 60±10gf<br>
            -Total key stroke: 4.0mm<br>
            -Multimedia function with FN key<br>
            -60 million keystrokes life<br>
            -Size: 435(L)×125(W)×38(H)<br>
            -Wire length: 1.6M<br>
            -Operating system: WIN XP/WIN7/WIN8/WIN10",
            'image'=>'storage/pngfind.com-carnival-png-2280493.png',
            'category_id'=>'1',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Rexus Keyboard Gaming Mechanical Legionare MX9 Pudding / MX9P TKL RGB - Hitam, Blue Switch',
            'price'=>'539000',
            'description'=>"
            Keycap Tipe Pudding dengan Materal Berkualitas<br>
            Keyboard Legionare MX9 Pudding Version menggunaka keycap yang dinding keycap-nya tembus pandang sehingga cahaya LED di dalamnya dapat terlihat keluar. Keycap tersebut terbuat dari material ABS berkualitas, dengan huruf yang dicetak dengan teknologi Double-shot Injection.<br>
            <br>
            Switch Outemu Berdaya Tahan 50 Juta Klik<br>
            Keyboard Legionare MX9 Pudding Version menggunakan tipe switch Outemu yang dapat dilepas mandiri secara mudah, Terdapat dua pilihan switch, yaitu Blue (clicky, tactile) dan Red (linear, silent)<br>
            <br>
            Didukung Software untuk Fungsi Macro<br>
            Keyboard Rexus Legionare MX9 Pudding Version didukung perangkat lunak (software) untuk memudahkan Anda mengatur fungsi tombol keyboard. Pengaturan fitur dengan perangkat lunak tersebut dapat tersimpan dalam keyboard.<br>
            <br>
            Desain Kompak dan Fungsional<br>
            Desain simpel, moderen, dan penuh gaya menjadi signature Keyboard Legionare MX9 Pudding Version. Membuat penggunanya merasakan kendali penuh terhadap game yang sedang dimainkan.<br>
            <br>
            87 Full Functional Keys<br>
            Sebagai gaming keyboard TKL, Rexus Gaming Keyboard Legionare MX9 Pudding Version mempunyai 87 tombol yang fungsional sekaligus menjadikan keyboard ini memiliki dimensi yang lebih ramping dibanding keyboard full keys. Dengan ukuran yang tidak terlalu besar, Anda dapat memposisikan keyboard secara lebih bebas, tidak membutuhkan ruang yang terlalu luas.<br>
            <br>
            Spesifikasi:<br>
            Tipe: Keyboard Mekanikal<br>
            Jumlah tombol: 87 tombol<br>
            Daya tahan tombol: 50 juta klik<br>
            Material: Plastik ABS<br>
            Polling rate: 1000 Hz<br>
            Arus: 100 – 260 mA<br>
            Tegangan: 5.0 ± 0.25 V<br>
            Panjang kabel: 1,8 Meter<br>
            Dimensi: 361 x 22.5 x 133.5 mm<br>
            Berat: 950 ± 30 Gram<br>
            Kompatibilitas: Windows 7 / 8 / 8.1 / 10",
            'image'=>'storage/pngfind.com-claymore-png-4380232.png',
            'category_id'=>'2',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Keyboard Gaming/Gaming Keyboard HP GK200 - RGB Mechanical Keyboard TKL - Hitam',
            'price'=>'299000',
            'description'=>"
            Features :<br>
            - TKL Gaming Keyboard (Non-Numpad)<br>
            - Elegant and minimalist style.<br>
            - Blue Switch.<br>
            - Key cap and aperture with backlight, multi-color, colorful and uniform.<br>
            - Body Uper Metal.<br>
            - Key Life 60 Million.<br>
            - Rainbow.<br>
            - Anti Ghosting.<br>
            - Responsive keys with comfortable hand feel and lifes up to 60 milion time.<br>
            - Humanization design : Work with Fn increase a series of commonly used shortcut function keys.<br>
            - Return to default by press FN +ESC combo keys 3s.<br>
            - Intelligence auto sleep mode:Keyboard goes into sleep mode to turn off all LED after 10 minutes of<br>
            idle. Press any key to wake up. Mainframe goes into sleep mode or standby mode, keyboard backlight<br>
            turn off, once restart the computer, keyboard backlight restore to previous setting. Three sets of lights custom mode, users can custom backlit area and color according to his favorite.<br>",
            'image'=>'storage/pngfind.com-gaming-keyboard-png-6410654.png',
            'category_id'=>'1',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Keyboard Gaming Mechanical AULA F-2067 TKL - K-RGD Blue Switch-New LED',
            'price'=>'239000',
            'description'=>"
            F2067 mechanical keyboard, simple layout, saving 20% desktop space, keyboard and wire separation, more convenient to carry.<br>
            ABS material keycaps, curved keycap surface, more suitable for the curvature of the fingertips, wear-resistant, reliable and easy to <br>clean
            Character glow at night, support 20 kinds of lighting effects<br>
            Using mechanical shaft, typing is crisp and powerful, and you can fully feel the mechanical percussion, and it will be more exciting <br>in the game
            Full-key non-punch design, bid farewell to the trouble of key conflict and jam<br>
            Use Type-C interface, easy to carry<br>
            Thick metal panel, hand feeling and texture coexist, surface matte treatment, stable and durable<br>
            F2067 mechanical keyboard, simple layout, saving 20% desktop space, keyboard and wire separation, more convenient to carry.<br>
            ABS material keycaps, curved keycap surface, more suitable for the curvature of the fingertips, wear-resistant, reliable and easy to <br>clean
            Character glow at night, support 20 kinds of lighting effects<br>
            Using mechanical shaft, typing is crisp and powerful, and you can fully feel the mechanical percussion, and it will be more exciting <br>in the game
            Full-key non-punch design, bid farewell to the trouble of key conflict and jam<br>
            Use Type-C interface, easy to carry<br>
            Thick metal panel, hand feeling and texture coexist, surface matte treatment, stable and durable",
            'image'=>'storage/pngfind.com-gaming-keyboard-png-6410834.png',
            'category_id'=>'3',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Fantech MAXPOWER MK853 Mechanical Keyboard Gaming - Hitam, red switch',
            'price'=>'384000',
            'description'=>"
            -SHORTCUT VOLUME KNOB<br>
            Atur Volume, play dan pause dalam satu tombol<br>
            <br>
            -ERGONOMIC WRIST REST<br>
            Bermain lebih lama dengan sandaran tangan yang ergonomis dan bisa di lepas pasang dengan mudah<br>
            <br>
            -ALL KEYS ANTI GHOSTING
            Tidak perlu khawatir lagi tidak bisa menekan banyak tombol bersamaan karena MK853 ini sudah dilengkapi ANTI-GHOSTING di seluruh tombol tanpa terkecuali !<br>",
            'image'=>'storage/pngfind.com-gaming-keyboard-png-6410847.png',
            'category_id'=>'1',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Fantech MAXPOWER MK853 RGB - MK 853 MK-853 Mechanical Gaming Keyboard - Hitam, Blue Switch',
            'price'=>'359000',
            'description'=>"
            Technical Specification :<br>
                Product Name MK853<br>
                Number of keys 104 Keys<br>
                Switch Type Mechanical<br>
                Anti-Ghosting All Keys<br>
                Size 436(L) x 220(W) x 42(H)mm<br>
                Weight 1300gr",
            'image'=>'storage/pngfind.com-gaming-keyboard-png-6410853.png',
            'category_id'=>'1',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Fantech MAXPOWER MK853 RGB - MK 853 MK-853 Mechanical Gaming Keyboard - Hitam, Blue Switch',
            'price'=>'359000',
            'description'=>"
            Technical Specification :<br>
                Product Name MK853<br>
                Number of keys 104 Keys<br>
                Switch Type Mechanical<br>
                Anti-Ghosting All Keys<br>
                Size 436(L) x 220(W) x 42(H)mm<br>
                Weight 1300gr",
            'image'=>'storage/pngfind.com-gaming-keyboard-png-6411437.png',
            'category_id'=>'1',
        ]);
        DB::table('keyboard')->insert([
            'name'=>'Fantech MAXPOWER MK853 RGB - MK 853 MK-853 Mechanical Gaming Keyboard - Hitam, Blue Switch',
            'price'=>'359000',
            'description'=>"
            Technical Specification :<br>
                Product Name MK853<br>
                Number of keys 104 Keys<br>
                Switch Type Mechanical<br>
                Anti-Ghosting All Keys<br>
                Size 436(L) x 220(W) x 42(H)mm<br>
                Weight 1300gr",
            'image'=>'storage/pngfind.com-gaming-keyboard-png-6411536.png',
            'category_id'=>'1',
        ]);

    }
}
