@extends('layout')
@section('content')
        <h2>新增內容</h2>
                <p>以下請輸入你的名字及內容</p>
                <form method="post" action="{{ URL::action('boardController@store') }}">
                <table  class="table table-striped">
                        <tr>
                                <th>Name_名字 :</th>
                                <td><input type="text" name="input_name"></td>
                        </tr>
                        <tr>
                                <th>Sex_性別</th>
                                <td><input type="text" name="input_sex"/></td>
                        </tr>
                        <tr>
                                <th>Subject_主題</th>
                                <td><input type="text" name="input_subject"/></td>
                        </tr>
                        <tr>
                                <th>Content_內容</th>
                                <td><input type="text" name="input_content"/></td>
                        </tr>
                        <tr>
                                <td colspan="2" style="text-align: center;">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit">送出</button>
                                </td>
                        </tr>
                </table>
                </form>
@stop