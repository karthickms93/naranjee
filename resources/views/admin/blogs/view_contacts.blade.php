@extends('layouts.admin.head_foot')
@section('body')
<div class="row">
  <div class="col l12 s12 m12">
    <div class="col l12 s12 m12">
      <h5>Contact Us Details</h5>
      <div class="input-field banner_search">
        <input id="search" placeholder="Search Contacts" type="search" class="search_input">
        <span class="search_icon"></span>
      </div>
      <div class="panel panel-default panel-custom">
<table id="user_listing" class="display res_table">
    <thead>
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th style="width: 20% !important">Message</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($contacts as $contact)
{
?>
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->phone }}</td>
        <td>{{ $contact->message }}<br>Budget : {{ $contact->budget }}</td>
        <td>{{ date('d-M-y', strtotime($contact->created_at)) }}</td>
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
  .res_table td:nth-of-type(2):before { content: "Name";}
  .res_table td:nth-of-type(3):before { content: "Email";}
  .res_table td:nth-of-type(4):before { content: "Phone";}
  .res_table td:nth-of-type(5):before { content: "Message";}
  .res_table td:nth-of-type(6):before { content: "Budget";}
} 

</style>
</div>
</div>
</div>
</div>
@stop
