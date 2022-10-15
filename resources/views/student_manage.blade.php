@extends('layout')

@section('name','Manage')

@section('main-content')
        @if (count($students)<=0)
            No record
        @else
                <table class="table mt-3  text-left">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col" class="pr-5">Birth day</th>
                            <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                        <tr>
                            <td>{!! $student->fullname !!}</td>
                            <td class="pr-5 text-right">{!! $student->birthday !!}</td>
                            <td>{!! $student->address !!}</td>
                            <td><a href="{!! $student->id !!}/edit"
                                class="btn btn-outline-primary">Edit</a>
                                <a href="{!! $student->id !!}/delete"  class="btn btn-primary">Delete</a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No students found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
        @endif
@endsection