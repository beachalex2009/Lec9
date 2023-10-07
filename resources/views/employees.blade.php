@extends('layout.master')

@section('content')
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FIRST_NAME</th>
                    <th scope="col">LAST_NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE_NUMBER</th>
                    <th scope="col">HIRE_DATE</th>
                    <th scope="col">JOB_ID</th>
                    <th scope="col">SALARY</th>
                    <th scope="col">COMMISSION_PCT</th>
                    <th scope="col">MANAGER_ID</th>
                    <th scope="col">DEPARTMENT_ID</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employee as $emp)
                    <tr class="">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $emp->FIRST_NAME }}</td>
                        <td>{{ $emp->LAST_NAME }}</td>
                        <td>{{ $emp->EMAIL }}</td>
                        <td>{{ $emp->PHONE_NUMBER }}</td>
                        <td>{{ $emp->HIRE_DATE }}</td>
                        <td>{{ $emp->JOB_ID }}</td>
                        <td>{{ $emp->SALARY }}</td>
                        <td>{{ $emp->COMMISSION_PCT }}</td>
                        <td>{{ $emp->MANAGER_ID }}</td>
                        <td>{{ $emp->DEPARTMENT_ID }}</td>
                    </tr>
                @empty
                    <tr class="">
                        <td>Data Not Found</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
