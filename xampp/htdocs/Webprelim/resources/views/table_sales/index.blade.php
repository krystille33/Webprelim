@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Nike<img src="/nike.jpg" alt="">
    </th>
        <th>Adidas<img src="/adidas.jpg" alt=""></th>
        <th>Vans<img src="/vans.jpg" alt=""></th>
    </tr>
    <tr>
    <td>SALES</td>
    <td>SALES</td>
    <td>SALES</td>
    </tr>
    <tr>
        <th>350 Pieces</th>
        <th>300 Pieces</th>
        <th> 200 Pieces</th>
    </tr>
   
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
