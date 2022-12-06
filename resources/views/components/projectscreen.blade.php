<div>
    @if(Auth::User()->project_id == 0)
        <div class="">
            <div class="addnew">
                <a href="/newproject" class="btn btn-success"> New Project</a>
            </div>
        </div>
    @endif
    <div class="">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                    <h6>Projects</h6>
                    <p class="text-sm mb-0">
                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                        <span class="font-weight-bold ms-1">{{$project_count}} done</span>
                    </p>
                    </div>
                    @if(Auth::User()->project_id == 0)
                    <div class="searchbox"><input type="text" id="searchbox" onkeyup="myFunction()" placeholder="Search..." title="Type in a any Detail" class="form-control searchbox"></div>
                    @endif
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0" id="table">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">BR Number</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Connection Type</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Package</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Officer Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Account Blance</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @if($projects)
                                    @if(Auth::User()->project_id == 0)
                                        @foreach($projects as $pro)
                                            <tr class="trow">
                                                <td>{{$pro->name}}</td>
                                                <td>{{$pro->br_number}}</td>
                                                <td>{{$pro->connection_type}}</td>
                                                <td>{{$pro->package}}</td>
                                                <td>{{$pro->officer_name}}</td>
                                                <td>{{$pro->ac_blance}}</td>
                                                <td><a href="/viewproject/{{$pro->id}}" class="btn btn-success btn-sm">View</a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr class="trow">
                                            <td>{{$projects->name}}</td>
                                            <td>{{$projects->br_number}}</td>
                                            <td>{{$projects->connection_type}}</td>
                                            <td>{{$projects->package}}</td>
                                            <td>{{$projects->officer_name}}</td>
                                            <td>{{$projects->ac_blance}}</td>
                                            <td><a href="/viewproject/{{$projects->id}}" class="btn btn-success btn-sm">View</a></td>
                                        </tr>
                                    @endif
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