@extends('layout')
@section('content')

        <table  class="table">
            <thead>
                <tr><th>Id</th><th>Name</th><th>Sex</th><th>Subject</th><th>Time</th><th>Content</th></tr>
            </thead>
            <tbody>
                @foreach( $messageBoards as $key => $messageBoard)
                
                 
                    <tr><td>{{ $messageBoard->boardid }}</td>
                        <td>{{ $messageBoard->boardname }}</td>
                        <td>{{ $messageBoard->boardsex }}</td>
                        <td>{{ $messageBoard->boardsubject }}</td>
                        <td>{{ $messageBoard->boardtime }}</td>  
                        <td>{{ $messageBoard->boardcontent }}</td>  
                    </tr>

                    
                @endforeach
            </tbody>
        </table>
@stop