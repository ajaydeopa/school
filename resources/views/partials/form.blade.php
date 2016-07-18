@extends('layout.app1') @section('content')
<section>
    <div class="section-body">

        <div class="card">
            <div class="card-header" style="background-color:#4986E7;">
                <span class="c-white f-18">Add New Item</span><span class="c-white f-12 pull-right">Fill Details</span>
            </div>
            <br>
            <div class="card-body card-padding">
                <!-- -->
                <div id="rootwizard">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class="container">
                                <ul >
                                    <li><a href="#tab1" data-toggle="tab">Personal</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Parents</a></li>
                                    <li ><a href="#tab3" data-toggle="tab">Academic</a></li>
                                    <li ><a href="#tab4" data-toggle="tab">Users</a></li>

                                </ul>
                                <div id="bar" class="progress progress-striped active">
                        <div class="bar"></div>
                    </div>
                        </div>
                    </div>

                    {{ Form::open() }}
                    <div class="tab-content">
                        <!--tab1 Personal-->
                        <div class="tab-pane" id="tab1">

                            <!--Name -->
                            <div class="row m-b-10 ">
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="First Name" name="first_name">
                                        </div>
                                        <strong id="error-first_name" style="padding-left: 40px"></strong>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Middle Name" name="middle_name">
                                        </div>
                                        <strong id="error-middle_name" style="padding-left: 40px"></strong>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                                        </div>
                                        <strong id="error-last_name" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                            </div>
                            <!--Name -->
                            <div class="row m-b-10 ">
                                <!--Gender -->
                                <div class="col-sm-4">

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i></span>
                                        <div class="fg-line">
                                            <div class="select input-group-addon">

                                                <select class="form-control" name="gender">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>

                                                </select>
                                            </div>
                                        </div>

                                        <strong id="error-gender" style="padding-left: 40px"></strong>
                                    </div>
                                    <!--Gender-->
                                </div>

                                <!--Dob-->
                                <div class="col-sm-4">
                                    <div class="input-group form-group">

                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>

                                        <div class="dtp-container fg-line">
                                            <input type="text" class="form-control date-picker" name="date_of_birth" placeholder="Dob...">
                                        </div>
                                        <strong id="error-date_of_birth" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                                <!--Dob-->


                                <!--category-->
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi zmdi-view-column"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Category" name="category">
                                        </div>
                                        <strong id="error-category" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                                <!--category-->




                            </div>

                            <div class="row m-b-10 ">

                                <!--Nationality-->
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-local-mall zmdi-hc-fw"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Nationality" name="nationality">
                                        </div>
                                        <strong id="error-nationality" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                                <!--Nationality-->

                                <!--Birth Place-->

                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-money zmdi-hc-fw"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Birth Place" name="birth_place">
                                        </div>
                                        <strong id="error-birth_place" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                                <!--Birth Place-->
                                <!--Mother Tongue-->
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi zmdi-assignment"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Mother Tongue" name="mother_tongue">
                                        </div>
                                        <strong id="error-mother_tongue" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                                <!--Mother Tongue-->
                            </div>

                            <div class="row m-b-10 ">
                                <!--Blood-->
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i></span>
                                        <div class="fg-line">
                                            <div class="select input-group-addon">
                                                <select class="form-control" name="blood_group">
                                                    <option vlaue="default">Blood group</option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                </select>
                                            </div>
                                        </div>

                                        <strong id="error-blood_group" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                                <!--Blood-->

                                <!--Religion-->
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-money zmdi-hc-fw"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Religion" name="religion">
                                        </div>
                                        <strong id="error-religion" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                                <!--Religion-->
                                <!--Phone no-->


                                <div class="col-sm-4">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi zmdi-assignment"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-mask" data-mask="000-00-0000000" placeholder="Phone no." name="phone_no" maxlength="10" autocomplete="off">
                                        </div>
                                        <strong id="error-phone_no" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                                <!--Phone no-->

                            </div>

                            <!-- Address-->
                            <div class="row m-b-10 ">
                                <div class="input-group  ">
                                    <span class="input-group-addon"><i class="zmdi zmdi-home zmdi-hc-fw"></i></span>
                                    <div class="fg-line">
                                        <textarea class="form-control " placeholder="Residential Address...." name="residential_addr" rows="3" data-autosize-on="true" style="overflow: hidden; word-wrap: break-word"></textarea>
                                    </div>
                                    <strong id="error-residential_addr" style="padding-left: 40px"></strong>
                                </div>

                                <div class="input-group  ">
                                    <span class="input-group-addon"><i class="zmdi zmdi-home zmdi-hc-fw"></i></span>
                                    <div class="fg-line">
                                        <textarea class="form-control " placeholder="Permanent Address...." name="permanent_addr" rows="3" data-autosize-on="true" style="overflow: hidden; word-wrap: break-word"></textarea>
                                    </div>
                                    <strong id="error-permanent_addr" style="padding-left: 40px"></strong>
                                </div>
                            </div>
                            <!-- Address-->

                        </div>
                        <!--tab1 -->

                        <!--tab2 Parents-->
                        <div class="tab-pane" id="tab2">
                             </div>
                        <!--tab2 -->

                        <!--tab3 Academic -->
                        <div class="tab-pane" id="tab3">
                            <div class="row m-b-10 ">
                                <!--Joining date-->
                                <div class="col-sm-4">
                                    <div class="input-group form-group">

                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>

                                        <div class="dtp-container fg-line">
                                            <input type="text" class="form-control date-picker" placeholder="Joining date" name="joining_date">
                                        </div>
                                        <strong id="error-joining_date" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                                <!--Joining date-->
                                <!--class-->
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-money zmdi-hc-fw"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Class" name="class">
                                        </div>
                                        <strong id="error-class" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                                <!--class-->
                                <!--Section-->
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi zmdi-assignment"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Section" name="section">
                                        </div>
                                        <strong id="error-section" style="padding-left: 40px"></strong>
                                    </div>
                                </div>
                                <!--Section-->
                            </div>

                        </div>
                        <!--tab3 -->
                        <!--tab4 Users-->
                        <div class="tab-pane" id="tab4">

                            <div class="row m-b-10 ">
                                <!--Email-->
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-widgets"></i></span>
                                    <div class="fg-line">
                                        <input type="text" class="form-control" placeholder="Email" name="email">
                                    </div>
                                    <strong id="error-email" style="padding-left: 40px"></strong>
                                </div>
                                <!--Email-->
                            </div>
                            <div class="input-group m-b-10 ">
                                <span class="input-group-addon"><i class="zmdi zmdi-widgets"></i></span>
                                <div class="fg-line">
                                    <input type="file" class="form-control" name="profile_pic">
                                </div>
                                <strong id="error-profile_pic" style="padding-left: 40px"></strong>
                            </div>

                            <!-- button -->
                            <div class="input-group m-b-20 pull-right" >
                                <button class="btn bgm-cyan waves-effect" type="submit">Submit</button>
                            </div>

                        </div>
                        <!--tab4 -->
              <div class=" m-t-20">
                        <ul class="pager wizard m-t-20 " style="float:right">

                            <li class="previous" style="padding-right:1px;"><a href="#" style="border-radius: 0px; border:none; " class="btn bgm-cyan waves-effect">Previous</a></li>

                            <li class="next"><a href="#" style="border-radius: 0px; border:none; " class="btn bgm-cyan waves-effect">Next</a></li>
                        </ul>
                  </div>
                    </div>
                    {{ Form::close() }}
                </div>



            </div>
        </div>
    </div>
</section>
@endsection @section('page_footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.js"></script>
<script>
    $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#rootwizard').find('.bar').css({
                    width: $percent + '%'
                });
                $('li').click(function(tab, navigation, index) {
                    return false;
                });
            }
        });
    });
</script>
@endsection
