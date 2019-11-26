@extends('layouts.adminTemplate')
@section('page-title','List of Investors')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">List of Investors</h4>
                        <div class="toolbar">
                        </div>
                        <div class="table-responsive">
                            <table id="datatables11" class="table" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>AccountNo</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Balance</th>
                                        <th>Document</th>
                                        <th>Status</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if(!empty($data))
                                    @php($i=0)
                                    @foreach($data as $list)
                                    <tr id="rowid{{$list->id}}">
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $list->account_number }}</td>
                                        <td>{{ $list->email }}</td>
                                        <td>{{ $list->mobile }}</td>
                                        <td>$ {{ $list->balance }}</td>
                                        <td>Not Uploaded</td>
                                        <td>@if($list->verified) Active @else Deactive @endif</td>
                                        <td class="text-right">
                                            <a href="" class="btn btn-simple btn-success btn-icon edit"><i class="material-icons">edit</i></a>
                                            <a href="" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                            <a href="#" data-url="" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div>
@endsection