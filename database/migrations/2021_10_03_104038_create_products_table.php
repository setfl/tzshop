<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('type_id')->nullable();
            $table->text('sku')->nullable();
            $table->text('opera_sku')->nullable();
            $table->text('old_sku')->nullable();
            $table->text('override_opera')->nullable();
            $table->string('name');
            $table->text('inlet')->nullable();
            $table->text('outlet')->nullable();
            $table->text('hose_type')->nullable();
            $table->text('angle_in_deg')->nullable();
            $table->text('max_lpm')->nullable();
            $table->text('voltage')->nullable();
            $table->text('material')->nullable();
            $table->text('bar')->nullable();
            $table->text('o-ring_thickness')->nullable();
            $table->text('diameter')->nullable();
            $table->text('colour')->nullable();
            $table->text('rpm')->nullable();
            $table->text('status')->nullable();
            $table->text('url_key')->nullable();
            $table->text('visibility')->nullable();
            $table->text('clearance')->nullable();
            $table->text('max_temperature')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->text('tech_spec_1')->nullable();
            $table->text('tech_spec_2')->nullable();
            $table->text('tech_spec_3')->nullable();
            $table->text('product_videos')->nullable();
            $table->text('nozzle_value')->nullable();
            $table->text('nozzle_size')->nullable();
            $table->text('foam_value')->nullable();
            $table->text('is_featured')->nullable();
            $table->text('featured_position')->nullable();
            $table->text('hose_clamp_size')->nullable();
            $table->text('orifice_size')->nullable();
            $table->text('shoe_size')->nullable();
            $table->text('thread')->nullable();
            $table->text('size_and_angle')->nullable();
            $table->text('inlet_outlet')->nullable();
            $table->text('clothing_size')->nullable();
            $table->text('wheel_style')->nullable();
            $table->text('flow_and_pressure')->nullable();
            $table->text('country_of_manufacture')->nullable();
            $table->text('select_nozzle_size')->nullable();
            $table->text('dn_internal_diameter')->nullable();
            $table->text('currency')->nullable();
            $table->text('pack_size')->nullable();
            $table->text('easyturn')->nullable();
            $table->text('priority')->nullable();
            $table->text('manufacturer_number_1')->nullable();
            $table->text('manufacturer_number_2')->nullable();
            $table->text('manufacturer_number_3')->nullable();
            $table->text('manufacturer_number_4')->nullable();
            $table->text('manufacturer_number_5')->nullable();
            $table->text('manufacturer_number_6')->nullable();
            $table->text('manufacturer_number_7')->nullable();
            $table->text('manufacturer_number_8')->nullable();
            $table->text('manufacturer_number_9')->nullable();
            $table->text('manufacturer_number_10')->nullable();
            $table->text('hose_application')->nullable();
            $table->text('hose_inlet')->nullable();
            $table->text('hose_outlet')->nullable();
            $table->text('hose_length')->nullable();
            $table->text('hose_colour')->nullable();
            $table->text('price')->nullable();
            $table->text('special_price')->nullable();
            $table->text('poa')->nullable();
            $table->text('poa_price')->nullable();
            $table->text('msrp')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('pdf_title_1')->nullable();
            $table->text('pdf_title_2')->nullable();
            $table->text('pdf_title_3')->nullable();
            $table->text('pdf_title_4')->nullable();
            $table->text('categories')->nullable()->index();
            $table->text('bullet_point_1')->nullable();
            $table->text('bullet_point_2')->nullable();
            $table->text('bullet_point_3')->nullable();
            $table->text('bullet_point_4')->nullable();
            $table->text('maintenance_videos')->nullable();
            $table->text('maintenance_video_title_1')->nullable();
            $table->text('maintenance_video_url_1')->nullable();
            $table->text('maintenance_video_title_2')->nullable();
            $table->text('maintenance_video_url_2')->nullable();
            $table->text('maintenance_video_title_3')->nullable();
            $table->text('maintenance_video_url_3')->nullable();
            $table->text('maintenance_video_title_4')->nullable();
            $table->text('maintenance_video_url_4')->nullable();
            $table->text('stock_status')->nullable();
            $table->text('related_products')->nullable();
            $table->text('configurable_product_parent_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
