<div class="card">
    <div class="card-header pb-0">
        <div class="row">
            <div class="col-lg-6 col-7">
                <h6>Connection Details</h6>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="/addnewconnection/" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-3 form-group">
                    <label for=""
                        >Billing Category
                        <span class="red_star">*</span></label
                    >
                    <input
                        type="text"
                        name="pname"
                        id="pname"
                        class="form-control"
                        value = "{{$connection->billtype}}"
                        disabled
                    />
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
                        value = "{{$connection->phone1}}"
                        disabled
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
                        value = "{{$connection->phone2}}"
                        class="form-control"
                        disabled
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
                        value = "{{$connection->phonefix}}"
                        disabled
                    />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 form-group">
                    <label for=""
                        >Post Office
                        <span class="red_star">*</span></label
                    >
                    <input
                        type="text"
                        name="poffid"
                        id="poffid"
                        class="form-control"
                        value = "{{$fullconnection[0]->pname}}"
                        disabled
                    />
                </div>
                <div class="col-lg-3 form-group">
                    <label for=""
                        >Area
                        <span class="red_star">*</span></label
                    >
                    <input
                        type="text"
                        name="pname"
                        id="pname"
                        class="form-control"
                        value = "{{$fullconnection[0]->aname}}"
                        disabled
                    />
                </div>
                <div class="col-lg-3 form-group">
                    <label for=""
                        >Village
                        <span class="red_star">*</span></label
                    >
                    <input
                        type="text"
                        name="pname"
                        id="pname"
                        class="form-control"
                        value = "{{$fullconnection[0]->vname}}"
                        disabled
                    />
                </div>
                <div class="col-lg-3 form-group">
                    <label for=""
                        >Lane
                        <span class="red_star">*</span></label
                    >
                    <input
                        type="text"
                        name="pname"
                        id="pname"
                        class="form-control"
                        value = "{{$fullconnection[0]->lname}}"
                        disabled
                    />
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
                        value = "{{$connection->house_num}}"
                        disabled
                    />
                </div>
                <div class="col-lg-5 form-group">
                    <label for="">House Name</label>
                    <input
                        type="text"
                        name="chname"
                        id="chname"
                        class="form-control"
                        value = "{{$connection->house_name}}"
                        disabled
                    />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 form-group">
                    <label for=""
                        >Valve
                        </label
                    >
                    <input
                        type="text"
                        name="chname"
                        id="chname"
                        class="form-control"
                        value = "{{$fullconnection[0]->vlname}}"
                        disabled
                    />
                </div>
                <div class="col-lg-3 form-group">
                    <label for=""
                        >G/N Devision
                        </label
                    >
                    <input
                        type="text"
                        name="chname"
                        id="chname"
                        class="form-control"
                        value = "{{$fullconnection[0]->gnname}}"
                        disabled
                    />
                </div>
                <div class="col-lg-3 form-group">
                    <label for=""
                        >Billing zone
                        <span class="red_star">*</span></label
                    >
                    <input
                        type="text"
                        name="pname"
                        id="pname"
                        class="form-control"
                        value = "{{$fullconnection[0]->bname}}"
                        disabled
                    />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 form-group">
                    <label for=""
                        >Premises Number
                        <span class="red_star">*</span></label
                    >
                    <input
                        type="text"
                        name="chprnumber"
                        id="chprnumber"
                        class="form-control"
                        value = "{{$connection->premiss_num}}"
                        disabled
                    />
                </div>
                <div class="col-lg-2 form-group">
                    <label for="">Number of beneficiaries </label>
                    <input
                        type="text"
                        name="cnumofbef"
                        id="cnumofbef"
                        value = "{{$connection->num_of_benif}}"
                        class="form-control"
                        disabled
                    />
                </div>
                
                
            </div>
        </form>
    </div>
</div>
<div class="card make_space ">
    <div class="card-header pb-0">
        <div class="row">
            <div class="col-lg-6 col-7">
                <h6>Attached Beneficiaries</h6>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table align-items-center mb-0" id="table">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Relationship</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIC</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contact Number</th>
                </tr>
            </thead>
            <tbody>
                    @if($beneficiarie)
                        @foreach($beneficiarie as $benif)
                            <tr class="trow">
                                <td>{{$benif->relationship}}</td>
                                <td>{{$benif->name}}</td>
                                <td>{{$benif->nic}}</td>
                                <td>{{$benif->phone}}</td>
                            </tr>
                        @endforeach
                    @endif
            </tbody>
        </table>
    </div>
</div>
<script>
    function myFunction() {
        var $rows = $('#table .trow');
        $('#searchbox').keyup(function() {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
            
            $rows.show().filter(function() {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });
    }
</script>