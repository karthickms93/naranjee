@extends('layouts.admin.head_foot')
@section('body')
<div class="row">
    <div class="col l12 s12 m12">
        <div class="col l12 s12 m12">
            <h5>MSME</h5>
            <div class="panel panel-default panel-custom">

                <table id="user_listing" class="display view_msme_table res_table">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>name</th>
                            <th>company</th>
                            <th>contact</th>
                            <th>email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $i=1;
            foreach($msme as $msme_get)
            {
              ?>
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $msme_get->name }}</td>
                            <td>{{ $msme_get->company }}</td>
                            <td>{{ $msme_get->contact }}</td>
                            <td>{{ $msme_get->email }}</td>
                        </tr>
                        <?php
            }
            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop