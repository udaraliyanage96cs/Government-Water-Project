<div class="">
    @if($errors->any())
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Successfull!</h4>
            <p>You have successfully added new Beneficiaries.</p>
        </div>
    @endif
    <div class="card">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                <h6>Add Beneficiaries</h6>
                <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1"></span>
                </p>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(count($beneficiarie) < $conn->num_of_benif)
                <form action="/addnewbenif/{{$connid}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-2 form-group">
                            <label for=""
                                >Relationship
                                <span class="red_star">*</span></label
                            >
                            <select
                                name="brel"
                                id="brel"
                                class="form-control"
                            >
                                <option value="Husband">Husband</option>
                                <option value="Wife">Wife</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                                <option value="Grandfather">Grandfather</option>
                                <option value="Grandmother">Grandmother</option>
                                <option value="Father_in_law">Father in law</option>
                                <option value="Mother_in_law">Mother in law</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-lg-7 form-group">
                            <label for=""
                                >Name <span class="red_star">*</span></label
                            >
                            <input
                                type="text"
                                name="bname"
                                id="bname"
                                class="form-control"
                                required
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 form-group">
                            <label for=""
                                >NIC
                            </label
                            >
                            <input
                                type="text"
                                name="bnic"
                                id="bnic"
                                class="form-control"
                                
                            />
                        </div>
                        <div class="col-lg-3 form-group">
                            <label for=""
                                >Contact Number
                                </label
                            >
                            <input
                                type="text"
                                name="bphone"
                                id="bphone"
                                class="form-control"
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
            @else
                <p> Exceed Nmber of Beneficiaries</p>
            @endif
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
</div>