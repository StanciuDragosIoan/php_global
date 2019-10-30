<?php


class Post 
{

    public $title;

    public $author;

    public $published;


    public function __construct($title, $author, $published){
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

 
$posts = [
    new Post('My first post', 'JW', true),

    new Post('My second post','JW', true),

    new Post('My third post', 'KW', true),

    new Post('My fourth post', 'TW', false)
];


// var_dump($posts);



//ARRAY_FILTER(array, callback); ->filters some elements from array 
//we pass the array as 1st arg and the callback function as 2nd arg

//get unpublished posts
$unpublished_posts = array_filter($posts, function ($post) {
    return ! $post->published;

});

//get published posts
$published_posts = array_filter($posts, function ($post){
    return $post->published;
});




//ARRAY_MAP (callback, array)  -> iterates through all elements of array and modifies all of them

$allPublishedPosts = array_map(function($post){

 $post->published = true;

 return  $post;

 
}, $posts);


$titlesAray = array_map(function($post){

    //expose only the title of posts

  // return (array) $post->title;
  return ['title' => $post->title];
}, $posts);


//same effect as array_map() obtained with foreach();

// foreach($posts as $post) {
//     $post->published = true;
// }



//ARRAY_COLUMN(array, key)    ->get a subset of the data


//use array_map

// $titles = array_map(function($post){
//     return $post->title;
// }, $posts);


//user array_column(array, key);  ->will not work with protected or private, only with public
//$titles = array_column($posts, 'title');

//make $posts an assoc array with foreach()
// foreach($posts as $index => $post)
// {
//     $posts[$index] = (array) $post;
// }




//make $posts assoc array with array_map()
// $posts = array_map(function($post){
//     return (array)$post;
// }, $posts);

$titles = array_column($posts, 'author', 'title');    //note 3rd argument (optional) can be used as the key for the resulting array
var_dump($titles);
?>