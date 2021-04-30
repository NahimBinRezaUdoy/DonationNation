@extends('admin.layout')

@section('page_title', 'Dashboard')

@section('dashboard_select', 'active')

@section('container')

    <!-- MAIN CONTENT-->
    <div class="main-content" style="margin-top: -120px">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">OVERVIEW</h2>
                        </div>
                    </div>
                </div>

                <div class="row m-t-25">
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <a href="{{ url('admin/volunteer') }}">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="text text-center icon">
                                            <i class="zmdi zmdi-account-o"></i>
                                            <h2>{{ $volunteers->count() }}</h2>
                                            <span class="ml-1">Total Volunteers</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart1"></canvas>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c2">
                            <a href="{{ url('admin/post/index') }}">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="text text-center icon">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                            <h2>{{ $posts->count() }}</h2>
                                            <span class="ml-1">Total Blog Posts</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart2"></canvas>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c3">
                            <a href="{{ url('admin/event/index') }}">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="text text-center icon">
                                            <i class="zmdi zmdi-calendar-note"></i>
                                            <h2>{{ $events->count() }}</h2>
                                            <span class="ml-3">Recent Events </span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart3"></canvas>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c4">
                            <a href="{{ url('admin/cause/index') }}">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="text text-center icon">
                                            <i class="fa fa-medkit" aria-hidden="true"></i>
                                            <h2>{{ $causes->count() }}</h2>
                                            <span class="ml-3">Total Causes</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart4"></canvas>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="au-card recent-report">
                            <div class="au-card-inner">
                                <h3 class="title-2">recent reports</h3>
                                <div class="chart-info">
                                    <div class="chart-info__left">
                                        <div class="chart-note">
                                            <span class="dot dot--blue"></span>
                                            <span>products</span>
                                        </div>
                                        <div class="chart-note mr-0">
                                            <span class="dot dot--green"></span>
                                            <span>services</span>
                                        </div>
                                    </div>
                                    <div class="chart-info__right">
                                        <div class="chart-statis">
                                            <span class="index incre">
                                                <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                            <span class="label">products</span>
                                        </div>
                                        <div class="chart-statis mr-0">
                                            <span class="index decre">
                                                <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                            <span class="label">services</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-report__chart">
                                    <canvas id="recent-rep-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="au-card chart-percent-card">
                            <div class="au-card-inner">
                                <h3 class="title-2 tm-b-5">char by %</h3>
                                <div class="row no-gutters">
                                    <div class="col-xl-6">
                                        <div class="chart-note-wrap">
                                            <div class="chart-note mr-0 d-block">
                                                <span class="dot dot--blue"></span>
                                                <span>products</span>
                                            </div>
                                            <div class="chart-note mr-0 d-block">
                                                <span class="dot dot--red"></span>
                                                <span>services</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="percent-chart">
                                            <canvas id="percent-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                            <div class="au-card-title"
                                style="background-image:url({{ asset('admin_assets/images/bg-title-01.jpg') }})">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="zmdi zmdi-account-calendar"></i>
                                    <a href="{{ url('admin/event/index') }}" class="text-white">Recent Events</a>
                                </h3>
                            </div>


                            <div class="au-task js-list-load mt-5">
                                <div class="au-task-list js-scrollbar3">

                                    @foreach ($events as $event)
                                        <div class="au-task__item au-task__item--success m-3">
                                            <div class="au-task__item-inner">
                                                <h5 class="task">
                                                    <a href="#">{{ $event->title }}</a>
                                                </h5>
                                                <span class="time">{{ $event->eventTime }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="au-task__footer">
                                    <a href="{{ url('admin/event/index') }}">
                                        <button class="btn btn-primary">See More</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                            <div class="au-card-title"
                                style="background-image:url('{{ asset('admin_assets/images/bg-title-02.jpg') }}');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="zmdi zmdi-comment-text"></i>
                                    <a href="{{ url('admin/contact') }}" class="text-white">New Messages</a>
                                </h3>
                            </div>


                            <div class="au-inbox-wrap js-inbox-wrap mt-5">
                                <div class="au-message js-list-load">
                                    <div class="au-message-list">

                                        @foreach ($contacts as $contact)
                                            <div class="au-task__item au-task__item--primary m-3">
                                                <div class="au-task__item-inner">
                                                    <h3 class="task">
                                                        <a href="#">{{ $contact->name }}</a>
                                                    </h3>

                                                    <h5 class="task">
                                                        <a href="#">{{ $contact->message }}</a>
                                                    </h5>


                                                    <span class="time">{{ $contact->created_at }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="au-task__footer">
                                        <a href="{{ url('admin/contact') }}">
                                            <button class="btn btn-success">See More</button>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->

@endsection
