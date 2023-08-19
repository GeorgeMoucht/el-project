<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GalleryModel;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GalleryModel::create([
            'image_name' => '1.png',
            'title' => 'Souvenir de Constantinople',
            'text' => '(Μουσικό ταξίδι ψυχής στη Βασιλεύουσα για πιάνο και βιολί)',
        ]);
        GalleryModel::create([
            'image_name' => '2.png',
            'title' => 'L’ esperence',
            'text' => 'Το βαλς της ελπίδας και της φαντασίας (ένα μουσικό καλειδοσκόπιο αισιοδοξίας, σε σύνθεση Β. Βεηλικτσίδη)',

        ]);
        GalleryModel::create([
            'image_name' => '3.jpg',
            'title' => 'Η Σινώπη (βαλς για μπάντα)',
            'text' => '(Σύνθεση Β. Βεηλικτσίδη, αφιερωμένη σε μια εμβληματική για τον Ελληνισμό πόλη)'
        ]);
        GalleryModel::create([
            'image_name' => '4.jpg',
            'title' => 'Τα κάλαντα με μπάντα',
            'text' => '(Τραγούδια του Αγερμού, ενοποιητικά του Ελληνισμού, όπου γης...)'
        ]);
        GalleryModel::create([
            'image_name' => '5.png',
            'title' => 'Παρασημαντική της ψαλτικής τέχνης',
            'text' => '(μουσική γραφή)'
        ]);
        GalleryModel::create([
            'image_name' => '6.png',
            'title' => 'Φαντασία',
            'text' => '(Συναισθηματική μουσική απόδοση μελωδίας του Β. Βεηλικτσίδη, καταγεγραμμένη σε νότες)'
        ]);
        GalleryModel::create([
            'image_name' => '7.png',
            'title' => 'Επερείσεις',
            'text' => '(Τετράδιο γραφής και εφαρμογής των επερείσειον)'
        ]);
        GalleryModel::create([
                'image_name' => '8.png',
                'title' => 'Les adieux valse op148 Oscar Fetras (1907)',
                'text' => '(Το βαλς του αποχαιρετισμού σε χειρόγραφη μορφή από τον Β. Βεηλικτσίδη)'
        ]);
        GalleryModel::create([
            'image_name' => '9.png',
            'title' => 'Οι στάλες της βροχής',
            'text' => '(Μουσική σύνθεση για πιάνο ξαι χορωδία της Ελπίδας Βεηλικτσίδη)'
        ]);
        GalleryModel::create([
            'image_name' => '10.png',
            'title' => 'Αώος',
            'text' => '(Εμβατήριο αφιερωμένο στη διαδρομή μιας απαράμιλλης ομορφιάς ροής του ποταμού Αώου)'
        ]);
    }
}
