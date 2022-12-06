<div>
    <div class="row">
        <div class="card @if(Auth::User()->project_id == 0) col-lg-8 @endif col-md-12">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Project Details</h6>
                    </div>
                    <div class="">
                        <div class="addnew">
                            <a href="/editproject/{{$project->id}}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/insert_new_project" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""
                            >Project (Client) Name
                        </label>
                        <input
                            type="text"
                            name="cname"
                            id="cname"
                            class="form-control"
                            disabled
                            value="{{$project->name}}"
                        />
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Address </label
                        >
                        <input
                            type="text"
                            name="caddress"
                            id="caddress"
                            class="form-control"
                            disabled
                            value="{{$project->address}}"
                        />
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label for=""
                                >Postal Code </label
                            >
                            <input
                                type="text"
                                name="cpostalcode"
                                id="cpostalcode"
                                class="form-control"
                                disabled
                                value="{{$project->postal_code}}"
                            />
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for=""
                                >Registration number of department (BR Number)
                                </label
                            >
                            <input
                                type="text"
                                name="cbrnumber"
                                id="cbrnumber"
                                class="form-control"
                                disabled
                                value="{{$project->br_number}}"
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 form-group">
                            <label for=""
                                >Telephone Number One
                                </label
                            >
                            <input
                                type="text"
                                name="cphone1"
                                id="cphone1"
                                class="form-control"
                                disabled
                                value="{{$project->phone1}}"
                            />
                        </div>
                        <div class="col-lg-3 form-group">
                            <label for="">Telephone Number Two</label>
                            <input
                                type="text"
                                name="cphone2"
                                id="cphone2"
                                class="form-control"
                                disabled
                                value="{{$project->phone2}}"
                            />
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for=""
                                >Email Address
                                </label
                            >
                            <input
                                type="email"
                                name="cemail"
                                id="cemail"
                                class="form-control"
                                disabled
                                value="{{$project->email}}"
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 form-group">
                            <label for=""
                                >Connectionn Type
                                </label
                            >
                            <input
                                type="email"
                                name="cemail"
                                id="cemail"
                                class="form-control"
                                disabled
                                value="{{$project->connection_type}}"
                            />
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for=""
                                >Packages </label
                            >
                            <input
                                type="email"
                                name="cemail"
                                id="cemail"
                                class="form-control"
                                disabled
                                value="{{$project->package}}"
                            />
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for=""
                                >Authorized Officer
                                </label
                            >
                            <input
                                type="email"
                                name="cemail"
                                id="cemail"
                                class="form-control"
                                disabled
                                value="{{$project->authorized_officer}}"
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label for=""
                                >Authorized Officer's Name
                                </label
                            >	
                            <input
                                type="text"
                                name="cauthofficername"
                                id="authofficername"
                                class="form-control"
                                disabled
                                value="{{$project->officer_name}}"
                            />
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for=""
                                >Authorized Officer's NIC
                                </label
                            >
                            <input
                                type="text"
                                name="cauthofficernic"
                                id="authofficernic"
                                class="form-control"
                                disabled
                                value="{{$project->officer_nic}}"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Account Balance</label>
                        <input
                            type="text"
                            name="cacbalance"
                            id="cacbalance"
                            class="form-control"
                            disabled
                            value="{{$project->ac_blance}}"
                        />
                    </div>
                </form>
            </div>
        </div>
        @if(Auth::User()->project_id == 0)
        <div class="card col-lg-3 col-md-12 right-box">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Attach Users</h6>
                    </div>
                    <div class="">
                        <div class="addnew">
                            <a href="/attachuser/{{$project->id}}" class="btn btn-success"> Add Users</a>
                        </div>
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
        @endif
    </div>

</div>
