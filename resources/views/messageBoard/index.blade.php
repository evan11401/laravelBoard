@extends('layout')
@section('content')

        <table  class="table">
            <thead>
                <tr><th>Number</th><th>Name</th><th>Sex</th><th>Subject</th><th>Time</th><th>Content</th></tr>
            </thead>
            <tbody>
                
            <script>
                var i = 1;
            </script>
                @foreach( $messageBoards as $key => $messageBoard) 
                    <tr>
                        <script>
                            document.write("<td>"+(i++)+"</td>");
                            
                        </script>
                        
                        <td>{{ $messageBoard->boardname }}</td>
                        <td>{{ $messageBoard->boardsex }}</td>
                        <td>{{ $messageBoard->boardsubject }}</td>
                        <td>{{ $messageBoard->boardtime }}</td>  
                        <td>{{ $messageBoard->boardcontent }}</td> 
                        <td></td>
                    </tr>

                    
                @endforeach
            </tbody>
        </table>
@stop