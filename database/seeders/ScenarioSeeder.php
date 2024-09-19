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
use Illuminate\Support\Facades\DB;

class ScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
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

            // Content
            $ca_1 = $this->cProduct($raw_materials->id, 'Kilogram', 'Carbon', 'ca');
            $hi_1 = $this->cProduct($raw_materials->id, 'Kilogram', 'Hydrogen', 'hi');
            $ox_1 = $this->cProduct($raw_materials->id, 'Litre', 'Oxygen', 'ox');

            // Create units with null checks
            $this->createUnit($wine_1, 'Litre', 'l', 1000);
            $this->createUnit($dough_1, 'Kilogram', 'kg', 1000);
            $this->createUnit($ca_1, 'Kilogram', 'kg', 1000);
            $this->createUnit($hi_1, 'Kilogram', 'kg', 1000);
            $this->createUnit($ox_1, 'Litre', 'l', 1000);

            // recipes
            $this->cRecipe($ajax_blu->id, 'rct_ajax_blu', [
                $wine_1->id => ['amount' => '43', 'unit_id' => $wine_1->units()->first()->id ?? null, 'literal' => true],
                $dough_1->id => ['amount' => '87', 'unit_id' => $dough_1->units()->first()->id ?? null, 'literal' => true],
                $ca_1->id => ['amount' => '98', 'unit_id' => $ca_1->units()->first()->id ?? null, 'literal' => true],
                $hi_1->id => ['amount' => '21', 'unit_id' => $hi_1->units()->first()->id ?? null, 'literal' => true],
                $ox_1->id => ['amount' => '23', 'unit_id' => $ox_1->units()->first()->id ?? null, 'literal' => true],
            ]);

            $this->cRecipe($ajax_wt->id, 'rct_ajax_wt', [
                $wine_1->id => ['amount' => '800', 'unit_id' => $wine_1->units()->first()->id ?? null, 'literal' => true],
                $dough_1->id => ['amount' => '200', 'unit_id' => $dough_1->units()->first()->id ?? null, 'literal' => true],
                $ca_1->id => ['amount' => '320', 'unit_id' => $ca_1->units()->first()->id ?? null, 'literal' => true],
                $hi_1->id => ['amount' => '200', 'unit_id' => $hi_1->units()->first()->id ?? null, 'literal' => true],
                $ox_1->id => ['amount' => '23', 'unit_id' => $ox_1->units()->first()->id ?? null, 'literal' => true],
            ]);

            WorkOrder::factory()->count(10)->create();
            StockMove::factory()->count(5)->create();

            // Companies and addresses
            $this->createCompanyWithAddress('2 Brothers', 'Dear b2b customer', '0123456789', 'Halis Gıda Ana Bayii', 'Türkiye', 'İstanbul', 'Beykoz', 'Çukurca Mah. Keskin Cad 23A/2', '02468101214', 'Keskin caddesi üzeri büyük Cami karşısı');
            $this->createCompanyWithAddress('Büyük Değirmen Un Fabrikası', 'Bir diğer değerli b2b müşterimiz', '0123456789', 'Büyük Değirmen Kadıköy', 'Türkiye', 'İstanbul', 'Kadıköy', 'Kurşunlu Mah. 2. Bulvar 12. Cd. 45', '0135791133345');
            $this->createCompanyWithAddress('Yeşilyol Unlu Mamuller', 'Bir diğer değerli b2b müşterimiz', '0123456789', 'Yeşilyol Unlu Mamuller Ataşehir Şube', 'Türkiye', 'İstanbul', 'Ataşehir', 'Kestane Mah. Yağmur Cad. Yıldırım Sk. 53S/7', '013579112343');
            $this->createCompanyWithAddress('Yeşilyol Unlu Mamuller', 'Bir diğer değerli b2b müşterimiz', '0123456789', 'Yeşilyol Unlu Mamuller Fatih Şube', 'Türkiye', 'İstanbul', 'Fatih', 'Güllü Mah. Yağmur Cad. 66/1', '013579112344');
        });
    }

    private function createUnit($product, $name, $abbreviation, $factor)
    {
        if ($product->baseUnit) {
            return $this->cUnit($product->id, $name, $abbreviation, $factor, false, $product->baseUnit->id);
        }
        return $this->cUnit($product->id, $name, $abbreviation, $factor, false);
    }

    private function createCompanyWithAddress($name, $note, $phone, $addressName, $country, $province, $district, $body, $adrPhone)
    {
        $company = Company::create([
            'cmp_name' => $name,
            'cmp_supplier' => false,
            'cmp_customer' => true,
            'cmp_note' => $note,
            'cmp_phone' => $phone,
        ]);

        $company->addresses()->create([
            'adr_name' => $addressName,
            'adr_country' => $country,
            'adr_province' => $province,
            'adr_district' => $district,
            'adr_body' => $body,
            'adr_phone' => $adrPhone,
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
