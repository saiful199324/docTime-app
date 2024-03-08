@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title-5 m-b-35">Customer List data table</h3>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <form action="{{ route('people') }}" method="GET" class="form-inline justify-content-end" style="float: left;">
                                    <div class="form-group mr-2">
                                        <label for="birthYear" class="sr-only">Year</label>
                                        <select class="form-control" id="birthYear" name="year">
                                            <option value="">Select Year</option>
                                            @for($year = date('Y'); $year >= 1900; $year--)
                                                <option value="{{ $year }}"{{ request('year') == $year ? ' selected' : '' }}>{{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group mr-2">
                                        <label for="birthMonth" class="sr-only">Month</label>
                                        <select class="form-control" id="birthMonth" name="month">
                                            <option value="">Select Month</option>
                                            @foreach(range(1, 12) as $month)
                                                <option value="{{ $month }}"{{ request('month') == $month ? ' selected' : '' }}>{{ DateTime::createFromFormat('!m', $month)->format('F') }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </form>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <div>
                                    <div class="pagination">
                                    <div><h3 style="margin: 5px 10px;">{{ $people->total() }} in the list</h3></div>
                                        {{ $people->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" id="selectAll">
                                        </th>
                                        <th>Email</th>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Location</th>
                                        <th>Birthday</th>
                                        <th>Phone</th>
                                        <th>IP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($people as $person)
                                        <tr class="tr-shadow">
                                            <td>
                                                <input type="checkbox" class="checkmark">
                                            </td>
                                            <td>{{ $person->email }}</td>
                                            <td>{{ $person->id }}</td>
                                            <td>{{ $person->name }}</td>
                                            <td>{{ $person->country }}</td>
                                            <td>{{ \Carbon\Carbon::parse($person->birthday)->format('Y-m-d') }}</td>
                                            <td>{{ $person->phone }}</td>
                                            <td>{{ $person->ip }}</td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Pagination Links -->
                                
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <div>
                                    <div class="pagination">
                                    <div><h3 style="margin: 5px 10px;">{{ $people->total() }} in the list</h3></div>
                                        {{ $people->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection