<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\StockMove;
use App\Models\Company;
use App\Models\Product;
use App\Models\WorkOrder;
use App\Models\Recipe;
use App\Models\Unit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // categories
        $ajax = $this->cCategory('Ajax Soap');
        $yariMamul = $this->cCategory('Semi products');
        $raw_materials = $this->cCategory("Raw materials");

        // products
        $ajax_blu = $this->cProduct($ajax->id, 'kg', 'Blue Ajax', 'ajax_blu', '8697521976558', true);
        $ajax_wt = $this->cProduct($ajax->id, 'kg', 'White Ajax', 'ajax_wt', '8699155674821', true);
     
    
        // Semi products
        $wine_1 = $this->cProduct($yariMamul->id, 'Litre', 'Wine', 'wine_1', null, true);
        $dough_1 = $this->cProduct($yariMamul->id, 'Kilogram', 'Dough', 'dough_1', null, true);
        
        // içerik  **********************
        $ca_1 = $this->cProduct($raw_materials->id, 'Kilogram', 'Carbon', 'ca'); 
        $hi_1 = $this->cProduct($raw_materials->id, 'Kilogram', 'Hidrogn', 'hi');
        $ox_1 = $this->cProduct($raw_materials->id, 'Litre', 'Oxygen', 'ox');


        

        // extra units ***************************************************** 
        // $this->cUnit($ajax_blu->id, 'kutu', 'kt', 1, false, $ajax_blu->baseUnit->id);

        $wine_1_lt = $this->cUnit($wine_1->id, 'Litre', 'l', 1000, false, $wine_1->baseUnit->id);
        $dough_1_grm = $this->cUnit($dough_1->id, 'Kilogram', 'kg', 1000, false, $dough_1->baseUnit->id);
        $ca_1_grm = $this->cUnit($ca_1->id, 'Kilogram', 'kg', 1000, false, $ca_1->baseUnit->id);
        $hi_1_grm = $this->cUnit($hi_1->id, 'Kilogram', 'kg', 1000, false, $hi_1->baseUnit->id);
        $ox_1_grm = $this->cUnit($ox_1->id, 'Litre', 'l', 1000, false, $ox_1->baseUnit->id);



        // recipes ***********************************************************
         $this->cRecipe($ajax_blu->id, 'rct_ajax_blu', [
            $wine_1->id => ['amount' => '43', 'unit_id' => $wine_1_lt->id, 'literal' => true],
            $dough_1->id => ['amount' => '87', 'unit_id' => $dough_1_grm->id, 'literal' => true],
            $ca_1->id => ['amount' => '98', 'unit_id' => $ca_1_grm->id, 'literal' => true],
            $hi_1->id => ['amount' => '21', 'unit_id' => $hi_1_grm->id, 'literal' => true],
            $ox_1->id => ['amount' => '23', 'unit_id' => $ox_1_grm->id, 'literal' => true],
           ]);
        
        $this->cRecipe($ajax_wt->id, 'rct_ajax_wt', [
            $wine_1->id => ['amount' => '800', 'unit_id' => $wine_1_lt->id, 'literal' => true],
            $dough_1->id => ['amount' => '200', 'unit_id' => $dough_1_grm->id, 'literal' => true],
            $ca_1->id => ['amount' => '320', 'unit_id' => $ca_1_grm->id, 'literal' => true],
            $hi_1->id => ['amount' => '200', 'unit_id' => $hi_1_grm->id, 'literal' => true],
            $ox_1->id => ['amount' => '23', 'unit_id' => $ox_1_grm->id, 'literal' => true],
           ]);
        
      
        
        WorkOrder::factory()->count(10)->create();
        StockMove::factory()->count(5)->create();
        StockMove::factory()->count(5)->create();
        StockMove::factory()->count(5)->create();
        StockMove::factory()->count(5)->create();


        // müşteri ve adres
        $company1 = Company::create([
            'cmp_name' => 'Loza Cofee',
            'cmp_commercial_title' => 'Loza Cofee PLC.',
            'cmp_current_code' => '123456',
            'cmp_supplier' => false,
            'cmp_customer' => true,
            'cmp_note' => 'Dear b2b customer',
            'cmp_phone' => '0123456789',
            'cmp_tax_number' => '111121111',
        ]);
        $address1 = $company1->addresses()->create([
            'adr_name' => 'Halis Gıda Ana Bayii',
            'adr_country' => 'Türkiye',
            'adr_province' => 'İstanbul',
            'adr_district' => 'Beykoz',
            'adr_body' => 'Çukurca Mah. Keskin Cad 23A/2',
            'adr_phone' => '02468101214',
            'adr_note' => 'Keskin caddesi üzeri büyük Cami karşısı',
        ]);
        
      
        $company2 = Company::create([
            'cmp_name' => 'Büyük Değirmen Un Fabrikası',
            'cmp_commercial_title' => 'BUYUK DEĞİRMEN URETİM VE TİCARET AŞ.',
            'cmp_current_code' => '12345678',
            'cmp_supplier' => true,
            'cmp_customer' => false,
            'cmp_note' => 'Bir diğer değerli b2b müşterimiz',
            'cmp_phone' => '0123456789',
            'cmp_tax_number' => '11141111',
        ]);
        $company2->addresses()->create([
            'adr_name' => 'Büyük Değirmen Kadıköy',
            'adr_country' => 'Türkiye',
            'adr_province' => 'İstanbul',
            'adr_district' => 'Kadıköy',
            'adr_body' => 'Kurşunlu Mah. 2. Bulvar 12. Cd. 45',
            'adr_phone' => '0135791133345',
        ]);
        
        $company3 = Company::create([
            'cmp_name' => 'Yeşilyol Unlu Mamuller',
            'cmp_commercial_title' => 'YEŞİLYOL UNLU MAMULLER AŞ.',
            'cmp_current_code' => '1234565',
            'cmp_supplier' => true,
            'cmp_customer' => true,
            'cmp_note' => 'Bir diğer değerli b2b müşterimiz',
            'cmp_phone' => '0123456789',
            'cmp_tax_number' => '111511111',
        ]);
         $company3->addresses()->create([
            'adr_name' => 'Yeşilyol Unlu Mamuller Ataşehir Şube',
            'adr_country' => 'Türkiye',
            'adr_province' => 'İstanbul',
            'adr_district' => 'Ataşehir',
            'adr_body' => 'Kestane Mah. Yağmur Cad. Yıldırım Sk. 53S/7',
            'adr_phone' => '013579112343',
        ]);
         $company3->addresses()->create([
            'adr_name' => 'Yeşilyol Unlu Mamuller Fatih Şube',
            'adr_country' => 'Türkiye',
            'adr_province' => 'İstanbul',
            'adr_district' => 'Fatih',
            'adr_body' => 'Güllü Mah. Yağmur Cad. 66/1',
            'adr_phone' => '013579112344',
        ]);
        
    }






















    private function cProduct($categoryId, $unitName, $prd_name, $prd_code, $prd_barcode = null, $prd_producible = false)
    {
        $product = Product::create([
            'category_id' => $categoryId,
            'prd_code' => $prd_code, 
            'prd_barcode' => $prd_barcode, 
            'prd_name' => $prd_name, 
            'prd_shelf_life' => 2,
            'prd_producible' => $prd_producible, 
            'prd_min_threshold' => 50,
        ]);
        $product->units()->create([
            'name' => $unitName, 
            'abbreviation' => Str::lower($unitName), 
            'operator' => true,
            'factor' => 1,
            // 'parent_id' => null,
            'is_base' => true,
        ]);
        return $product;
    }

    private function cRecipe($productId, $rcp_code, array $ingredients = [])
    {
        $recipe = Recipe::create([
            'product_id' => $productId,
            'rcp_code' => $rcp_code,
        ]);
        $recipe->ingredients()->sync($ingredients);
    }

    private function cCategory($name)
    {
        return Category::create(['ctg_name' => $name]);
    }   

    private function cUnit($productId, $name, $abbreviation, $factor, $operator, $parentId = null)
    {
        return Unit::create([
            'product_id' => $productId, 
            'name' => $name, 
            'abbreviation' => $abbreviation, 
            'factor' => $factor,
            'operator' => $operator, 
            'parent_id' => $parentId,
        ]);
    }

}
