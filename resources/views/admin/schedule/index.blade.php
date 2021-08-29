@section('title')
    Schedule
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Schedule
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-3">
                <a href="{{ route('schedule.create') }}" class="btn btn-primary">Add Skill</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Matkul</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Link Group</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sch as $sch)
                            <tr>
                                <th scope="row"> {{ $loop->iteration }} </th>
                                <td> {{ $sch->namaMatkul }} </td>
                                <td> {{ $sch->kelas }} </td>
                                <td> {{ $sch->dosen }} </td>
                                <td> {{ $sch->jam }} </td>
                                <td> <a href="{{ $sch->linkGroup }}" target=”_blank”
                                        class="badge rounded-pill bg-primary text-decoration-none">Link</a>
                                </td>
                                <td>
                                    <a href="{{ route('schedule.edit', ['schedule' => $sch]) }}"
                                        class="btn btn-primary"><i class="fa fa-pencil"></i> Edit </a>
                                    <form action="{{ route('schedule.destroy', ['schedule' => $sch]) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
