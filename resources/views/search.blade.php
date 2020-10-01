@extends('layouts.app')

@section('content')
<form action="{{ route('search.word') }}" method="post">
{{ csrf_field() }}
<input type="text" name="word">
<input type="submit" value="ツイートを検索">
</form>

@endsection
