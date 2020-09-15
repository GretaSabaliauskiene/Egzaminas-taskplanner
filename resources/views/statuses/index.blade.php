@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach ($statuses as $status)
        <tr>
            <td>{{ $status->name }}</td>
            <td>
                <form action={{ route('status.destroy', $status->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('status.edit', $status->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('status.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection

