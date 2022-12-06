<div>
    <div class="row">
        <div class="card col-lg-8">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Attach User To Projects</h6>
                        <h5>{{$pojectname}}</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/addahuser/{{$pojectid}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-2 form-group">
                            <label for=""
                                >Salutation
                                <span class="red_star">*</span></label
                            >
                            <select
                                name="usalutation"
                                id="usalutation"
                                class="form-control"
                            >
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                                <option value="Rev">Rev</option>
                                <option value="Other">Other</option>
                            </select>
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
                                class="form-control"
                                required
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 form-group">
                            <label for=""
                                >Permission Group
                                <span class="red_star">*</span></label
                            >
                            <select
                                name="uuseroll"
                                id="uuseroll"
                                class="form-control"
                            >
                                <option value="0">Reader</option>
                                <option value="1">Agent</option>
                                <option value="2">Clerk</option>
                                <option value="3">Cashier</option>
                                <option value="4">Admin</option>
                                <option value="5">Operator</option>
                                <option value="6">Internal Visitor</option>
                                <option value="7">Department Visitor</option>
                            </select>
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
                                required
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
                                required
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
                                class="form-control"
                                required
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
                                required
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
                                required
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
                                required
                            />
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for=""
                                >Default Password
                                <span class="red_star">*</span></label
                            >
                            <input
                                type="text"
                                name="upassword"
                                id="upassword"
                                class="form-control"
                                required
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 form-group">
                            <label for=""
                                >Display Photo
                                </label
                            >
                            <input
                                type="file"
                                name="file"
                                id="file"
                                class="form-control"
                                required
                            />
                        </div>
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
                                required
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
                                class="form-control"
                                required
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <input
                            type="submit"
                            name="submit"
                            id="submit"
                            class="btn bg-gradient-primary"
                            value="save"
                        />
                    </div>
                </form>
            </div>
        </div>
        <div class="card col-lg-3 col-md-12 right-box">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Attached Users</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table align-items-center mb-0" id="table">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">View</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                            @if($users)
                                @foreach($users as $user)
                                    <tr class="trow">
                                        <td>{{$user->username}}</td>
                                        <td><a href="/viewuser/{{$user->id}}" class=""><i class="material-icons ">visibility</i></a></td>
                                        <td><a href="/removeuser/{{$user->id}}" class=""><i class="material-icons">remove_circle_rounded</i></a></td>
                                    </tr>
                                @endforeach
                            @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
