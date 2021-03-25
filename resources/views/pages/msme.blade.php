@extends('layouts.default')
@section('content')
<title>Poornatha</title>

<div class="col-12 container p-0">
    <!-- heading -->
    <div class="col-12 msme_bg section" id="section1">
        <div class="jnj_inner_rel position-relative animatedParent container" data-sequence="500">
            <div class="services_inner_abs px-3 l-0 ">
                <h3 class="animated bold_font heading_line msme-heading fadeInUpShort slow m-0" data-id='1'>
                    Unique
                    Business
                    Mentoring Program</h3>
                <h3 class="animated bold_font heading_line msme-heading mb-3 fadeInUpShort slow" data-id='1'>In
                    <span class="vernacular">Vernacular</span> Languages
                </h3>

            </div>
        </div>
    </div>
    <!--owl carousel -->
    <div class="col-12 py-3 px-3 animated animatedParent">
        <div class="d-flex row m-0 animated fadeInUpShort delay-500">
            <div class="col-12 col-md-6 ">
                <img src="assets/images/msme_5.png" class="msme-img w-100" id="msme">
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center pb-5">
                <div class="msmeslider owl-carousel owl-theme">
                    <div class="item">
                        <p class="slide_para">Smt. Nirmala Sitharaman, Honourable Union Minister of Finance and
                            Corporate Affairs launched MSME PRERANA on 6.10.2020</p>
                    </div>
                    <div class="item">
                        <p class="slide_para">Sri Rajendra Kumar Tiwari., Honourable Chief Secretary of Government of
                            Uttar Pradesh launched MSME PRERANA in UP on 30.1.2021</p>
                    </div>
                    <div class="item">
                        <p class="slide_para">Poornatha is proud to join hands with Indian Bank as knowledge partner for
                            MSME PRERANA- Entrepreneurial Training Program</p>
                    </div>
                    <div class="item">
                        <p class="slide_para">MSME PRERANA participants receiving certificate from Indian Bank managers on successful completion of the program</p>
                    </div>
                </div>
                <ul id="owl_dots_manual" class="d-flex align-items-center justify-content-center col-12 p-0 position-absolute b-0 l-0 r-0 mx-auto mt-4"> 
                    <li class="dots list-unstyled"><a href="javascript:void(0)" class="d-block mr-2 active" id="5" data-id="5"></a></li> 
                    <li class="dots list-unstyled"><a href="javascript:void(0)" class="d-block mr-2" id="2" data-id="2"></a></li> 
                    <li class="dots list-unstyled"><a href="javascript:void(0)" class="d-block mr-2" id="3" data-id="3"></a></li> 
                    <li class="dots list-unstyled"><a href="javascript:void(0)" class="d-block mr-2" id="4" data-id="4"></a></li> 
                </ul>
            </div>
        </div>
    </div>
    <!-- program deliverable -->
    <div class="col-12 animated animatedParent py-3">
        <h2 class="my-4 bold_font text-center animated fadeInUpShort delay-900 col-xs-12">Program Deliverables</h2>
    </div>
    <div class="col-12 p-0 p-md-2 container py-2 animated animatedParent">
        <div class="row m-0 px-sm-4 px-xl-5 owl-carousel owl-theme msme_program justify-content-center animated fadeInUpShort delay-900"
            id="program_card">
            <div class="col-md-4 mt-4 col-sm-6 mt-sm-2 py-3 py-md-3 msme-card px-3 px-md-3 px-lg-3 px-xl-5 item">
                <div class="card shadow-sm">
                    <div class="mx-auto mt-5 mb-3">
                        <img src="assets/images/notes.png" class="img" />
                    </div>
                    <div class="card-body m-0">
                        <h5 class="card-title bold_font text-center pb-3 pb-md-5">Handling Your numbers</h5>
                        <span id="read_more" class="d-flex justify-content-center">
                            <a href="javascript:void(0)"
                                class="text-align-center bold_font font-9 text-decor-none readmore position-relative stylish_link ">Read
                                more
                            </a>
                        </span>
                        <div class="overlay">
                            <div class="text">Understanding balance sheet, ratios, income statement, cash
                                flow, woking capital management, receivable and inventory management.</div>
                            <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0 bg-transparent"
                                data-dismiss="overlay" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4 mt-sm-2 py-3 py-md-3 col-sm-6 msme-card px-3 px-md-3 px-lg-3 px-xl-5 item">
                <div class="card shadow-sm">
                    <div class="mx-auto mt-5 mb-3">
                        <img src="assets/images/decision-making.png" class="img" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title bold_font text-center pb-3 pb-md-5">Decision Making </h5>
                        <span class="d-flex justify-content-center" id="read_more">
                            <a href="javascript:void(0)"
                                class="bold_font font-9 text-decor-none readmore position-relative stylish_link">Read
                                more
                            </a>
                        </span>
                        <div class="overlay">
                            <div class="text">Structured decision making skills, stakeholder alignment and communication
                            </div>
                            <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0 bg-transparent"
                                id="close" data-dismiss="overlay" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4 mt-sm-2 py-3 py-md-3  col-sm-6 msme-card px-3 px-md-3 px-lg-3 px-xl-5 item">
                <div class="card shadow-sm">
                    <div class="mx-auto mt-5 mb-3">
                        <img src="assets/images/project-management.png" class="img" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title bold_font text-center pb-3 pb-md-5">Crisis and Change
                            Management</h5>
                        <span class="d-flex justify-content-center" id="read_more">
                            <a href="javascript:void(0)"
                                class="bold_font font-9 text-decor-none readmore position-relative stylish_link">Read
                                more
                            </a>
                        </span>
                        <div class="overlay">
                            <div class="text">Understanding the importance of adapting to change , stages of change and
                                crisis and time leadership.</div>
                            <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0 bg-transparent"
                                id="close" data-dismiss="overlay" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-md-4 mt-4 mt-sm-2 py-3 py-md-3 mt-xl-5 col-sm-6 msme-card px-3 px-md-3 px-lg-3 px-xl-5 item">
                <div class="card shadow-sm">
                    <div class="mx-auto mt-5 mb-3">
                        <img src="assets/images/hr.png" class="img" />
                    </div>
                    <div class="card-body m-0">
                        <h5 class="card-title bold_font text-center pb-3 pb-md-5">People Management</h5>
                        <span class="d-flex justify-content-center" id="read_more">
                            <a href="javascript:void(0)"
                                class="bold_font font-9 text-decor-none readmore position-relative stylish_link">Read
                                more
                            </a>
                        </span>
                        <div class="overlay">
                            <div class="text">Learning to assess, people and GATE framework for handling people.</div>
                            <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0 bg-transparent"
                                id="close" data-dismiss="overlay" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-md-4 mt-4 mt-sm-2 py-3 py-md-3 mt-xl-5 col-sm-6 msme-card px-3 px-md-3 px-lg-3 px-xl-5 item">
                <div class="card shadow-sm">
                    <div class="mx-auto mt-5 mb-3">
                        <img src="assets/images/research.png" class="img" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title bold_font text-center pb-3 pb-md-5">Risk management
                            and Process improvement</h5>
                        <span class="d-flex justify-content-center" id="read_more">
                            <a href="javascript:void(0)"
                                class="bold_font font-9 text-decor-none readmore  position-relative stylish_link">Read
                                more
                            </a>
                        </span>
                        <div class="overlay">
                            <div class="text">Understanding and application of risk management framework, continuous
                                improvement framework (Set A, Set B) and reflective learning technique.</div>
                            <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0 bg-transparent"
                                id="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-md-4 mt-4 mt-sm-2 py-3 py-md-3 mt-xl-5 col-sm-6 msme-card px-3 px-md-3 px-lg-3 px-xl-5 item">
                <div class="card shadow-sm">
                    <div class="mx-auto mt-5 mb-3">
                        <img src="assets/images/smartphone.png" class="img" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title bold_font text-center pb-3 pb-md-5">Ease of doing business and
                            access to credit </h5>
                        <span class="d-flex justify-content-center" id="read_more">
                            <a href="javascript:void(0)"
                                class="bold_font font-9 text-decor-none readmore position-relative stylish_link">Read
                                more
                            </a>
                        </span>
                        <div class="overlay">
                            <div class="text">Understanding MSME
                                registration, banking platforms grievance redressal, due diligence and complaince in
                                banking,
                                credit facilities and significance of rating.</div>
                            <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0 bg-transparent"
                                id="close" data-dismiss="overlay" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction -->
    <div class="col-12 py-2 py-md-5 animated animatedParent">
        <h3 class="text-center semi_bold msme-para animated fadeInUpShort delay-900 px-2 px-md-5">
            MSME PRERANA is an ambitious program in collaboration with Indian Bank to reach 1500 entrepreneurs in
            vernacular languages. It is a well-curated business mentoring and leadership program for MSMEs conducted in
            Indian languages. The program is designed by Poornatha and Michigan Academy for Developing Entrepreneurs
            (MADE), a US-based nonprofit organization for developing entrepreneurship in emerging economies.
        </h3>
    </div>
    <!-- MAP -->
    <div class="col-12 animated animatedParent">
        <div class="py-2 py-md-5 d-flex justify-content-center animated fadeInUpShort delay-900">
            <img src="assets/images/Group51.png" class="map" />
        </div>
    </div>
    <!-- what special -->
    <div class="col-12 animated animatedParent">
        <h2 class="my-5 bold_font text-center animated fadeInUpShort delay-900 col-xs-12">What's Special?</h2>
    </div>
    <div class="col-12 container msme_special_bg p-0 p-md-2 animated animatedParent">
        <div class="row m-0 px-xl-5 justify-content-center owl-carousel owl-theme msme_program animated fadeInUpShort delay-900">

            <div class="col-md-4 px-3 col-sm-6 mt-sm-2 py-3 py-md-3 msme-card px-1 px-md-3 px-lg-3 px-xl-5 item">
                <div class="card shadow-sm">
                    <div class="mx-auto mt-5 mb-3">
                        <img src="assets/images/hand-gesture.png" class="img" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title bold_font text-center pb-3 pb-md-5">Simplified</h5>
                        <span class="d-flex justify-content-center" id="read_more">
                            <a href="javascript:void(0)"
                                class="bold_font font-9 text-decor-none readmore position-relative stylish_link">Read
                                more
                            </a>
                        </span>
                        <div class="overlay">
                            <div class="text">"The content was simplified and easy for anyone to understand. It was
                                delivered with clarity."
                               <p class="name mt-2"> -Mr. Siva, Shubalaya Silks</p>
                                </div>
                                
                            <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0 bg-transparent"
                                data-dismiss="overlay" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-3 col-sm-6 mt-sm-2 py-3 py-md-3  msme-card  px-md-3 px-lg-3 px-xl-5 item">
                <div class="card shadow-sm">
                    <div class="mx-auto mt-5 mb-3">
                        <img src="assets/images/target.png" class="img" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title bold_font text-center pb-3 pb-md-5">Application Oriented</h5>
                        <span class="d-flex justify-content-center" id="read_more">
                            <a href="javascript:void(0)"
                                class="bold_font font-9 text-decor-none readmore position-relative stylish_link">Read
                                more
                            </a>
                        </span>
                        <div class="overlay">
                            <div class="text">"The matrix tool to assess our people was very useful. I realized that 75%
                                of
                                my staff were in the yellow category. I have to work on bringing them to green"
                                <p class="name mt-2"> -Ms. Parimala</div>
                            <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0 bg-transparent"
                                data-dismiss="overlay" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-3 col-sm-6 mt-sm-2 py-3 py-md-3   msme-card  px-md-3 px-lg-3 px-xl-5 item">
                <div class="card shadow-sm">
                    <div class="mx-auto mt-5 mb-3">
                        <img src="assets/images/conversation.png" class="img" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title bold_font text-center pb-3 pb-md-5">Interactive</h5>
                        <span class="d-flex justify-content-center" id="read_more">
                            <a href="javascript:void(0)"
                                class="bold_font font-9 text-decor-none readmore  position-relative stylish_link">Read
                                more
                            </a>
                        </span>
                        <div class="overlay">
                            <div class="text">"The discussion and interactions were very informative. I thank the
                                facilitator for provding instant answers".
                                  <p class="name mt-2">-Mr. Balasubramaniam </p>
                                </div>
                            <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0 bg-transparent"
                                data-dismiss="overlay" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 px-3 col-sm-6 mt-sm-2 py-3 py-md-3 mt-xl-5  msme-card  px-md-3 px-lg-3 px-xl-5 item">
                <div class="card shadow-sm">
                    <div class="mx-auto mt-5 mb-3">
                        <img src="assets/images/Image7.png" class="img" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title bold_font text-center pb-3 pb-md-5">Vernacular</h5>
                        <span class="d-flex justify-content-center" id="read_more">
                            <a href="javascript:void(0)"
                                class="bold_font font-9 text-decor-none readmore  position-relative stylish_link">Read
                                more
                            </a>
                        </span>
                        <div class="overlay">
                            <div class="text">"The program was delivered
                                in the common man's language and was easy to understand"
                             <p class="name mt-2">-Mr. Pankaj Gupta</p>
                              </div>
                            <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0 bg-transparent"
                                data-dismiss="overlay" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-3 col-sm-6 mt-sm-2 py-3 py-md-3 mt-xl-5  msme-card  px-md-3 px-lg-3 px-xl-5 item">
                <div class="card shadow-sm">
                    <div class="mx-auto mt-5 mb-3">
                        <img src="assets/images/medal.png" class="img" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title bold_font text-center pb-3 pb-md-5">Completion Certificate </h5>
                        <span class="d-flex justify-content-center" id="read_more">
                            <a href="javascript:void(0)"
                                class="bold_font font-9 text-decor-none readmore  position-relative stylish_link">Read
                                more
                            </a>
                        </span>
                        <div class="overlay">
                            <div class="text">"On completion , participants will be issued a certificate jointly by
                                MADE,
                                Poornatha and Indian Bank"
                              <p class="mt-4 entreprenur"> <a href="https://madeentrepreneur.org/" class="text-white">Made Entrepreneur</a></p></div>
                            <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0 bg-transparent"
                                data-dismiss="overlay" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- register form -->
    <div class="col-12 px-4 px-md-5 py-4 mt-2 mt-md-4 animated animatedParent" id="interest_form">
        <div class="shadow-sm container mt-4  animated fadeInUpShort delay-900">
            <div class="d-flex  justify-content-center bold_font py-3 ">
                <h3>Who is it for?</h3>
            </div>
            <div class="d-flex row py-2 py-md-4">
                <div class="col-md-6">
                    <h3 class="px-2 px-md-4  px-lg-5 form-text">The program is targeted at growth-oriented
                        entrepreneurs who wants to cultivate a
                        professional attitude understand
                        business numbers and build resilience
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0)"
                                class="bold_font font-9 text-decor-none readmore position-relative stylish_link"
                                data-toggle="modal" data-target="#form_apply">Click here for brochure
                            </a>
                        </div>
                    </h3>
                </div>
                <div class="col-md-6 mt-2 mt-lg-0">
                    <div class=" mw-500">
                        <div class="row mx-0 px-2 px-md-4 px-lg-5 px-xl-0">
                            <div class="form-group w-100 position-relative pb-4">
                                <input autocomplete="off" id="name" name="name" type="text"
                                    class="form-control validate py-3 outline-0 border-top-0 border-left-0 rounded-0 px-0 border-right-0 z-depth-0"
                                    required>
                                <label for="name"
                                    class="form-control-placeholder font-9 primary-text-color bold_font z-index1">Name</label>
                            </div>
                            <div class="form-group w-100 position-relative pb-4">
                                <input autocomplete="off" id="company" name="company" type="text"
                                    class="form-control validate py-3 outline-0 border-top-0 border-left-0 rounded-0 px-0 border-right-0 z-depth-0"
                                    required>
                                <label for="company"
                                    class="form-control-placeholder font-9 primary-text-color bold_font z-index1">Organization/company</label>
                            </div>
                            <div class="form-group w-100 position-relative pb-4">
                                <input autocomplete="off" id="contact" name="contact" type="text"
                                    class="form-control validate py-3 outline-0 border-top-0 border-left-0 rounded-0 px-0 border-right-0 z-depth-0"
                                    required>
                                <label for="contact"
                                    class="form-control-placeholder font-9 primary-text-color bold_font z-index1">Contact
                                    no
                                </label>
                            </div>
                            <div class="form-group w-100 position-relative pb-4">
                                <input autocomplete="off" id="email" name="email" type="text"
                                    class="form-control validate py-3 outline-0 border-top-0 border-left-0 rounded-0 px-0 border-right-0 z-depth-0"
                                    required>
                                <label for="email"
                                    class="form-control-placeholder font-9  primary-text-color bold_font z-index1">Email</label>
                            </div>

                            <a href="javascript:void(0)"
                                class="bg-primary semi_bold_font mx-auto text-decor-none py-3 px-5 radius_30 send_message text-white text-uppercase">Apply Now</a>
                        </div><span id="snackbar" class=""></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ section -->
    <div class="col-12 p-0 py-3">
        <div class="faq py-2 animated animatedParent">
            <div class="col-12">
                <h2 class="my-4 bold_font text-center animated fadeInUpShort delay-900 col-xs-12">Frequently Asked Questions (FAQ)
                </h2>
            </div>
            <div class="container demo animated fadeInUpShort delay-900">
                <div class="panel-group row m-0 justify-content-center" id="accordion" role="tablist"
                    aria-multiselectable="true">
                    <div class="panel panel-default  col-md-6 py-2">
                        <div class="panel-heading shadow-sm" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne"
                                    class="bold_font d-flex align-items-center py-5">
                                    <span class="w-100">Is this an Online Program?</span>
                                    <i class="more-less fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </h4>

                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body px-3 pb-5">
                                    Yes, it is a web based interactive traning program (Conducted on WebEx). </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default  col-md-6 py-2">
                        <div class="panel-heading shadow-sm" role="tab" id="headingOne">
                            <h4 class="panel-title bold-font">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo"
                                    aria-expanded="true" aria-controls="collapseOne"
                                    class="bold_font d-flex align-items-center py-5">
                                    <span class="w-100"> What is the duration of the program?</span>
                                    <i class="more-less fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </h4>

                            <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body px-3 pb-5">
                                    It is a 15-hour program conducted over 2 weeks.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default  col-md-6 py-2">
                        <div class="panel-heading shadow-sm" role="tab" id="headingOne">
                            <h4 class="panel-title bold-font">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethree"
                                    aria-expanded="true" aria-controls="collapseOne"
                                    class="bold_font d-flex align-items-center py-5">
                                    <span class="w-100"> What is the cost of the program?</span>
                                    <i class="more-less fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </h4>

                            <div id="collapsethree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body px-3 pb-5">
                                    The program is free for women, SC & ST entrepreneurs banking with Indian bank and
                                    for other customers it is subsidized by Indian Bank. Please contact your branch
                                    manager for further details.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default  col-md-6 py-2">
                        <div class="panel-heading shadow-sm" role="tab" id="headingOne">
                            <h4 class="panel-title bold-font">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour"
                                    aria-expanded="true" aria-controls="collapseOne"
                                    class="bold_font d-flex align-items-center py-5">

                                    <span class="w-100"> How is it different from other programs?</span>
                                    <i class="more-less fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </h4>

                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body px-3 pb-5">
                                    MSME PRERANA follows SIP(Simple, Interactive, Practical)approach. Use of local
                                    languages makes it easily understandable.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default  col-md-6 py-2">
                        <div class="panel-heading shadow-sm" role="tab" id="headingOne">
                            <h4 class="panel-title bold-font">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive"
                                    aria-expanded="true" aria-controls="collapseOne"
                                    class="bold_font d-flex align-items-center py-5">

                                    <span class="w-100"> What language is the program conducted in?</span>
                                    <i class="more-less fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </h4>

                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body px-3 pb-5">
                                    The program is conducted in Local Languages
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default  col-md-6 py-2">
                        <div class="panel-heading shadow-sm" role="tab" id="headingOne">
                            <h4 class="panel-title bold-font">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix"
                                    aria-expanded="true" aria-controls="collapseOne"
                                    class="bold_font d-flex align-items-center py-5">

                                    <span class="w-100"> How to apply?</span>
                                    <i class="more-less fa fa-plus" aria-hidden="true"></i>

                                </a>
                            </h4>

                            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne">

                                <div class="panel-body px-3 pb-5">
                                    Interested entrepreneurs may please <a class="interestform"
                                        href="#interest_form">click
                                        here.</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default shadow-sm col-md-6 py-2">
                        <div class="panel-heading shadow-sm" role="tab" id="headingOne">
                            <h4 class="panel-title bold-font">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven"
                                    aria-expanded="true" aria-controls="collapseOne"
                                    class="bold_font d-flex align-items-center w-100 py-5">

                                    <span class="w-100"> Can Employees attend this program?</span>
                                    <i class="more-less fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </h4>

                            <div id="collapseseven" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body px-3 pb-5">
                                    No, this program is designed for entrepreneurs. If you think your employers might
                                    benefit from this program, Please do share it with them.
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- panel-group -->
            </div><!-- container -->
        </div>
    </div>
    <!--media section -->
    <div class="col-12 animated animatedParent p-0">
        <div class="container p-0">
            <div class="col-12 my-3 delay-900 animated fadeInUpShort">
                <h2 class="bold_font text-center mb-3">Media</h2>
            </div>
            <div class="row m-0 align-items-center msme_program owl-carousel owl-theme m-h-280 delay-900 animated fadeInUpShort">
                <div class="col-md-3 col-sm-6 mt-sm-2 text-center item">
                    <div class="card shadow-sm">
                        <div class="mx-auto mt-5 mb-3">
                            <img src="{{url('assets/images/Image9.png')}}" class="mw-msme" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title bold_font text-center">THE HINDU</h5>
                            <span class="d-flex justify-content-center">
                                <a href="https://www.thehindu.com/business/indian-bank-unveils-programme-for-msme-entrepreneurs/article32785423.ece"
                                    class="bold_font font-9 text-decor-none readmore position-relative stylish_link">Read
                                    more
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-sm-2 text-center item">
                    <div class="card shadow-sm">
                        <div class="mx-auto mt-5 mb-3">
                            <img src="{{url('assets/images/Image10.png')}}" class="mw-msme" />
                        </div>
                        <div class="card-body m-0">
                            <h5 class="card-title bold_font text-center">FINANCIAL EXPRESS</h5>
                            <span class="d-flex justify-content-center">
                                <a href="https://www.financialexpress.com/industry/sme/msme-prerana-nirmala-sitharaman-launches-indian-banks-business-mentoring-programme-for-msmes/2099614/"
                                    class="bold_font font-9 text-decor-none readmore position-relative stylish_link">Read
                                    more
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  col-sm-6 mt-sm-4 text-center item">
                    <div class="card shadow-sm">
                        <div class="mx-auto mt-5 mb-3">
                            <img src="{{url('assets/images/Image11.png')}}" class="mw-msme" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title bold_font text-center">INDIAN EXPRESS</h5>
                            <span class="d-flex justify-content-center">
                                <a href="https://www.newindianexpress.com/states/tamil-nadu/2020/nov/20/indian-bank-empowers-more-entrepreneurs-2225623.html "
                                    class="bold_font font-9 text-decor-none readmore position-relative stylish_link">Read
                                    more
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-sm-4 text-center item">
                    <div class="card shadow-sm">
                        <div class="mx-auto mt-5 mb-3">
                            <img src="{{url('assets/images/Image12.png')}}" class="mw-msme" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title bold_font text-center">YOUR STORY</h5>
                            <span class="d-flex justify-content-center">
                                <a href="https://yourstory.com/smbstory/fm-msmes-prerana-mentoring-programme-indian-bank"
                                    class="bold_font font-9 text-decor-none readmore position-relative stylish_link">Read
                                    more
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--youtube section -->
    <div class="col-12 animatedParent">
        <h2 class="my-3 bold_font text-center animated fadeInUpShort dely-400 col-xs-12">YouTube Videos</h2>
    </div>
    <div class="col-12 p-0">
        <div class=" animated animatedParent py-3 pb-md-4">
            <div class="row m-0 align-items-center youtubeslider owl-carousel owl-theme m-h-280 animated fadeInUpShort delay-900">
                <div class="px-2 px-md-2 px-lg-3 mt-sm-2 text-center item ">
                    <iframe height="250" src="https://www.youtube.com/embed/Oq80J4xvVwE" allowfullscreen="allowfullscreen" class="mw-youtube">
                    </iframe>
                </div>
                <div class="px-2 px-md-2 px-lg-3 mt-sm-2 text-center item">
                    <div>
                        <div class="my-2">
                            <iframe height="250" src="https://www.youtube.com/embed/4HZxPdNbwEc" allowfullscreen="allowfullscreen" class="mw-youtube">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="px-2 px-md-2 px-lg-3 mt-sm-2 text-center item">
                    <div>
                        <div class="my-2">
                            <iframe height="250" src="https://www.youtube.com/embed/wLloZ5GELqg" allowfullscreen="allowfullscreen" class="mw-youtube">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="px-2 px-md-2 px-lg-3 mt-sm-2 text-center item">
                    <div>
                        <div class="my-2">
                            <iframe height="250" src=" https://www.youtube.com/embed/BABY18E4LlM" allowfullscreen="allowfullscreen" class="mw-youtube">
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="px-2 px-md-2 px-lg-3 mt-sm-2 text-center item">
                    <div>
                        <div class="my-2">
                            <iframe height="250" src="https://www.youtube.com/embed/XnXkH_9iCME" allowfullscreen="allowfullscreen" class="mw-youtube">
                            </iframe>
                        </div>

                    </div>
                </div>

                <div class="px-2 px-md-2 px-lg-3 mt-sm-2 text-center item">
                    <div>
                        <div class="my-2">
                            <iframe height="250" src="https://www.youtube.com/embed/WxO7MVqk_vs" allowfullscreen="allowfullscreen" class="mw-youtube">
                            </iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->

    <div class="modal fade" id="form_apply" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="vl"></div>
                <div class="vl2"></div>
                <div class="vl3"></div>
                <div class="modal-body text-center p-5 d-flex brocher_anchor">
                    <h4 class="bold_font mx-md-3 shadow-sm zoom">
                        <a href="assets/images/msme_tamil.pdf" class="brocher" > MSME Tamil Brouchure </a>
                    </h4>
                    <h4 class="bold_font mx-md-3 shadow-sm zoom mt-4 mt-lg-0">
                        <a href="assets/images/msme_english.pdf" class="brocher"> MSME English Brouchure </a>
                    </h4>
                    <h4 class="bold_font mx-md-3 shadow-sm zoom mt-4 mt-lg-0">
                        <a href="assets/images/msme_hindi.pdf" class="brocher"> MSME Hindi Brouchure </a>
                            </h4>
                   
                    <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                   <h4 class="bold_font mx-auto justify-content-center download_brochure">
                        Click above for download Brouchure
                    </h4>               
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
</div>


@include('includes.footer')
@endsection