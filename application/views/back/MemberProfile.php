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
            <div class="col-md-12 col-xs-12">
                <section class="boxs">
                    <div class="boxs-header dvd dvd-btm">
                        <h1 class="custom-font">{{memberProfile.member_firstname}}</h1>
                    </div>
                    <div class="boxs-body" >
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>member_id</th>
                            <th>member_firstname</th>
                            <th>member_lastname</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr ng-repeat="row in memberProfile">
                            <td>{{row.member_id}}</td>
                            <td>{{row.member_firstname}}</td>
                            <td>{{row.member_lastname}}</td>
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
