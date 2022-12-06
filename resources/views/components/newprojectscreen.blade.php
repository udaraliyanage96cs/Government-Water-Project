<div>
    <div class="card">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Add New Project</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="/insert_new_project" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for=""
                        >Project (Client) Name
                        <span class="red_star">*</span></label
                    >
                    <input
                        type="text"
                        name="cname"
                        id="cname"
                        class="form-control"
                        required
                    />
                </div>
                <div class="form-group">
                    <label for=""
                        >Address <span class="red_star">*</span></label
                    >
                    <input
                        type="text"
                        name="caddress"
                        id="caddress"
                        class="form-control"
                        required
                    />
                </div>
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label for=""
                            >Postal Code <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cpostalcode"
                            id="cpostalcode"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for=""
                            >Registration number of department (BR Number)
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cbrnumber"
                            id="cbrnumber"
                            class="form-control"
                            required
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 form-group">
                        <label for=""
                            >Telephone Number One
                            <span class="red_star">*</span></label
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
                        <label for="">Telephone Number Two</label>
                        <input
                            type="text"
                            name="cphone2"
                            id="cphone2"
                            class="form-control"
                        />
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for=""
                            >Email Address
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="email"
                            name="cemail"
                            id="cemail"
                            class="form-control"
                            required
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 form-group">
                        <label for=""
                            >Connectionn Type
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="cconnectiontype"
                            id="cconnectiontype"
                            class="form-control"
                        >
                            <option value="0">Post-Paid</option>
                            <option value="1">Pre-Paid</option>
                        </select>
                    </div>
                    <div class="col-lg-4 form-group">
                        <label for=""
                            >Packages <span class="red_star">*</span></label
                        >
                        <select
                            name="cpackage"
                            id="cpackage"
                            class="form-control"
                        >
                            <option value="0">Standard</option>
                            <option value="1">Silver</option>
                            <option value="2">Gold</option>
                            <option value="3">Platinum</option>
                        </select>
                    </div>
                    <div class="col-lg-4 form-group">
                        <label for=""
                            >Authorized Officer
                            <span class="red_star">*</span></label
                        >
                        <select
                            name="cauthofficer"
                            id="cauthofficer"
                            class="form-control"
                        >
                            <option value="0">Treasurer</option>
                            <option value="1">Chairman</option>
                            <option value="2">Secretary</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label for=""
                            >Authorized Officer's Name
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cauthofficername"
                            id="authofficername"
                            class="form-control"
                            required
                        />
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for=""
                            >Authorized Officer's NIC
                            <span class="red_star">*</span></label
                        >
                        <input
                            type="text"
                            name="cauthofficernic"
                            id="authofficernic"
                            class="form-control"
                            required
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
