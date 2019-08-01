@extends('admin.layouts.master')

@section('title')
    Users
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-users"></span> Admin Users
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-users"></i> Admin Panel</a></li>
                <li class="active">Users</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content table-responsive" style=" padding-bottom: 100%;">

            <table class="table table-hover table-bordered" id="user_table">
                <thead>
                <tr style="background: #1e282c ;color:#fff; font-weight: bold">
                    <td>ID</td>
                    <td>Username</td>
                    <td>Full Name</td>
                    <td>Role</td>
                    <td>Member Since</td>
                    <td>Actions</td>
                </tr>
                </thead>
            </table>
            <form action="/action_page.php">
                <input list="browsers" name="browser">
                <datalist id="browsers">
                    <option value="Internet Explorer">
                    <option value="Firefox">
                    <option value="Chrome">
                    <option value="Opera">
                    <option value="Safari">
                </datalist>
                <input type="submit">
            </form>

        </section>
    </div>
@stop

@section('script')

@stop
