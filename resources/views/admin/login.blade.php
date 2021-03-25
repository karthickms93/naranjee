@extends('layouts.admin.head_foot')
@section('body')
<div class="container login_page mb-5" ng-app="myApp" >
    <div class="row m-0 p-0" ng-controller="login_page">
        <div class="col-12 text-center mb-5">
            <img class="login_img" src="{{ url('assets/images/poornatha_logo.png') }}">
        </div>
        <div class="col-12 col-sm-6 main_section pt-5  m-auto z-depth-2">
            <div class="form-group">
                <input type="text" autocomplete="off" id="email" my-enter="check_login()" class="form-control contact_form_input" required>
                <label class="form-control-placeholder" for="email">Email</label>
            </div>
            <div class="clear-both">&nbsp;</div>
            <div class="form-group">
                <input type="text" id="password" autocomplete="off" my-enter="check_login()" class="form-control contact_form_input" required>
                <label class="form-control-placeholder" for="password">Password</label>
            </div>
            <div class="clear-both">&nbsp;</div>
            <a class="waves-effect waves-light white-text btn-large login_btn pointer" ng-click="check_login()" >Submit</a>
            <div class="clear-both">&nbsp;</div>
        </div>
    </div>
</div>
<style>
.login_btn
{
    background: #2f388e !important;  /* fallback for old browsers */
}
</style>
@endsection
