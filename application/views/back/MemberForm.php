<!-- CONTENT -->
<section id="content" ng-controller="CtrlMemberForm">
    <div class="page dashboard-page">

        <!-- bradcome -->
        <div class="bg-light lter b-b wrapper-md mb-10">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h1 class="font-thin h3 m-0">Member</h1>
                    <small class="text-muted">เพิ่มสมาชิกใหม่</small> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <section class="boxs">
                        <div class="boxs-header dvd dvd-btm">
                            <h1 class="custom-font"><strong>แบบฟอร์ม </strong>เพิ่มสมาชิกใหม่</h1>
                        </div>
                        <div class="boxs-body">
                            <form class="form-inline" novalidate ng-submit="FormSubmit()">
                                <div class="form-group is-empty">
                                    <label class="sr-only" for="">ชื่อผู้ใช้งาน</label>
                                    <input type="text" class="form-control" ng-model="MemberObject.admin_username" placeholder="User Name">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="sr-only" for="">รหัสผ่าน</label>
                                    <input type="password" class="form-control" ng-model="MemberObject.admin_password" placeholder="Password">
                                    <span class="material-input"></span>
                                </div>
                                <button type="submit" class="btn btn-raised btn-primary">เพิ่ม</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--/ CONTENT -->
