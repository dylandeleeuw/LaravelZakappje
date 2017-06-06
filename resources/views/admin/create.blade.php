@extends('layout.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ZakAppje
      </h1>
    </section>

    @php
      var_dump($classes);
    @endphp

    <!-- Main content -->
    <section class="content">
    	<p>Admin create</p> 
      <p>{{$tablename}}</p>
      {{Form::open(['url' => 'admin/store'])}}
        {{ Form::label('name', 'Name: ') }}
        {{ Form::text('name')}}
        <br> <br>
        {{ Form::label('desc', 'Desc: ') }}
        {{ Form::text('desc')}}
        <br> <br>
        {{ Form::label('flag', 'Flag: ')}}
        {{Form::select('flag', ['1' => 'Active', '0' => 'Unactive'], '1')}}
        <br> <br>
        {{ Form::label('class_id', 'Class: ')}}
        {{Form::select('class_id', $classes)}}
        <br> <br>
        {{ Form::submit('Save')}}
      {{Form::close()}}
    </section>

    <!-- <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
           
        </form> -->
    <!-- /.content -->
  </div>
@endsection