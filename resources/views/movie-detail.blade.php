<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1 {
        font-family: sans-serif;
        font-weight: 100;
    }
    th {
        text-align: left;
        font-weight: 100;
    }
</style>
<body>
    <h1>Movie Information</h1>
    <table>
        <tr>
            <th>Movie Title:</th>
            <td>{{ $data->mov_title }}</td>
        </tr>
        <tr>
            <th>Year:</th>
            <td>{{ $data->mov_year }}</td>
        </tr>
        <tr>
            <th>Running Time:</th>
            <td>{{ $data->mov_time }} minutes</td>
        </tr>
        <tr>
            <th>Directed By:</th>
            <td>{{ $data->directors[0]->dir_fname }} {{ $data->directors[0]->dir_lname }}</td>
        </tr>
        <tr>
            <th>Starring:</th>
            <td>{{ $data->actors[0]->act_fname }} {{ $data->actors[0]->act_lname }} - {{ $data->actors[0]->pivot->role }}</td>
        </tr>
        <tr>
            <th>Genre:</th>
            <td>{{ $data->genres[0]->gen_title }}</td>
        </tr>
        <tr>
            <th>Rating:</th>
            <td>{{ $data->reviewers[0]->rev_name }}</td>
        </tr>
        <tr>
            <th>Score:</th>
            <td>{{ $data->reviewers[0]->pivot->rev_stars }} stars</td>
        </tr>
    </table>
    <a href="{{ route('movies') }}"><button>Go Back to List</button></a>
</body>
</html>
