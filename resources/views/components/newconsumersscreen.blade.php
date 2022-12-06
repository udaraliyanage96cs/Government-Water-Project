<div>
    @if($errors->any())
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Successfull!</h4>
            <p>You have successfully added new Consumer. 
                If you wish to add new connection to this consumer please click 'New Connection' Button</p>
            <a href="/addconnection/{{$errors->first()}}" class="btn btn-success" >New Connection</a>
        </div>
    @endif
    <div class="card">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Add New Consumer</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="/addnewconsumer" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-2 form-group">
                        <label for=""
                            >Salutation
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="csalutation"
                            id="csalutation"
                            class="form-control"
                        >
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                            <option value="Rev">Rev</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-lg-3  form-group">
                        <label for=""
                            >Surname <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="csurname"
                            id="csurname"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-7 form-group">
                        <label for=""
                            >Name <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cname"
                            id="cname"
                            class="form-control"
                            required
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >NIC ( OLD )
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cnicold"
                            id="cnicold"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >NIC ( NEW )
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cnicnew"
                            id="cnicnew"
                            class="form-control"
                            required
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Telephone Number
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cphone"
                            id="cphone"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-9 form-group">
                        <label for="">Address</label>
                        <input
                            type="text"
                            name="caddress"
                            id="caddress"
                            class="form-control"
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Pofile Pic
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="file"
                            name="profile"
                            id="profile"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >NIC Image ( FRONT )
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="file"
                            name="nic_f_file"
                            id="nic_f_file"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >NIC Image ( REAR )
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="file"
                            name="nic_b_file"
                            id="nic_b_file"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Signature Image
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="file"
                            name="sig_file"
                            id="sig_file"
                            class="form-control"
                            required
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Consumer Prefix
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cprefix"
                            id="cprefix"
                            class="form-control"
                            required
                            disabled
                        />
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for="">Consumer Key</label>
                        <input
                            type="number"
                            name="ckey"
                            id="ckey"
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
        </div>
    </div>
</div>
