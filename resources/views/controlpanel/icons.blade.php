@extends('layouts.template')
@section('active')
<ul class="nav">
    <li>
        <a href="dashboard">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li>
        <a href="user">
            <i class="material-icons">person</i>
            <p>User Profile</p>
        </a>
    </li>
    <li>
        <a href="table">
            <i class="material-icons">content_paste</i>
            <p>Table List</p>
        </a>
    </li>
    <li>
        <a href="typography">
            <i class="material-icons">library_books</i>
            <p>Typography</p>
        </a>
    </li>
    <li class="active">
        <a href="icons">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
        </a>
    </li>
    <li>
        <a href="maps">
            <i class="material-icons">location_on</i>
            <p>Maps</p>
        </a>
    </li>
    <li>
        <a href="notifications">
            <i class="material-icons text-gray">notifications</i>
            <p>Notifications</p>
        </a>
    </li>
    <li class="active-pro">
        <a href="upgrade">
            <i class="material-icons">unarchive</i>
            <p>Upgrade to PRO</p>
        </a>
    </li>
</ul>
@overwrite
@section('page_titre')
<a class="navbar-brand" href="#"> Icons </a>
@overwrite
@section('contents')
<div class="row">
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Material Design Icons</h4>
                <p class="category">Handcrafted by our friends from
                    <a target="_blank" href="https://design.google.com/icons/">Google</a>
                </p>
            </div>
            <div class="card-content">
                <div class="iframe-container hidden-sm hidden-xs">
                    <iframe src="https://design.google.com/icons/">
                        <p>Your browser does not support iframes.</p>
                    </iframe>
                </div>
                <div class="col-md-6 hidden-lg hidden-md text-center">
                    <h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google. Check the
                        <a href="https://design.google.com/icons/" target="_blank">Material Icons</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@overwrite
