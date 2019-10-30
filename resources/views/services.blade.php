@extends('layout')

@section('content')
<div class="section section-header">
        <div class="parallax filter ">
            <div class="image" style="background-color: gray">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <p></p>

                        <img class="img-fluid" height="100vh" width="auto" src="./logo.png" />
                        <h3 style="font-family: 'Audiowide',cursive; font-size:100%;">APPRAISALS | ANALYTICS</h3>
                        <div class="separator line-separator">♦</div>
                        <p class="description">
                            We've got your back
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Our Services</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">We are a group of people who like providing unique solutions to unique
                        problems.</p>
                    <br>
                    <p class="description">(Click to expand)</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info-icon" title="valuation">
                        <div class="icon text-danger">
                            <i class="pe-7s-home"></i>
                        </div>
                        <h3>Valuation</h3>
                        <p class="description">Mass appraisal valuation and problems that go along with the industry.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-icon" title="GIS">

                        <div class="icon text-danger">
                            <i class="pe-7s-map-2"></i>
                        </div>

                        <h3>GIS</h3>
                        <p class="description">The most beautiful way to visualize data and make it real.</p>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="info-icon" title="tech">
                        <div class="icon text-danger">
                            <i class="pe-7s-refresh-cloud"></i>
                        </div>

                        <h3>Tech</h3>
                        <p class="description">
                            Reduce painful redundancy and get the most out of your resources.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section services invisible" id="Valuation">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3 class="text-danger">Valuation & Mass Appraisal</h3>
                    <p class="description">Mass Appraisal, along with CAMA (Computer Assisted Mass Appraisal)
                        integration, is a complicated concept. We strive
                        to simplify the confusion.
                        We have a knack for isolating what factors are throwing your ratio studies out of wack - and
                        developing plans to normalize where things went wrong.

                    </p>
                    <div class="row m-0 border-bottom border-dark">
                        <div class="col-xs-12 col-sm-4 mx-auto text-center">
                            <figure class="figure">
                                <img src="./assets/subd.png" class="serviceImage rounded" alt="...">
                                <h5 class="mt-0 mb-1">Residential</h5>
                                Residential Appraisals are our bread and butter. We have
                                a demonstrated history of success in providing reliable values and keeping your
                                county
                                in compliance with industry standards.
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-4 mx-auto text-center">
                            <figure class="figure">
                                <img src="./assets/commercial.jpg" class="serviceImage rounded" alt="...">
                                <h5 class="mt-0 mb-1">Commercial and Industrial</h5>
                                The LMC commercial team is comprised of the best in the business. We know income
                                producing properties can provide more headache than residential. Our staff is
                                experienced and equipped to help meet these challenges head on.
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-4 mx-auto text-center">
                            <figure class="figure">
                                <img src="./assets/appraiser.jpg" class="serviceImage rounded" alt="...">
                                <h5 class="mt-0 mb-1">Rent-An-Appraiser</h5>
                                Sometimes you just need an extra hand in your day to day office duties. We offer a
                                variety of staffing resources to help meet your needs in any way we can.
                            </figure>
                        </div>
                    </div>
                    <div class="row m-0 mt-5">
                        <div class="col-xs-12 col-sm-6 mx-auto text-center">
                            <figure class="figure">
                                <img src="./assets/services.jpg" class="serviceImage rounded" alt="...">
                                <h5 class="mt-0 mb-1">Specialized Services</h5>
                                Our entire staff has experience in a Tax Assessor's office. We have the knowledge to
                                provide
                                guidance and staffing in any area related to assessment.
                                <ul class="list-group list-group-flush servList mx-auto">
                                    <li class="list-group-item">
                                        Developing a Plan of Action
                                    </li>
                                    <li class="list-group-item">
                                        Contract Chief Appraiser
                                    </li>
                                    <li class="list-group-item">
                                        Expert Witness
                                    </li>
                                    <li class="list-group-item">
                                        Appeal Hearings
                                    </li>
                                    <li class="list-group-item">
                                        New Property Tax Law Changes
                                    </li>
                                    <li class="list-group-item">
                                        Staff Training and Workshop Hosting
                                    </li>
                                </ul>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section services invisible" id="GIS">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3 class="text-danger">GIS</h3>
                    <p class="description">GIS is one of the easiest ways to visualize and portray the data you have
                        in
                        a way that is easy to digest.</p>
                    <div class="row mt-2">
                        <div class="col-sm-12 text-center border-bottom border-dark">
                            <h6>Why us?</h6>
                            <ul class="list-group list-group-flush servList mx-auto">
                                <li class="list-group-item">ESRI Certfied</li>
                                <li class="list-group-item">Seamless integration with SQL Server to create
                                    dynamic
                                    mapping
                                    applications</li>
                                <li class="list-group-item">Splits/Combinations</li>
                                <li class="list-group-item">Objective based mapping strategies to help during
                                    appeals
                                    or
                                    find new construction</li>
                                <li class="list-group-item">Esri JavaScript API Experience</li>
                            </ul>
                            <br>
                            <p>For inquiries, please email <a href="mailto:gis@mccormicksolutions.com"
                                    class="text-decoration-none">GIS@McCormickSolutions.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="row m-0 mt-2">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <h3>Online Mapping</h3>
                            <div class="row m-0">
                                <div class="col-lg-6">
                                    <h6>Coming Soon</h6>
                                    <p>Export a cut of your data to display attributes visually</p>
                                    <br>

                                </div>
                                <div class="col-lg-6">
                                    <h6>Custom Maps</h6>
                                    <p>Advanced online mapping to display live information straight from your
                                        database.<br>
                                        Make a change and see it reflected on the next click.</p>
                                    <!-- <img src="assets/map.gif" class="img-fluid" style="max-height:50vh"> -->
                                </div>
                            </div>



                        </div>


                    </div>
                    <!-- <div class="col-sm-4 col-xs-12 mx-auto text-center mt-3">
                        <h5 class="serviceTitle">Sketch Overlay</h5>
                        <div class="row m-0">
                            <div class="col-xs-12">
                                <p class="serviceDescrip">Finding new construction and missed additions using GIS is
                                    a
                                    great way to save
                                    money and an even better way to flag things that can be missed in the field.
                                </p>
                            </div>
                            <div class="col-xs-12 mx-auto">
                                <img style="max-height:30vh;height:auto;width:auto"
                                    src="assets/portfolio/sketch_overlay.png">
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
    <div class="section services invisible" id="Tech">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3 class="text-danger">Techonology Solutions</h3>
                    <p class="description">Data entry got you down? Up late running the same report, again? There's
                        a script for that...</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 text-center">

                    <ul class="list-group list-group-flush servList mx-auto">
                        <li class="list-group-item">
                            Custom SQL scripts to reduce reduntant tasks that can be painfully annoying
                            and time consuming.
                        </li>
                        <li class="list-group-item">
                            SQL inspired Excel Documents for data analysis
                        </li>
                        <li class="list-group-item">
                            Remote Friendly Workplace - VPN or Remote Desktop setup
                        </li>
                        <li class="list-group-item">
                            Custom Web Applications
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6 text-center">
                    <h5>What we use:</h5>
                    <div class="row m-0">
                        <div class='col-xs-6 col-sm-4'>
                            <figure class="figure">
                                <img src="./assets/excel.png" class="rounded"
                                    style='max-height:10vh; width:auto;min-height:10vh;' alt="...">
                            </figure>
                        </div>
                        <div class='col-xs-6 col-sm-4'>
                            <figure class="figure">
                                <img src="./assets/sql.png" class="rounded"
                                    style='max-height:10vh; width:auto;min-height:10vh;' alt="...">
                            </figure>
                        </div>
                        <div class='col-xs-6 col-sm-4'>
                            <figure class="figure">
                                <img src="./assets/MySQL.png" class="rounded"
                                    style='max-height:10vh; width:auto;min-height:10vh;' alt="...">
                            </figure>
                        </div>
                        <div class='col-xs-6 col-sm-4'>
                            <figure class="figure">
                                <img src="./assets/Esri-logo.jpg" class="rounded"
                                    style='max-height:10vh; width:auto;min-height:10vh;' alt="...">
                            </figure>
                        </div>
                        <div class='col-xs-6 col-sm-4'>
                            <figure class="figure">
                                <img src="./assets/vscode.png" class="rounded"
                                    style='max-height:10vh; width:auto;min-height:10vh;' alt="...">
                            </figure>
                        </div>
                        <div class='col-xs-6 col-sm-4'>
                            <figure class="figure">
                                <img src="./assets/js.png" class="rounded"
                                    style='max-height:10vh; width:auto;min-height:10vh;' alt="...">
                            </figure>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 text-center">
                        <h3 class="text-danger">Custom Solutions</h3>
                        <p>Market modeling application to assist the Gwinnett County Tax Assessment office in the classification of comparable subdivisions throughout the county.
                            With McCormick, you get more than a spreadsheet.
                        </p>
                    <video width="320" height="240" controls>
                        <source src="./Gwinnett_County_Market_Model.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
    @endsection