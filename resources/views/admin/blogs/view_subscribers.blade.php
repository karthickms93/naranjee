@extends('layouts.admin.head_foot')
@section('body')
<div class="row">
  <div class="col l12 s12 m12">
    <div class="col l12 s12 m12">
      <h5>Subscribers Details</h5>
      <div class="input-field banner_search">
        <input id="search" placeholder="Search Subscribers" type="search" class="search_input">
        <span class="search_icon"></span>
      </div>
      <div class="panel panel-default panel-custom">
<table id="user_listing" class="display res_table">
    <thead>
        <tr>
            <th>Sno</th>
            <th>Email</th>
            <th>Subscribed at</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($subscribers as $subscribe)
{
?>
    <tr>
        <td>{{ $subscribe->id }}</td>
        <td>{{ $subscribe->email }}</td>
        <td>{{ $subscribe->show_date }}</td>
    </tr>
<?php
}
?>
    </tbody>
</table>
<style>
.res_table td {
word-break: break-all;
}

@media only screen and (min-width: 320px) and (max-width: 980px)  {
  .res_table td:nth-of-type(1):before { content: "Sno";}
  .res_table td:nth-of-type(2):before { content: "Email";}
  .res_table td:nth-of-type(3):before { content: "Subscribed at";}
} 

</style>
</div>
</div>
</div>
</div>
@stop
