<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class edit extends Controller
{
    public function index(Request $request)
    {
        $tmpAlbumEdit = $request->albumnew;
        $tmpArtistEdit = $request->artistnew;
        $tmpEditAlbum = $request->album;
        $tmpEditArtist = $request->artist;
       //////////////////////////////////////////////////////////
        if ($tmpAlbumEdit) {

            DB::table('platedata')
                ->where('album', $tmpEditAlbum)
                ->update(['album' => $tmpAlbumEdit]);
             }

         ///////////////////////////////////////////////////////////////////////////
      // echo '<br>';
        if ($tmpArtistEdit) {

               DB::table('platedata')
                   ->where('artist', $tmpEditArtist)
                   ->update(['artist' => $tmpArtistEdit]);

           }


        return view('edit',['tmpEditAlbum' => $tmpEditAlbum,'tmpAlbumEdit'=>$tmpAlbumEdit,'tmpArtistEdit'=>$tmpArtistEdit]);
     
    }
}
