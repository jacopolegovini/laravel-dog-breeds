@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Size
                </th>
                <th>
                    Origin
                </th>
                <th>
                    Group
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($breeds as $breed)
            <tr>
                <td>
                    {{$breed->name}}
                </td>
                <td>
                    {{$breed->size}}
                </td>
                <td>
                    {{$breed->origin}}
                </td>
                <td>
                    {{$breed->group}}
                </td>
                @empty
                <div class="empty-table">
                    The dogs run out...
                </div>
            </tr>
            @endforelse
        </tbody>
    </table>
</main>
@endsection
