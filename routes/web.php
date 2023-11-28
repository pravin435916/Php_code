<?php
use Illuminate\Support\Facades\Route;
// use Practicals\Song;
use App\Models\Song;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/songs_static', function () {
    return view('songs_static');
  });
  
  // Route::get('/songs', function () {
  //       $song1 = new Song();
  //   $song1->setTitle("Stan");
  //   $song1->setArtist("Eminem");
  
  //   $song2 = new Song();
  //   $song2->setTitle("New Song");
  //   $song2->setArtist("Pravin");
  
  //   $song3 = new Song();
  //   $song3->setTitle("With You");
  //   $song3->setArtist("A P Dhillon");
  
  //   return view('songs', [ 'songs' => [ $song1, $song2, $song3 ] ]); 
  // });
  Route::get('/songs', function () {
    return view('songs', [ 'songs' => Song::all() ] );
});
Route::get('/playlists/{playlistId}', function (string $playlistId) {
    return view('playlists', ['songs'=> Song::all(),'playlistId'=> $playlistId]);
});
Route::get('/veggies', function () {
    return view('veggies');
});


Route::get('/veggies/{veggieName}', function (string $veggieName){
	return $veggieName;
})->whereIn('veggieName',['baigan','bhindi','aaloo','gobhi']);