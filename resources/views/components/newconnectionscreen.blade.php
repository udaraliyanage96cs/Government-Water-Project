<div>
    <div class="card">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Add New Connection</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="/addnewconnection/{{$consumerid}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Billing Category
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="cbill"
                            id="cbill"
                            class="form-control"
                        >
                            <option value="0">Household/Domestic</option>
                            <option value="1">Business</option>
                            <option value="2">Public</option>
                            <option value="3">Religious</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3  form-group">
                        <label for=""
                            >Mobile One <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cphone1"
                            id="cphone1"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Mobile Two <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cphone2"
                            id="cphone2"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Fixed Line<span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cphonefix"
                            id="cphonefix"
                            class="form-control"
                            required
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Post Office
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="cpoffice"
                            id="cpoffice"
                            class="form-control"
                            required
                        >
                            <option value="">Select Post Office</option>
                            @if($poffice)
                                @foreach($poffice as $pff)
                                    <option value="{{$pff->id}}">{{$pff->name}} - {{$pff->postal_code}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Area
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="carea"
                            id="carea"
                            class="form-control"
                            required
                        >
                            @if($areas)
                                @foreach($areas as $are)
                                    <option value="{{$are->id}}">{{$are->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Village
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="cvillage"
                            id="cvillage"
                            class="form-control"
                            required
                        >
                            @if($vilages)
                                @foreach($vilages as $vill)
                                    <option value="{{$vill->id}}">{{$vill->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Lane
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="clane"
                            id="clane"
                            class="form-control"
                            required
                        >
                            @if($lanes)
                                @foreach($lanes as $lane)
                                    <option value="{{$lane->id}}">{{$lane->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 form-group">
                        <label for=""
                            >House Number
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="chnumber"
                            id="chnumber"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-5 form-group">
                        <label for="">House Name</label>
                        <input
                            type="text"
                            name="chname"
                            id="chname"
                            class="form-control"
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Valve
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="valvename"
                            id="valvename"
                            class="form-control"
                            required
                        >
                            @if($valves)
                                @foreach($valves as $valv)
                                    <option value="{{$valv->id}}">{{$valv->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >G/N Division
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="gnid"
                            id="gnid"
                            class="form-control"
                            required
                        >
                            @if($divisions)
                                @foreach($divisions as $dev)
                                    <option value="{{$dev->id}}">{{$dev->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Billing zone
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="billid"
                            id="billid"
                            class="form-control"
                            required
                        >
                            @if($zones)
                                @foreach($zones as $zon)
                                    <option value="{{$zon->id}}">{{$zon->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 form-group">
                        <label for=""
                            >Premises Number
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="number"
                            name="chprnumber"
                            id="chprnumber"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-2 form-group">
                        <label for="">Number of beneficiaries </label>
                        <input
                            type="text"
                            name="cnumofbef"
                            id="cnumofbef"
                            class="form-control"
                        />
                    </div>
                    <div class="col-lg-2 form-group">
                        <label for="">Name of beneficiaries </label>
                        <input
                            type="text"
                            name="cnameofbef"
                            id="cnameofbef"
                            class="form-control"
                        />
                    </div>
                    
                </div>
                <div class="col-lg-2 form-group">
                    <label for="">Set as default connection</label>
                    <input
                        type="checkbox"
                        name="defcon"
                        id="defcon"
                        style="margin-left:20px"
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        $('#cpoffice').on('change', function () {
            var cpoffice = $("#cpoffice").val();
            console.log(cpoffice);
            console.log("bbbbbbb");
            $.ajax({
                type: "get",
                url: '/getArea/' + cpoffice,
                success: function (res) {
                    console.log("aaaaaaaaaaaaaa");

                    $('#carea').empty();
                    $.each(res['item'], function (key, value) {
                        var id = value['id'];
                        var name = value['name'];
                        $('#carea').append('<option value="' + id + '">' + name + '</option>');
                    });
                    $('#carea').append('<option value="dis" selected disabled>Select Area</option>');
                }

            });
        });

        $('#carea').on('change', function () {
            var carea= $("#carea").val();
            console.log(carea);
            $.ajax({
                type: "get",
                url: '/getVillage/' + carea,
                success: function (res) {
                    console.log(res);

                    $('#cvillage').empty();
                    $.each(res['item'], function (key, value) {
                        var id = value['id'];
                        var name = value['name'];
                        $('#cvillage').append('<option value="' + id + '">' + name + '</option>');
                    });
                    $('#cvillage').append('<option value="dis" selected disabled>Select Villlage</option>');
                }

            });
        });

        $('#cvillage').on('change', function () {
            var cvillage = $("#cvillage").val();
            console.log(cvillage);
            $.ajax({
                type: "get",
                url: '/getlane/' + cvillage,
                success: function (res) {
                    console.log(res);

                    $('#clane').empty();
                    $.each(res['item'], function (key, value) {
                        var id = value['id'];
                        var name = value['name'];
                        $('#clane').append('<option value="' + id + '">' + name + '</option>');
                    });
                    $('#clane').append('<option value="dis" selected disabled>Select Area</option>');
                }

            });
        });
    });
</script>