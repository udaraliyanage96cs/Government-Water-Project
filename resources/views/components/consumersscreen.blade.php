<div>
    <div class="">
        <div class="addnew">
            <a href="/newconsumer" class="btn btn-success">New Consumer</a>
        </div>
    </div>
   
    <div class="">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                    <h6>Consumers</h6>
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
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Salutation</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Consumer Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIC</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Phone</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Connection</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">View</th>
                            </tr>
                        </thead>
                        <tbody>
                                @if($consumers)
                                    @foreach($consumers as $cons)
                                        <tr class="trow">
                                            <td>{{$cons->salutation}}</td>
                                            <td>{{$cons->name}}</td>
                                            <td>{{$cons->nic}}</td>
                                            <td>{{$cons->address}}</td>
                                            <td>{{$cons->phone}}</td>
                                            <td><a href="/addconnection/{{$cons->id}}" class=""><i class="material-icons">add_circle</i></a></td>
                                            <td><a href="/viewconsumers/{{$cons->id}}" class=""><i class="material-icons ">visibility</i></a></td>
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