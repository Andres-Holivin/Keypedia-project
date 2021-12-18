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

    }
}
