<?php

class LibraryController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function show()
	{
		/* Check if the Welcome one is not deleted */
        $userId = Auth::user()->id;            
        /*$notes = Note::with(
            array(
                'users' => function($query) use(&$userId) {
                    $query->where('users.id', '=', $userId);
                },
                'versions' => function($query) {
                    $query->whereNull('previous_id');
                }
            )
        )*//*->join('note_user', function($join) use(&$userId) {
            $join->where('note_user.user_id', '=', $userId);
        })*/
        /*->orderBy('notes.created_at')
        ->whereNull('notes.deleted_at')
        ->toSQL();*/
/*$notes = DB::table('notes')
->join('note_user', function($join) {
$join->where('note_user.user_id', '=', 3);
})
->join('versions', function($join) {
$join->on('versions.version_id', '=', 'versions.id')
->whereNull('notes.previous_id');
})*/
/*->whereNull*/
/*->whereNull('notes.deleted_at')
->orderBy('notes.created_at')
->first();*/

		/*$notes = DB::table('notes')
                    ->join('note_user', function($join) {
                        $join->on('notes.id', '=', 'note_user.note_id')
                            ->where('note_user.user_id', '=', Auth::user()->id);
                    })*/
                    //->join('notebooks', function ($join) {
                        //$join->on('notes.notebook_id', '=', 'notebooks.id');
                    //})
                    //->join('versions', function($join) {
                        //$join->on('notes.version_id', '=', 'versions.id');
                    //})
                    //->select('notes.id', 'notebooks.title as notebook_title', 'versions.id as version_id', 'versions.title', 'versions.content', 'notes.created_at', 'notes.updated_at')
                    /*->whereNull('notes.deleted_at')
                    ->orderBy('notes.created_at')
                    ->first();*/
                    
$userId = Auth::user()->id;
$welcomeNote = Note::with(
array(
/*'users' => function($query) {
$query->where('id', '=', Auth::user()->id);
},*/
'version' => function($query) {
$query->whereNull('previous_id');
}
)
)->join('note_user', function($join) use(&$userId) {
    $join->on('notes.id', '=', 'note_user.note_id')->where('note_user.user_id', '=', $userId);
})
->orderBy('notes.created_at')
->whereNull('notes.deleted_at')
->first(); 
//->toSQL();
        
        //die($welcomeNote->toArray()->title);
        //die(print_r($welcomeNote));
        //die($welcomeNote->version->title);
        
        if(is_null($welcomeNote)) {
            $welcomeNoteArray = array('welcomeNoteSaved' => 0);
        }else{
            if($welcomeNote->version->title === Lang::get('notebooks.welcome_note_title')) {
                $welcomeNoteArray = array('welcomeNoteSaved' => 1);
            }else{
                $welcomeNoteArray = array('welcomeNoteSaved' => 0);
                //die($welcomeNote->version->title);
                //die(Lang::get('notebooks.welcome_notebook_title'));
            }
        }
        
        //die(print_r(DB::getQueryLog()));
        
        //$welcomeNoteArray = array('welcomeNoteSaved' => 1);
        
        //die(var_dump($welcomeNoteArray));
		
		return View::make('main', $welcomeNoteArray);
	}

}
