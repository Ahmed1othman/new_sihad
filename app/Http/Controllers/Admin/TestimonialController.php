<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\TestimonialsRepo;
use App\Http\Requests\Admin\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File as FacadesFile;

class TestimonialController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repo;

    public function __construct(TestimonialsRepo $repo)
    {

        $this->repo = $repo;
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $data = $this->repo->getAll();
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('data', 'testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(TestimonialRequest $request)
    {
        try {
            $data['name'] = $request->name;
            $data['feedback'] = $request->feedback;
            if ($request->active) {
                $data['active'] = 1;
            } else {
                $data['active'] = 0;
            }
            $file = request()->file('photo');

            if ($file) {
                $data['photo'] = $this->repo->storeFile($file, 'testimonials');
            }

            $this->repo->create($data);
            session()->flash('Add', 'تم اضافه رأي العميل بنجاح ');
            return redirect('Testimonials');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }

    /**
     * update the Permission for dashboard.
     *
     * @param Request $request
     * @return Builder|Model|object
     */

    public function deleted()
    {
        $Testimonials = Testimonial::onlyTrashed()->get();
        return view('admin.testimonials.deleted', compact('Testimonials'));
    }

    public function edit($slider)
    {
        try {
            $data = $this->repo->findOrFail($slider);
            return view('admin.testimonials.edit', compact('data'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }


    /**
     * update a permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(TestimonialRequest $request, $id)
    {

        $item = $this->repo->findOrFail($request->id);
        try {
            $data['name'] = $request->name;
            $data['feedback'] = $request->feedback;
            if ($request->active) {
                $data['active'] = 1;
            } else {
                $data['active'] = 0;
            }

            $file = request()->file('photo');

            if ($file) {
                FacadesFile::delete('public/Testimonial/' . $item->photo);
                $data['photo'] = $this->repo->storeFile($file, 'testimonials');
            }

            $this->repo->update($data, $item);

            session()->flash('Edit', 'تم تعديل رأي العميل بنجاح ');
            return redirect('Testimonials');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }


    /**
     * Delete more than one permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy($testimonial)
    {
        $testimonials = $this->repo->bulkDelete([$testimonial]);
        if (!$testimonials) {
            return __('app.testimonials.cannotdelete');
        }
        return 1;
    }

    public function restor($testimonial)
    {
        $testimonials = $this->repo->bulkRestore([$testimonial]);
        if (!$testimonials) {
            return __('app.testimonials.cannotdelete');
        }
        return 1;
    }
}
