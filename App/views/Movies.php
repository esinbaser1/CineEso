<?php

namespace Views;

class Movies {
    public function formMovies($data) {

        echo '
        <h2> Movies </h2>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Release date</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>   ';

            if (!empty($data)) { 
                foreach($data as $datas) {
                    echo '
                        <tr>
                            <td> '. $datas['title'] . ' </td>
                            <td> '. $datas['genre'] . ' </td>
                            <td> '. $datas['release_date'] . ' </td>
                            <td> '. $datas['description'] . ' </td>
                            <td><a id="movies-details" href="moviesDetails/' . $datas['id'] . '"> Détails</a> </td>
                        </tr>';
                }
            } else {
                echo '<tr><td colspan="5">No movies available</td></tr>'; 
            }
            echo '
            </tbody>
        </table>';
    }
}
