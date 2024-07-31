
@extends('templates.main')
@section('content')
<table class="axelTable">
            <thead>
                <th> Id </th>
                <th> Name</th>
                <th> Description </th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td> {{$item->id}} </td>
                        <td> {{$item->name}} </td>
                        <td> {{$item->description}} </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
@endsection
