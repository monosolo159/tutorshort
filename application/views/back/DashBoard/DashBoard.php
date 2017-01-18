<!-- CONTENT -->
<section id="content" ng-app="AppProvince">
    <div class="page dashboard-page">

        <!-- bradcome -->
        <div class="bg-light lter b-b wrapper-md mb-10">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h1 class="font-thin h3 m-0">Dashboard</h1>
                    <small class="text-muted">Welcome to Oakleaf application</small> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <section class="boxs">
                    <div class="boxs-header dvd dvd-btm">
                        <h1 class="custom-font">Title</h1>
                    </div>
                    <div class="boxs-body" ng-controller="CtrlProvince">
                      <select class="" name="" >
                        <option ng-repeat="row in allProvince" value="{{row.prov_id}}">{{row.prov_name}}</option>
                      </select>

                        <table>
                          <thead>
                            <tr>
                              <td>prov_id</td>
                              <td>prov_name</td>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- <tr ng-repeat="row in allProvince">
                              <td>{{row.prov_id}}</td>
                              <td>{{row.prov_name}}</td>
                            </tr> -->
                          </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!--/ CONTENT -->
