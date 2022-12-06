<div>
   
    <div class="row ">
        <h5>Address Settings</h5>
        <div class="card col-lg-3">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Post Office Settings</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/addpostoffice" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""
                            >Post Office Name
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="pname"
                            id="pname"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Postal Code
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="pcode"
                            id="pcode"
                            class="form-control"
                            required
                        />
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
        <div class="card col-lg-3  right-box stay-pad">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Area Settings</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/addarea" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""
                            >Select Post Office
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="poffice"
                            id="poffice"
                            class="form-control"
                        >
                            @foreach($postoffice as $offc)
                                <option value="{{$offc->id}}">{{$offc->name}}-{{$offc->postal_code}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Area Name
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="aname"
                            id="aname"
                            class="form-control"
                            required
                        />
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
        <div class="card col-lg-3  right-box stay-pad">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Village Settings</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/addvillage" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""
                            >Select Area
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="areaid"
                            id="areaid"
                            class="form-control"
                        >
                            @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Village Name
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="vname"
                            id="vname"
                            class="form-control"
                            required
                        />
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
        <div class="card col-lg-3  make_space">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Lane/Street Settings</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/addlane" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""
                            >Select Village
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="villid"
                            id="villid"
                            class="form-control"
                        >
                            @foreach($village as $vill)
                                <option value="{{$vill->id}}">{{$vill->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Lane/Street Name
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="lname"
                            id="lname"
                            class="form-control"
                            required
                        />
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
        <div class="card col-lg-8 right-box stay-pad make_space">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Address</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
                        <table class="table align-items-center mb-0" id="table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Post Offices</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @if($postoffice)
                                        @foreach($postoffice as $poff)
                                            <tr class="trow">
                                                <td>{{$poff->name}} -> {{$poff->postal_code}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-3">
                        <table class="table align-items-center mb-0" id="table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Villages</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @if($fullareas)
                                        @foreach($fullareas as $ars)
                                            <tr class="trow">
                                                <td>{{$ars->aname}} -> {{$ars->pname}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <table class="table align-items-center mb-0" id="table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Areas</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @if($fullvillages)
                                        @foreach($fullvillages as $vill)
                                            <tr class="trow">
                                                <td>{{$vill->aname}} -> {{$vill->pname}} -> {{$vill->vname}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-12 make_space">
                        <table class="table align-items-center mb-0" id="table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lanes/Streets</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @if($fulllane)
                                        @foreach($fulllane as $lane)
                                            <tr class="trow">
                                                <td>{{$lane->aname}} -> {{$lane->pname}} -> {{$lane->vname}} -> {{$lane->lname}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="page_splitter">
    <div class="row">
        <h5>CBO Settings</h5>
        <div class="card col-lg-4  ">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Consumer Prefix</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/addconsumerprefix" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""
                            >Select Project
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="projectid"
                            id="projectid"
                            class="form-control"
                        >
                            @foreach($projects as $pro)
                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Consumer Prefix Name
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cpref"
                            id="cpref"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Consumer Starting Key
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="ckey"
                            id="ckey"
                            class="form-control"
                            required
                        />
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
        <div class="card col-lg-4  right-box ">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Connection Prefix</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/addconnerefix" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""
                            >Select Project
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="projectid"
                            id="projectid"
                            class="form-control"
                        >
                            @foreach($projects as $pro)
                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Connection Prefix Number
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cpref"
                            id="cpref"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Connection Starting Key
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="ckey"
                            id="ckey"
                            class="form-control"
                            required
                        />
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
        <div class="card col-lg-4 set_mar_top ">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Valve Settings</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/addvalve" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""
                            >Select Project
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="projectid"
                            id="projectid"
                            class="form-control"
                        >
                            @foreach($projects as $pro)
                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Valve Name
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="svname"
                            id="svname"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Description
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="sdiscription"
                            id="sdiscription"
                            class="form-control"
                            required
                        />
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
        <div class="card col-lg-3  set_mar_top right-box stay-pad">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>G/N Division Settings</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/addgndev" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""
                            >Select Project
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="projectid"
                            id="projectid"
                            class="form-control"
                        >
                            @foreach($projects as $pro)
                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Division Name
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="sdname"
                            id="sdname"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Division Number
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="sdnum"
                            id="sdnum"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Description
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="sddiscription"
                            id="sddiscription"
                            class="form-control"
                            required
                        />
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
        <div class="card col-lg-3  right-box set_mar_top">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Billing zone Settings</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/addbillzone" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""
                            >Select Project
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="projectid"
                            id="projectid"
                            class="form-control"
                        >
                            @foreach($projects as $pro)
                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Zone Name
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="sbname"
                            id="sbname"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for=""
                            >Description
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="sbdiscription"
                            id="sbdiscription"
                            class="form-control"
                            required
                        />
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
    </div>
    <hr class="page_splitter">
    <div class="row make_space">
        <h5>Permission Settings</h5>
        <div class="card col-lg-8 col-md-12 ">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Permission Levels</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table align-items-center mb-0" id="table">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Level Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Attached Users count</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rolls as $roll)
                            <tr class="trow">
                                <td>{{$roll->roll_name}}</td>
                                <td></td>
                                <td><a href="/permissions" class=""><i class="material-icons">edit</i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card col-lg-3 col-md-12 right-box stay-pad">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Add User Rolls</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/adduserpermissions" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""
                            >Permission Roll Name
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="pname"
                            id="pname"
                            class="form-control"
                            required
                        />
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
    </div>
</div>