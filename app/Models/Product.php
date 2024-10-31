<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'code',
        'price',
        'previous_price',
        'product_information',
        'product_description',
        'template_id',
        'featured_image',
        'first_image',
        'second_image',
        'third_image',
        'quantity',
        'status',
        'section_title',
        'countdowndate',
        'header_title',
        'video_url',
        'video',
        'faq_section_title',
        'faq_questions',
        'faq_answers',
        'review_images'

    ];

    public function product_attribute_options()
    {
        return $this->hasMany(ProductAttributeOption::class);
    }

    public function order_attributes()
    {
        return $this->hasMany(OrderAttribute::class);
    }

    
}
