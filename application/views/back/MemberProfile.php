<script type="text/javascript">
  var member_id = <?php echo $this->uri->segment(3); ?>
</script>
<!-- CONTENT -->
<section id="content" ng-controller="CtrlMemberProfile">
    <div class="page dashboard-page">

        <!-- bradcome -->
        <div class="bg-light lter b-b wrapper-md mb-10">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h1 class="font-thin h3 m-0">Member Detail</h1>
                    <small class="text-muted">Welcome to Oakleaf application</small> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <section class="boxs">
                    <div class="boxs-header dvd dvd-btm">
                        <h1 class="custom-font">Profile</h1>
                    </div>
                    <div class="boxs-body" >
                        <table class="table table-striped table-hover">
                          <tbody ng-repeat="row in memberProfile">
                            <tr>
                              <td style="text-align: right" width = "30%">ID : </td>
                              <td>{{row.member_id}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">Name : </td>
                              <td>{{row.member_prefix}}{{row.member_firstname}} {{row.member_lastname}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">Sex : </td>
                              <td>{{row.member_sex}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">Address : </td>
                              <td>{{row.member_address}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">Alley : </td>
                              <td>{{row.member_alley}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">Street : </td>
                              <td>{{row.member_street}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">Sub District : </td>
                              <td>{{row.subdistrict_name}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">District : </td>
                              <td>{{row.district_name}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">Province : </td>
                              <td>{{row.province_name}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">Zipcode : </td>
                              <td>{{row.zipcode}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">Tel : </td>
                              <td>{{row.member_tel}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">Email : </td>
                              <td>{{row.member_email}}</td>
                            </tr>
                            <tr>
                              <td style="text-align: right">Type : </td>
                              <td>{{row.member_type_name}}</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <div class="col-md-6 col-xs-6">
                <section class="boxs">
                    <div class="boxs-header dvd dvd-btm">
                        <h1 class="custom-font">Course Name : zzz</h1>
                    </div>
                    <div class="boxs-body" >
                        <table class="table table-striped table-hover">
                          <tbody ng-repeat="row in memberProfile">
                            <tr>
                              <td style="text-align: right" width = "30%">ID : </td>
                              <td></td>
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
