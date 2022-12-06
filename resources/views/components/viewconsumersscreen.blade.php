<div>
    <div class="card">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Consumer Details</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-1  form-group">
                        <label for=""
                            >Salutation </label
                        >
                        <input
                            type="text"
                            name="csurname"
                            id="csurname"
                            class="form-control"
                            value="{{$consumer->salutation}}"
                            disabled
                        />
                    </div>
                    <div class="col-lg-3  form-group">
                        <label for=""
                            >Surname </label
                        >
                        <input
                            type="text"
                            name="csurname"
                            id="csurname"
                            class="form-control"
                            value="{{$consumer->surname}}"
                            disabled
                        />
                    </div>
                    <div class="col-lg-7 form-group">
                        <label for=""
                            >Name </label
                        >
                        <input
                            type="text"
                            name="cname"
                            id="cname"
                            class="form-control"
                            value="{{$consumer->name}}"
                            disabled
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >NIC ( OLD )
                            </label
                        >
                        <input
                            type="text"
                            name="cnicold"
                            id="cnicold"
                            value="{{$consumer->nic}}"
                            class="form-control"
                            disabled
                        />
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >NIC ( NEW )
                            </label
                        >
                        <input
                            type="text"
                            name="cnicnew"
                            id="cnicnew"
                            value="{{$consumer->nic_new}}"
                            class="form-control"
                            disabled
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Telephone Number
                            </label
                        >
                        <input
                            type="text"
                            name="cphone"
                            value="{{$consumer->phone}}"
                            id="cphone"
                            class="form-control"
                            disabled
                        />
                    </div>
                    <div class="col-lg-9 form-group">
                        <label for="">Address</label>
                        <input
                            type="text"
                            name="caddress"
                            id="caddress"
                            value="{{$consumer->address}}"
                            class="form-control"
                            disabled
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Pofile Pic
                            </label
                        >
                        <img src="../uploads/consumers/{{$consumer->nic}}/{{$consumer->propic}}" alt="{{$consumer->name}}" class="cons_image">

                   
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >NIC Image ( FRONT )
                            </label
                        >
                        <img src="../uploads/consumers/{{$consumer->nic}}/{{$consumer->nic_pic_f}}" alt="{{$consumer->name}}" class="cons_image">
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >NIC Image ( REAR )
                            </label
                        >
                        <img src="../uploads/consumers/{{$consumer->nic}}/{{$consumer->nic_pic_b}}" alt="{{$consumer->name}}" class="cons_image">
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Signature Image
                            </label
                        >
                        <img src="../uploads/consumers/{{$consumer->nic}}/{{$consumer->sig_pic}}" alt="{{$consumer->name}}" class="cons_image">
                    </div>
                </div>
                
            </form>
        </div>
    </div>

    <div class="card set_mar_top">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                <div class="">
                    <div class="addnew">
                        <a href="/addconnection/{{$consumer->id}}" class="btn btn-success">New Connection</a>
                    </div>
                </div>
                <h6>Connection</h6>

                <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1"></span>
                </p>
                </div>
                <div class="searchbox"><input type="text" id="searchbox" onkeyup="myFunction()" placeholder="Search..." title="Type in a any Detail" class="form-control searchbox"></div>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive">
                <table class="table align-items-center mb-0" id="table">
                    <thead>
                        <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Connection ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone One</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone Two</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">House Number</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">House Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Premiss Number</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Add Beneficiaries</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">View-Connection</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($fullconnection)
                            @foreach($fullconnection as $conn)
                                <tr class="trow">
                                    <td>{{$conn->id}}</td>
                                    <td>{{$conn->phone1	}}</td>
                                    <td>{{$conn->phone2}}</td>
                                    <td>{{$conn->house_num}}</td>
                                    <td>{{$conn->house_name}}</td>
                                    <td>{{$conn->premiss_num}}</td>
                                    <td><a href="/addbeneficiaries/{{$conn->id}}" class=""><i class="material-icons">add_circle</i></a></td>
                                    <td><a href="/connection/{{$conn->id}}" class=""><i class="material-icons ">visibility</i></a></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    
</div>
