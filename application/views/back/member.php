    <!-- CONTENT -->
    <section id="content" ng-controller="CtrlMember">
        <div class="page dashboard-page">

            <!-- bradcome -->
            <div class="bg-light lter b-b wrapper-md mb-10">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="font-thin h3 m-0">Member</h1>
                        <small class="text-muted">Welcome to Oakleaf application</small> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <section class="boxs">
                        <div class="boxs-header dvd dvd-btm">

                            <h1 class="custom-font">Title</h1>
                        </div>
                        <!-- <div class="boxs-body"> -->
                        <div class="boxs-body" >
                            <a class="btn btn-raised btn-primary" href="<?php echo site_url('/Member/MemberForm'); ?>">เพิ่ม</a>

                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>member_id</th>
                                <th>member_firstname</th>
                                <th>member_lastname</th>
                                <th>detail</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr ng-repeat="row in allMember" valign="middle">
                                <td>{{row.member_id}}</td>
                                <td>{{row.member_firstname}}</td>
                                <td>{{row.member_lastname}}</td>
                                <td><a href="<?php echo site_url('/Member/MemberProfile/'.'{{row.member_id}}') ?>" class="btn btn-raised btn-info btn-sm">info</a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--/ CONTENT -->
