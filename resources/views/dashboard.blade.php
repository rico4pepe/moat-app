@extends('layouts.layout')



        <!--PAGE CONTENT -->

        @section('content')
        @if (Auth::check() &&  !auth()->user()->name === 'Admin')
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Student Dashboard </h1>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: center;">

                            <a class="quick-btn" href="">
                                <i class="icon-external-link icon-2x"></i>
                                <span>  View / Edit Profile</span>

                            </a>

                            <a class="quick-btn" href="">
                                <i class="icon-external-link icon-2x"></i>
                                <span>Submit Project</span>

                            </a>
                    @elseif ()

                    <div class="row">
                        <div class="col-lg-12">
                            <h1> Student Dashboard </h1>
                        </div>
                    </div>
                      <hr />
                     <!--BLOCK SECTION -->
                     <div class="row">
                        <div class="col-lg-12">
                            <div style="text-align: center;">

                                <a class="quick-btn" href="/sessions">
                                    <i class="icon-external-link icon-2x"></i>
                                    <span>  View Users</span>

                                </a>

                                <a class="quick-btn" href="">
                                    <i class="icon-external-link icon-2x"></i>
                                    <span>View All Approved Project</span>


                  @endif






                        </div>

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                   <!-- CHART & CHAT  SECTION -->

                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->

                <!-- END COMMENT AND NOTIFICATION  SECTION -->




                 <!--  STACKING CHART  SECTION   -->

                 <!--END STACKING CHART SCETION  -->

                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->

                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->





        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->







        </div>
         <!-- END RIGHT STRIP  SECTION -->
    </div>
    @endsection
    <!--END MAIN WRAPPER -->

