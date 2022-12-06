<div>
    <div class="card">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Permission Settings</h6>
                </div>
            </div>
        </div>
            
        <div class="card-body px-0 pb-2">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th>Permisson</th>
                            @foreach($UserRoll as $rolls)
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{$rolls->roll_name}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=1;$i<$resount-3;$i++)
                            <tr class="trow">
                            <td>{{ ucwords(str_replace('_', ' ', $UserPermission[$i])) }}</td>
                            @for($j=0;$j<$resrows;$j++)
                                <td><a href="/makepermission/{{$i}}/{{$j}}"><input type="checkbox" name="check-{{$i}}-{{$j}}" id="check-{{$i}}-{{$j}}"></a></td>
                            @endfor 
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>