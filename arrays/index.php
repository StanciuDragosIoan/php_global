<?

// $names = [
//     'Jeff',
//     'John',
//     'Mary'
// ];

// foreach($names as $name){
//     echo $name;
// }

// require 'index.view.php';



//array functions

class Post {

    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published) 
    {

        $this->title = $title;

        $this->author = $author;

        $this->published = $published;
    }
}

$posts = [

    new Post('My first post', 'JW', true),

    new Post('My second post', 'JW', true),

    new Post('My third post', 'JW', true),

    new Post('My fourth post', 'TW', false),
];

 

//var_dump($posts);


# ##############array_filter();


//get unpublished posts
// $unpublishedPosts = array_filter($posts, function ($post) {
//     return ! $post->published;
// });


// //get published
// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;
// });
 
// var_dump($unpublishedPosts);






# ################ array_map();   ->modifies every single one of the posts

// $modified = array_map(function($post){
//     $post->published = true;

//     return $post;
// }, $posts);


#foreach();
// foreach ($posts as $post) {
//     $post->published = true;
// }

// var_dump($posts);



// $modified = array_map(function($post){
//     //make all post into an array
//     //return (array) $post;


//     //return only the post title
//     return ['title'=>$post->title];
     
// }, $posts);



 
// ################## array_column()  -->pulls certain values from an array

//makes a single array of objects;
$modified = array_column($posts, 'title');
// $posts = array_map(function ($post){
//     return (array) $post;
// }, $posts);

//$titles = array_column($posts, 'title');


//3rd argument represents the key for the post (in this case)
$titles = array_column($posts, 'author', 'title');
var_dump($titles);

?>