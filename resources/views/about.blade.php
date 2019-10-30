@extends('layout')

@section('content')

<div class="section section-header">
        <div class="parallax filter ">
            <div class="image" style="background-color:gray">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <p></p>

                        <img class="img-fluid" height="100vh" width="auto" src="./logo.png" />
                        <h3></h3>
                        <div class="separator line-separator">♦</div>
                        <p class="description">Meet the team</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="section" style="padding:0; background-color:black">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="title-area">
                        <h2 class="text-danger">TEAM</h2>

                        <p class="description">
                            (Click to expand)
                        </p>
                    </div>
                </div>

                <div class="team">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card card-member" id="terry">
                                        <div class="content">
                                            <div class="avatar avatar-danger">
                                                <img alt="..." class="img-circle" src="assets/turry.jpg" />
                                            </div>
                                            <div class="description">
                                                <h3 class="title">Terry McCormick</h3>
                                                <p class="small-text">CEO & Founder</p>
                                                <p class="description">

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-member" id="josh">
                                        <div class="content">
                                            <div class="avatar avatar-danger">
                                                <img alt="..." class="img-circle" src="./assets/josh.jpg" />
                                            </div>
                                            <div class="description">
                                                <h3 class="title">Josh McCormick</h3>
                                                <p class="small-text">SVP Technology</p>
                                                <p class="description">

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-member" id="amber">
                                        <div class="content">
                                            <div class="avatar avatar-danger">
                                                <img alt="..." class="img-circle" src="./assets/amber.jpg" />
                                            </div>
                                            <div class="description">
                                                <h3 class="title">Amber Gilbert</h3>
                                                <p class="small-text">Project Manager</p>
                                                <p class="description">

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-12 invisible" id="empHidden">
                                <div class="card card-member">
                                    <div class="content" id="expand">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    
    @endsection