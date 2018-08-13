@extends('layouts.app')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Редактор пластинок </div>
                    <div class="panel-body">
                        <form id="form">


                            <?php
                          echo 'вы выбрали альбом  ';
                           echo '<font color=red>';
                            print_r($tmpEditAlbum);
                           echo '<br>';
                            echo '</font> Исполнитель: ';
                            print_r($tmpEditArtist);
////////////////////////////////////////////////////////////////////////////////
                           if ($tmpAlbumEdit or $tmpArtistEdit)  {
                               echo '<script type="text/javascript">';
                               echo 'window.location.href="/";';
                               echo '</script>';

                           }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                         ?>

                            <br>
                          Новое имя альбома: <input id="albumnew" name="albumnew"><br>
                            <br>
                                Новый исполнитель : <input id="artistnew" name="artistnew"> <br>

                                <button>Сохранить</button>

                        </form>
                        <a href="/"><<<</a>





                    </div>
                </div>
            </div>
        </div>
    </div>

