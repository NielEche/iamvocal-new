@extends('layouts.admin')

@section('title')
Admin Dashboard
@endsection

@section('content')


<div class="page-container ">
    <div class="page-content-wrapper">
        <div class="content sm-gutter">
            <div class="row">
                <div class="col-md-8 col-lg-5 col-xlg-5">
                    <div class="card-body">
                        <div class="p-l-5">
                            <div class="row">
                                <div class="col-lg-12 col-xlg-6">
                                    <div class="row m-t-20">
                                        <div class="col-lg-5">
                                            <h4 style="font-size:40px;" class="no-margin py-3" id="ctime"></h4>
                                            <p style="font-size:20px;" class="small hint-text" id="cdate"></p>
                                        </div>
                                        <div class="col-lg-7 py-2">
                                            <div class="pull-right">
                                                <canvas height="64" width="64" class="clear-day"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                 
                                  
                                    <div class="row m-t-10 timeslot">
                                        <div class="col-2 p-t-10 text-center">
                                            <p class="small">13:30</p>
                                            <canvas height="25" width="25" class="partly-cloudy-day"></canvas>
                                            <p class="text-danger bold">30°C</p>
                                        </div>
                                        <div class="col-2 p-t-10 text-center">
                                            <p class="small">14:00</p>
                                            <canvas height="25" width="25" class="cloudy"></canvas>
                                            <p class="text-danger bold">30°C</p>
                                        </div>
                                        <div class="col-2 p-t-10 text-center">
                                            <p class="small">14:30</p>
                                            <canvas height="25" width="25" class="rain"></canvas>
                                            <p class="text-danger bold">30°C</p>
                                        </div>
                                        <div class="col-2 p-t-10 text-center">
                                            <p class="small">15:00</p>
                                            <canvas height="25" width="25" class="sleet"></canvas>
                                            <p class="text-danger bold">30°C</p>
                                        </div>
                                        <div class="col-2 p-t-10 text-center">
                                            <p class="small">15:30</p>
                                            <canvas height="25" width="25" class="snow"></canvas>
                                            <p class="text-danger bold">30°C</p>
                                        </div>
                                        <div class="col-2 p-t-10 text-center">
                                            <p class="small">16:00</p>
                                            <canvas height="25" width="25" class="wind"></canvas>
                                            <p class="text-danger bold">30°C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xlg-6 visible-xlg">
                                    <div class="row">
                                        <div class="forecast-day col-lg-6 text-center m-t-10 ">
                                            <div class="bg-master-lightest p-b-10 p-t-10">
                                                <h4 class="p-t-10 no-margin">Tuesday</h4>
                                                <p class="small hint-text m-b-20">11th Augest 2014</p>
                                                <canvas class="rain" width="64" height="64"></canvas>
                                                <h5 class="text-danger">32°</h5>
                                                <p>Feels like
                                                    <span class="bold">sunny</span>
                                                </p>
                                                <p class="small">Wind
                                                    <span class="bold p-l-20">11km/h</span>
                                                </p>
                                                <div class="m-t-20 block">
                                                    <div class="padding-10">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-center">
                                                                <p class="small">Noon</p>
                                                                <canvas class="sleet" width="25" height="25"></canvas>
                                                                <p class="text-danger bold">30°C</p>
                                                            </div>
                                                            <div class="col-lg-6 text-center">
                                                                <p class="small">Night</p>
                                                                <canvas class="wind" width="25" height="25"></canvas>
                                                                <p class="text-danger bold">30°C</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-center m-t-10 ">
                                            <div class="bg-master-lightest p-b-10 p-t-10">
                                                <h4 class="p-t-10 no-margin">Wednesday</h4>
                                                <p class="small hint-text m-b-20">11th Augest 2014</p>
                                                <canvas class="rain" width="64" height="64"></canvas>
                                                <h5 class="text-danger">32°</h5>
                                                <p>Feels like
                                                    <span class="bold">sunny</span>
                                                </p>
                                                <p class="small">Wind
                                                    <span class="bold p-l-20">11km/h</span>
                                                </p>
                                                <div class="m-t-20 block">
                                                    <div class="padding-10">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-center">
                                                                <p class="small">Noon</p>
                                                                <canvas class="sleet" width="25" height="25"></canvas>
                                                                <p class="text-danger bold">30°C</p>
                                                            </div>
                                                            <div class="col-lg-6 text-center">
                                                                <p class="small">Night</p>
                                                                <canvas class="wind" width="25" height="25"></canvas>
                                                                <p class="text-danger bold">30°C</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="quickview" class="quickview-wrapper" data-pages="quickview">
    <ul class="nav nav-tabs" role="tablist">
        <li class="">
            <a href="#quickview-notes" data-target="#quickview-notes" data-toggle="tab" role="tab">Notes</a>
        </li>
        <li>
            <a href="#quickview-alerts" data-target="#quickview-alerts" data-toggle="tab" role="tab">Alerts</a>
        </li>
        <li class="">
            <a class="active" href="#quickview-chat" data-toggle="tab" role="tab">Chat</a>
        </li>
    </ul>
    <a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i
            class="pg-close"></i></a>
    <div class="tab-content">
        <div class="tab-pane no-padding" id="quickview-notes">
            <div class="view-port clearfix quickview-notes" id="note-views">
                <div class="view list" id="quick-note-list">
                    <div class="toolbar clearfix">
                        <ul class="pull-right ">
                            <li>
                                <a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
                            </li>
                            <li>
                                <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views"
                                    data-view-animation="push"><i class="fa fa-plus"></i></a>
                            </li>
                        </ul>
                        <button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i>
                            Delete</button>
                    </div>
                    <ul>
                        <li data-noteid="1">
                            <div class="left">
                                <div class="checkbox check-warning no-margin">
                                    <input id="qncheckbox1" type="checkbox" value="1">
                                    <label for="qncheckbox1"></label>
                                </div>
                                <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                </p>
                            </div>
                            <div class="right pull-right">
                                <span class="date">12/12/14</span>
                                <a href="#" data-navigate="view" data-view-port="#note-views"
                                    data-view-animation="push"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </li>
                        <li data-noteid="2">
                            <div class="left">
                                <div class="checkbox check-warning no-margin">
                                    <input id="qncheckbox2" type="checkbox" value="1">
                                    <label for="qncheckbox2"></label>
                                </div>
                                <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                </p>
                            </div>
                            <div class="right pull-right">
                                <span class="date">12/12/14</span>
                                <a href="#"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </li>
                        <li data-noteid="2">
                            <div class="left">
                                <div class="checkbox check-warning no-margin">
                                    <input id="qncheckbox3" type="checkbox" value="1">
                                    <label for="qncheckbox3"></label>
                                </div>
                                <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                </p>
                            </div>
                            <div class="right pull-right">
                                <span class="date">12/12/14</span>
                                <a href="#"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </li>
                        <li data-noteid="3">
                            <div class="left">
                                <div class="checkbox check-warning no-margin">
                                    <input id="qncheckbox4" type="checkbox" value="1">
                                    <label for="qncheckbox4"></label>
                                </div>
                                <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                </p>
                            </div>
                            <div class="right pull-right">
                                <span class="date">12/12/14</span>
                                <a href="#"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </li>
                        <li data-noteid="4">
                            <div class="left">
                                <div class="checkbox check-warning no-margin">
                                    <input id="qncheckbox5" type="checkbox" value="1">
                                    <label for="qncheckbox5"></label>
                                </div>
                                <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                </p>
                            </div>
                            <div class="right pull-right">
                                <span class="date">12/12/14</span>
                                <a href="#"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="view note" id="quick-note">
                    <div>
                        <ul class="toolbar">
                            <li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
                            </li>
                            <li><a href="#" data-action="Bold" class="fs-12"><i class="fa fa-bold"></i></a>
                            </li>
                            <li><a href="#" data-action="Italic" class="fs-12"><i class="fa fa-italic"></i></a>
                            </li>
                            <li><a href="#" class="fs-12"><i class="fa fa-link"></i></a>
                            </li>
                        </ul>
                        <div class="body">
                            <div>
                                <div class="top">
                                    <span>21st april 2014 2:13am</span>
                                </div>
                                <div class="content">
                                    <div class="quick-note-editor full-width full-height js-input"
                                        contenteditable="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane no-padding" id="quickview-alerts">
            <div class="view-port clearfix" id="alerts">
                <div class="view bg-white">
                    <div class="navbar navbar-default navbar-sm">
                        <div class="navbar-inner">
                            <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view"
                                data-view-port="#chat" data-view-animation="push-parrallax">
                                <i class="pg-more"></i>
                            </a>
                            <div class="view-heading">
                                Notications
                            </div>
                            <a href="#" class="inline action p-r-10 pull-right link text-master">
                                <i class="pg-search"></i>
                            </a>
                        </div>
                    </div>
                    <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">
                                Calendar
                            </div>
                            <ul>
                                <li class="alert-list">
                                    <a href="javascript:;" class="align-items-center" data-navigate="view"
                                        data-view-port="#chat" data-view-animation="push-parrallax">
                                        <p class="">
                                            <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                                        </p>
                                        <p class="p-l-10 overflow-ellipsis fs-12">
                                            <span class="text-master">David Nester Birthday</span>
                                        </p>
                                        <p class="p-r-10 ml-auto fs-12 text-right">
                                            <span class="text-warning">Today <br></span>
                                            <span class="text-master">All Day</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="alert-list">
                                    <a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat"
                                        data-view-animation="push-parrallax">
                                        <p class="">
                                            <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                                        </p>
                                        <p class="p-l-10 overflow-ellipsis fs-12">
                                            <span class="text-master">Meeting at 2:30</span>
                                        </p>
                                        <p class="p-r-10 ml-auto fs-12 text-right">
                                            <span class="text-warning">Today</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">
                                Social
                            </div>
                            <ul>
                                <li class="alert-list">
                                    <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view"
                                        data-view-port="#chat" data-view-animation="push-parrallax">
                                        <p class="">
                                            <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                                        </p>
                                        <p class="col overflow-ellipsis fs-12 p-l-10">
                                            <span class="text-master link">Jame Smith commented on your
                                                status<br></span>
                                            <span class="text-master">“Perfection Simplified - Company Revox"</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="alert-list">
                                    <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view"
                                        data-view-port="#chat" data-view-animation="push-parrallax">
                                        <p class="">
                                            <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                                        </p>
                                        <p class="col overflow-ellipsis fs-12 p-l-10">
                                            <span class="text-master link">Jame Smith commented on your
                                                status<br></span>
                                            <span class="text-master">“Perfection Simplified - Company Revox"</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">
                                Sever Status
                            </div>
                            <ul>
                                <li class="alert-list">
                                    <a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view"
                                        data-view-port="#chat" data-view-animation="push-parrallax">
                                        <p class="">
                                            <span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
                                        </p>
                                        <p class="col overflow-ellipsis fs-12 p-l-10">
                                            <span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
                                            <span class="text-master">Server Load Exceeted. Take action</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane active no-padding" id="quickview-chat">
            <div class="view-port clearfix" id="chat">
                <div class="view bg-white">
                    <div class="navbar navbar-default">
                        <div class="navbar-inner">
                            <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view"
                                data-view-port="#chat" data-view-animation="push-parrallax">
                                <i class="pg-plus"></i>
                            </a>
                            <div class="view-heading">
                                Chat List
                                <div class="fs-11">Show All</div>
                            </div>
                            <a href="#" class="inline action p-r-10 pull-right link text-master">
                                <i class="pg-more"></i>
                            </a>
                        </div>
                    </div>
                    <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">
                                a</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/1x.jpg"
                                                data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">ava flores</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">b</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/2x.jpg"
                                                data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">bella mccoy</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/3x.jpg"
                                                data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">bob stephens</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">c</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/4x.jpg"
                                                data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">carole roberts</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/5x.jpg"
                                                data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">christopher perez</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">d</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/6x.jpg"
                                                data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">danielle fletcher</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/7x.jpg"
                                                data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">david sutton</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">e</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/8x.jpg"
                                                data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">earl hamilton</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/9x.jpg"
                                                data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">elaine lawrence</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/1x.jpg"
                                                data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">ellen grant</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/2x.jpg"
                                                data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">erik taylor</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/3x.jpg"
                                                data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">everett wagner</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">f</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/4x.jpg"
                                                data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">freddie gomez</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">g</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/5x.jpg"
                                                data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">glen jensen</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/6x.jpg"
                                                data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">gwendolyn walker</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">j</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/7x.jpg"
                                                data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">janet romero</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">k</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/8x.jpg"
                                                data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">kim martinez</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">l</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/9x.jpg"
                                                data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">lawrence white</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/1x.jpg"
                                                data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">leroy bell</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/2x.jpg"
                                                data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">letitia carr</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/3x.jpg"
                                                data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">lucy castro</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">m</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/4x.jpg"
                                                data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">mae hayes</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/5x.jpg"
                                                data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">marilyn owens</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/6x.jpg"
                                                data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">marlene cole</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/7x.jpg"
                                                data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">marsha warren</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/8x.jpg"
                                                data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">marsha dean</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/9x.jpg"
                                                data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">mia diaz</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">n</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/1x.jpg"
                                                data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">noah elliott</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">p</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/2x.jpg"
                                                data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">phyllis hamilton</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">r</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/3x.jpg"
                                                data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">raul rodriquez</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/4x.jpg"
                                                data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">rhonda barnett</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/5x.jpg"
                                                data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">roberta king</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">s</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/6x.jpg"
                                                data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">scott armstrong</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/7x.jpg"
                                                data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">sebastian austin</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>

                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/8x.jpg"
                                                data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">sofia davis</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">t</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/9x.jpg"
                                                data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">terrance young</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/1x.jpg"
                                                data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">theodore woods</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/2x.jpg"
                                                data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">todd wood</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/3x.jpg"
                                                data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">tommy jenkins</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-view-group-container">
                            <div class="list-view-group-header text-uppercase">w</div>
                            <ul>
                                <li class="chat-user-list clearfix">
                                    <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                        class="" href="#">
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                            <img width="34" height="34" alt=""
                                                data-src-retina="assets/img/profiles/4x.jpg"
                                                data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg"
                                                class="col-top">
                                        </span>
                                        <p class="p-l-10 ">
                                            <span class="text-master">wilma hicks</span>
                                            <span class="block text-master hint-text fs-12">Hello there</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="view chat-view bg-white clearfix">
                    <div class="navbar navbar-default">
                        <div class="navbar-inner">
                            <a href="javascript:;" class="link text-master inline action p-l-10 p-r-10"
                                data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                <i class="pg-arrow_left"></i>
                            </a>
                            <div class="view-heading">
                                John Smith
                                <div class="fs-11 hint-text">Online</div>
                            </div>
                            <a href="#" class="link text-master inline action p-r-10 pull-right ">
                                <i class="pg-more"></i>
                            </a>
                        </div>
                    </div>
                    <div class="chat-inner" id="my-conversation">
                        <div class="message clearfix">
                            <div class="chat-bubble from-me">
                                Hello there
                            </div>
                        </div>
                        <div class="message clearfix">
                            <div class="profile-img-wrapper m-t-5 inline">
                                <img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg"
                                    alt="" data-src="assets/img/profiles/avatar_small.jpg"
                                    data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                            </div>
                            <div class="chat-bubble from-them">
                                Hey
                            </div>
                        </div>
                        <div class="message clearfix">
                            <div class="chat-bubble from-me">
                                Did you check out Pages framework ?
                            </div>
                        </div>
                        <div class="message clearfix">
                            <div class="chat-bubble from-me">
                                Its an awesome chat
                            </div>
                        </div>
                        <div class="message clearfix">
                            <div class="profile-img-wrapper m-t-5 inline">
                                <img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg"
                                    alt="" data-src="assets/img/profiles/avatar_small.jpg"
                                    data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                            </div>
                            <div class="chat-bubble from-them">
                                Yea
                            </div>
                        </div>
                    </div>
                    <div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
                        <div class="row">
                            <div class="col-1 p-t-15">
                                <a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
                            </div>
                            <div class="col-8 no-padding">
                                <input type="text" class="form-control chat-input" data-chat-input=""
                                    data-chat-conversation="#my-conversation" placeholder="Say something">
                            </div>
                            <div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
                                <a href="#" class="link text-master"><i class="pg-camera"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay hide" data-pages="search">
    <div class="overlay-content has-results m-t-20">
        <div class="container-fluid">
            <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png"
                data-src-retina="assets/img/logo_2x.png" width="78" height="22">
            <a href="#" class="close-icon-light overlay-close text-black fs-16">
                <i class="pg-close"></i>
            </a>
        </div>
        <div class="container-fluid">
            <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..."
                autocomplete="off" spellcheck="false">
            <br>
            <div class="inline-block">
                <div class="checkbox right">
                    <input id="checkboxn" type="checkbox" value="1" checked="checked">
                    <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
                </div>
            </div>
            <div class="inline-block m-l-10">
                <p class="fs-13">Press enter to search</p>
            </div>
        </div>
        <div class="container-fluid">
            <span>
                <strong>suggestions :</strong>
            </span>
            <span id="overlay-suggestions"></span>
            <br>
            <div class="search-results m-t-40">
                <p class="bold">Pages Search Results</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div>
                                    <img width="50" height="50" src="assets/img/profiles/avatar.jpg"
                                        data-src="assets/img/profiles/avatar.jpg"
                                        data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                                </div>
                            </div>
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                                <p class="hint-text">via john smith</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div>T</div>
                            </div>
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics
                                </h5>
                                <p class="hint-text">via pages</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div><i class="fa fa-headphones large-text "></i>
                                </div>
                            </div>
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                                <p class="hint-text">via pagesmix</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                                <div><i class="fa fa-facebook large-text "></i>
                                </div>
                            </div>
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                                <p class="hint-text">via facebook</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                                <div><i class="fa fa-twitter large-text "></i>
                                </div>
                            </div>
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                                <p class="hint-text">via twitter</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                                <div><i class="fa fa-google-plus large-text "></i>
                                </div>
                            </div>
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                                <p class="hint-text">via google plus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




