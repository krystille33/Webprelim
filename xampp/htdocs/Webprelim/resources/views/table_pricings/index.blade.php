@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Nike</th>
        <th>Adidas</th>
        <th>Vans</th>
    </tr>
    <tr>
    <td>Nike<img src="/nike.jpg" alt="">
    </td>
    <td>Adidas<img src="/adidas.jpg" alt="">
    </td>
    <td>Vans<img src="/vans.jpg" alt="">
    </td>
    </tr>
    <tr>
        <th> ‎₱2,895.00 </th>
        <th> ‎₱3,500.00</th>
        <th> ₱3,998.00</th>
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

