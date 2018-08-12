@extends('layouts.app')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Список пластинок </div>
                    <div class="panel-body">
<?php

                        foreach ($albums as $album) {
                            $tmpAlbum=$album->album;
                            $tmpArtist='/'.$album->artist;
                            echo '<br>';
                            echo '<a href="/nutnet/public/edit/'.$tmpAlbum.$tmpArtist.'">';
                            print_r($tmpAlbum);
                            echo '</a>';

                                              }

?>

                    </div></div></div></div></div></div>







