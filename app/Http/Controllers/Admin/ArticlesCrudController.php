<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ArticlesRequest;
use App\Models\Article;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * Class CategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ArticlesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Article::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/articles');
        CRUD::setEntityNameStrings('articles', 'articles');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('tittle');
        CRUD::column('contents');
        CRUD::column('slug');
        CRUD::column('date');
        CRUD::column('view');

        CRUD::addColumn([
            'name' => 'image', // The db column name
            'label' => "Image", // Table column heading
            'type' => 'image',
//            'disk' => 'storage',
        ]);

        CRUD::column('author');
//        CRUD::addColumn([
//            'name' => 'id_category', // The db column name
//            'label' => "Category", // Table column heading
//            'type' => 'select',
//            'entity' => 'category',
//            'model' => "App\Models\Category",
//            'attribute' => 'name'
//        ]);

        $this->crud->addColumn([
            // Select
            'label'     => 'Category',
            'type'      => 'select',
            'name'      => 'id_category', // the db column for the foreign key
            'entity'    => 'category', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'wrapper'   => [
                // 'element' => 'a', // the element will default to "a" so you can skip it here
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('category/'.$related_key.'/show');
                },
                // 'target' => '_blank',
                // 'class' => 'some-class',
            ],
        ]);

        CRUD::column('created_at');
        CRUD::column('updated_at');


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    protected function setupShowOperation()
    {
//        $this->setupListOperation();

//        $data = CRUD::column('contents');
        CRUD::column('tittle');
        CRUD::addColumn([
            'name'     => 'contents',
            'label'    => 'Contents',
            'type'     => 'custom_html',
            'value'    => function($entry) {
                return $entry->contents;
            },

            // OPTIONALS
            // 'escaped' => true // echo using {{ }} instead of {!! !!}
        ]);

        CRUD::column('slug');
        CRUD::column('date');
        CRUD::column('view');

        CRUD::addColumn([
            'name' => 'image', // The db column name
            'label' => "Image", // Table column heading
            'type' => 'image',
//            'disk' => 'storage',
        ]);
        CRUD::column('author');

        $this->crud->addColumn([
            // Select
            'label'     => 'Category',
            'type'      => 'select',
            'name'      => 'id_category', // the db column for the foreign key
            'entity'    => 'category', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'wrapper'   => [
                // 'element' => 'a', // the element will default to "a" so you can skip it here
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('category/'.$related_key.'/show');
                },
            ],
        ]);

        CRUD::column('created_at');
        CRUD::column('updated_at');

    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ArticlesRequest::class);

        CRUD::field('tittle');
        CRUD::addField([
            'name' => 'contents',
            'type' => 'summernote',
            'label' => "Content",
            'options' => [
                'height' => 300,
            ],

        ]);

        CRUD::field('date')->type('date')->default(Carbon::now()->isoFormat('YYYY-MM-DD'));

        CRUD::addField([   // Upload
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'upload',
            'upload'    => true,
//            'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
            // optional:
            'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
        ]);

        CRUD::field('author');
        CRUD::addField([  // Select
            'label'     => "Category",
            'type'      => 'select',
            'name'      => 'id_category', // the db column for the foreign key

            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'category',

            // optional - manually specify the related model and attribute
            'model'     => "App\Models\Category", // related model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'data_source' => url("admin/category"),

            // optional - force the related options to be a custom query, instead of all();
            'options'   => (function ($query) {
                return $query->orderBy('name', 'ASC')->get();
            }), //  you can use this to filter the results show in the select
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function store(ArticlesRequest $request)
    {
        $description = $request->contents;

        $summernote = new Article();

        $summernote->setImageAttribute($summernote->image);

        $description = $this->domDoc($description);

        $summernote->tittle = $request->tittle;
        $summernote->slug = Str::slug($request->tittle);
        $summernote->contents = $description;
        $summernote->date = $request->date;
        $summernote->author = $request->author;
        $summernote->id_category = $request->id_category;

        $summernote->save();
        return redirect('admin/articles');
    }

    public function update(ArticlesRequest $request, $id)
    {
        $description = $request->contents;

        $article = Article::findOrFail($id);

        $article->setImageAttribute($article->image);

        $description = $this->domDoc($description);

        $article->update([
            'tittle' => $request->tittle,
            'slug' => Str::slug($request->tittle),
            'contents' => $description,
            'date' => $request->date,
            'author' => $request->author,
            'id_category' => $request->id_category,
        ]);

        return redirect('admin/articles');
    }

    public function domDoc($description){
        if ($description) {
            $dom = new \DomDocument();

            @$dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');

            foreach ($images as $k => $img) {
                dd($img);
                $data = $img->getAttribute('src');

                $pos = strpos($data, ';');
                if ($pos == true) {

                    list($type, $data) = explode(';', $data);

                    list(, $data) = explode(',', $data);

                    $data = base64_decode($data);

                    $time = Carbon::now()->isoFormat('YYYY-MM-DD');
                    $time = explode('-', $time);
                    $yy_mm_dd = $time[0] . "/" . $time[1] . "/" . $time[2];

                    $image_name = "/storage/posts/" . $yy_mm_dd . "/" . time() . $k . '.png';

                    $path = public_path() . $image_name;

                    file_put_contents($path, $data);

                    $img->removeAttribute('src');

                    $img->setAttribute('src', $image_name);
                }
            }

            $result = $dom->saveHTML();
            return $result;
        }
    }
}
