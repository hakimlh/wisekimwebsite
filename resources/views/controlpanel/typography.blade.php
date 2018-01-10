@extends('layouts.template')
@section('active')
<ul class="nav">
    <li >
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
    <li class="active">
        <a href="typography">
            <i class="material-icons">library_books</i>
            <p>Typography</p>
        </a>
    </li>
    <li>
        <a href="icons">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
        </a>
    </li>
    <li >
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
<a class="navbar-brand" href="#"> Typography </a>
@overwrite

@section('contents')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Material Dashboard Heading</h4>
                                    <p class="category">Created using Roboto Font Family</p>
                                </div>
                                <div class="card-content">
                                    <div id="typography">
                                        <div class="title">
                                            <h2>Typography</h2>
                                        </div>
                                        <div class="row">
                                            <div class="tim-typo">
                                                <h1>
                                                    <span class="tim-note">Header 1</span>The Life of Material Dashboard </h1>
                                            </div>
                                            <div class="tim-typo">
                                                <h2>
                                                    <span class="tim-note">Header 2</span>The life of Material Dashboard </h2>
                                            </div>
                                            <div class="tim-typo">
                                                <h3>
                                                    <span class="tim-note">Header 3</span>The life of Material Dashboard </h3>
                                            </div>
                                            <div class="tim-typo">
                                                <h4>
                                                    <span class="tim-note">Header 4</span>The life of Material Dashboard </h4>
                                            </div>
                                            <div class="tim-typo">
                                                <h5>
                                                    <span class="tim-note">Header 5</span>The life of Material Dashboard </h5>
                                            </div>
                                            <div class="tim-typo">
                                                <h6>
                                                    <span class="tim-note">Header 6</span>The life of Material Dashboard </h6>
                                            </div>
                                            <div class="tim-typo">
                                                <p>
                                                    <span class="tim-note">Paragraph</span>
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Quote</span>
                                                <blockquote>
                                                    <p>
                                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                                                    </p>
                                                    <small>
                                                        Kanye West, Musician
                                                    </small>
                                                </blockquote>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Muted Text</span>
                                                <p class="text-muted">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                                </p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Primary Text</span>
                                                <p class="text-primary">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Info Text</span>
                                                <p class="text-info">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Success Text</span>
                                                <p class="text-success">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Warning Text</span>
                                                <p class="text-warning">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                                </p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Danger Text</span>
                                                <p class="text-danger">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                            </div>
                                            <div class="tim-typo">
                                                <h2>
                                                    <span class="tim-note">Small Tag</span>
                                                    Header with small subtitle
                                                    <br>
                                                    <small>Use "small" tag for the headers</small>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@overwrite
