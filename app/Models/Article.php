<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Doloan09\Comments\Commentable;


class Article extends Model
{
    use CrudTrait, Commentable;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'articles';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
//     protected $fillable = ['tittle', 'contents', 'date', 'view', 'image', 'author', 'id_category'];
    // protected $hidden = [];
    // protected $dates = [];


    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function showItem($slug){
        $list = Article::where('articles.slug', '=', $slug)->firstOrFail();

        return $list;
    }

    public function showArticles($slug){
        $list = Article::join('categories', 'articles.id_category', '=', 'categories.id')
            ->select('categories.id', 'categories.name', 'articles.*')
            ->where('categories.slug', '=', $slug)
            ->paginate(10);
        return $list;
    }

    public function showListArticles($slug){
        $list = Article::join('categories', 'articles.id_category', '=', 'categories.id')
            ->select('categories.id', 'categories.name', 'articles.*')
            ->where('categories.slug', '=', $slug)
            ->get();
        return $list;
    }

    public function randomListArticles($number){
        $list = Article::query()->inRandomOrder()->paginate($number);
        return $list;
    }

//    public function setImageAttribute($value)
//    {
//        $attribute_name = "image";
//        // you can check here if file is recieved or not using hasFile()
//        $disk = "public";
//
//        $time = Carbon::now()->isoFormat('YYYY-MM-DD');
//        $time = explode('-', $time);
//        $yy_mm_dd = $time[0] . "/" . $time[1] . "/" . $time[2];
//
//        $destination_path = "/posts/" . $yy_mm_dd;
//        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
//    }

    public static function boot()
    {
        parent::boot();
//        static::deleting(function($obj) {
//            $description = $obj->contents;
//            $dom = new \DOMDocument();
//            @$dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
//            $images = $dom->getElementsByTagName('img');
//
//            foreach($images as $k => $img){
//                $data = $img->getAttribute('src');
//                $data = explode('/storage', $data);
//                \Storage::disk('public')->delete($data[1]);
//            }
//
//            if ($obj->image) {
//                \Storage::disk('public')->delete($obj->image);
//            }
//        });
//
//        Article::saving(function (Article $news) {
////             Use custom rules
////            $rules = 'video,source,strong,b,u,i,br,p[class],span[class|style],a[href|target],h1,h2,h3,h4,h5,h6,img[src|style|width|height|data-filename],hr,code,blockquote,ul,ol,li,iframe,font[color],table,tr,td,th,thead,colgroup,col,tfoot,tbody,strike,sup,sub';
////            $news->contents = strip_tags(html_entity_decode($news->contents));
//        });
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function category()
    {
        return $this->belongsTo(Category::class,'id_category', 'id', 'id_category');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
