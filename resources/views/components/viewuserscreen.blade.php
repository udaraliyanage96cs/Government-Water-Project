<div>
    <div class="card">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>View User</h6>
                    <h5>{{$projectName}}</h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-lg-2 form-group">
                   <div class="imgbox">
                       <img src="/uploads/dp/{{$user->project_id}}/{{$user->propic}}" alt="">
                   </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 form-group">
                        <label for=""
                            >Salutation
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="uname"
                            id="uname"
                            class="form-control"
                            value="{{$user->salutation}}"
                            disabled
                        />
                    </div>
                    <div class="col-lg-10 form-group">
                        <label for=""
                            >User's Full Name
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="uname"
                            id="uname"
                            value='{{$user->name}}'
                            class="form-control"
                            disabled
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 form-group">
                        <label for=""
                            >Permission Group
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="uname"
                            id="uname"
                            value="{{$user->user_roll_id}}"
                            class="form-control"
                            disabled
                        />
                    </div>
                    <div class="col-lg-10 form-group">
                        <label for=""
                            >Position Of Employment
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="ujob"
                            id="ujob"
                            class="form-control"
                            disabled
                            value="{{$user->job}}"
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 form-group">
                        <label for=""
                            >Mobile Number One
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="uphone1"
                            id="uphone1"
                            class="form-control"
                            value="{{$user->phone1}}"
                            disabled
                        />
                    </div>
                    <div class="col-lg-4 form-group">
                        <label for=""
                            >Mobile Number Two <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="uphone2"
                            id="uphone2"
                            value='{{$user->phone2}}'
                            class="form-control"
                            disabled
                        />
                    </div>
                    <div class="col-lg-4 form-group">
                        <label for=""
                            >Fixed Line
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="uphonefixed"
                            id="uphonefixed"
                            class="form-control"
                            disabled
                            value="{{$user->phonefixed}}"
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 form-group">
                        <label for=""
                            >Email Address
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="email"
                            name="uemail"
                            id="uemail"
                            class="form-control"
                            disabled
                            value="{{$user->email}}"
                        />
                    </div>
                    <div class="col-lg-4 form-group">
                        <label for=""
                            >User Name <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="uusersname"
                            id="uusersname"
                            class="form-control"
                            value="{{$user->username}}"
                            disabled
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 form-group">
                        <label for=""
                            >NIC Number
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="unic"
                            id="unic"
                            class="form-control"
                            value="{{$user->nic}}"
                            disabled
                        />
                    </div>
                    <div class="col-lg-4 form-group">
                        <label for=""
                            >Address
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="uaddress"
                            id="uaddress"
                            value="{{$user->address}}"
                            class="form-control"
                            disabled
                        />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
