@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Company</th>
    </tr>
    <tr>
        <td>Nike<img src="/nike.jpg" alt="">
        </td>
        <td>Nike Retro GTS</td>
        <td>Blue Ribbon Sports</td>
    </tr>
    <tr>
        <td>Adidas
        <img src="adidas.jpg" alt="">
        </td>
        <td>Adidas Harden Vol. 4</td>
        <td>Dassler Brothers Shoe Factory</td>
    </tr>
    <tr>
         <td>Vans
        <img src="vans.jpg" alt="">
        </td>
        <td>SK8-HI</td>
        <td>The Van Doren Rubber Company</td>
</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:50px solid black;
    padding:10px;
    background-color: yellow;
    width: 900px;
    height: 150px;
    text-align: center;
    }
   img{
       width: 150px;
       height: 100px;
   }
</style>
