<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryModel;

class pdfCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CategoryModel::create([
            'categoryName' => 'Μπάντα (Μουσικά θέματα για μπάντα)',
        ]);

        CategoryModel::create([
            'categoryName' => 'Πιάνο (Μουσικές δημιουργίες για πιάνο)',
        ]);

        CategoryModel::create([
            'categoryName' => 'Μέθοδοι μουσικών οργάνων - Σχετιζόμενα άσματα',
        ]);

        CategoryModel::create([
            'categoryName' => 'Χορωδιακές συνθέσεις - Συναυλιακά θέματα'
        ]);

        CategoryModel::create([
            'categoryName' => 'Μουσικά Μελοδράματα (Όπερες, Οπερέτες)',
        ]);

        CategoryModel::create([
            'categoryName' => 'Μουσικές συνθέσεις Βασίλειου Βεηλικτσίδη & Ελπίδα Βεηλικτσίδη',
        ]);

        CategoryModel::create([
            'categoryName' => 'Μουσικές συνθέσεις Β. Θεοφάνους και Σερραίων συνθετών Ξενοφώντα Σγουρού & Αργύρη Τσιτίνη',
        ]);

        CategoryModel::create([
            'categoryName' => 'Θρησκευτικά τελετουργικά',
        ]);

        CategoryModel::create([
            'categoryName' => 'Δημόσια Κεντρική Βιβλιοθήκη Σερρών (Τμήμα Μουσικού αρχείου Β. Βεηλεκτσίδη',
        ]);
    }
}
