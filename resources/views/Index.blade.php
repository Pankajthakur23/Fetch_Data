<table border="2">

<tr>
  <th>Id</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Department</th>


</tr>
@foreach($employee as $emp)
    <tr>

        <td>{{$emp['id']}}</td>
        <td>{{$emp['name']}}</td>
        <td>{{$emp['gender']}}</td>
        <td>{{$emp['age']}}</td>
        <td>{{$emp['department']}}</td>

    </tr>

    @endforeach

</table>
