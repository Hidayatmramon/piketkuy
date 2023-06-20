@extends('tabel.main')   
@section('tabel')

<div class="container">
    <br>
    <br>
    <br>
    <br>
    <table class="table table-bordered">
      <tr>
          <th>No</th>
          <th>Nis</th>
          <th>Nama</th>
          <th>hari</th>
          <th>Ruang</th>
      </tr>
      @foreach($students as $student)
      @if($student->name=="admin")
      @else
      <tr> 
          <td>{{$loop->iteration}}</td>
          <td>{{ $student->nis }}</td> 
          <td>{{ $student->name }}</td>
          <td>{{ $student->hari }}</td>
          <td>{{ $student->piket }}</td>
      </tr>
      @endif 
  @endforeach
  </table> 
   </div>
   @endsection