<?php

namespace App\Http\Repositories\Eloquent;
use App\Http\Repositories\Interfaces\TestimonialsRepoInterface;
use App\Models\Testimonial;

class TestimonialsRepo extends AbstractRepo implements TestimonialsRepoInterface
{
    public function __construct()
    {
        parent::__construct(Testimonial::class);
    }

}
