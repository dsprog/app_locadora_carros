@extends('layouts.app')

@section('content')
<login csrf="{{ @csrf_token() }}"></login>
@endsection
