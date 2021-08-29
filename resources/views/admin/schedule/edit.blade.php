@section('title')
    Schedule
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Schedule
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container m-4">
                    <form action="{{ route('schedule.update', $sch) }}" method="POST" data-parsley-validate>
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Matkul</label>
                            <input type="text" name="namaMatkul" class="form-control" id="exampleFormControlInput1"
                                placeholder="nama matkul" value="{{ $sch->namaMatkul }}">
                            @error('namaMatkul') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Kelas</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="kelas"
                                name="kelas" value="{{ $sch->kelas }}">
                            @error('kelas') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Dosen</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="dosen"
                                name="dosen" value="{{ $sch->dosen }}">
                            @error('dosen') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jam</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jam"
                                name="jam" value="{{ $sch->jam }}">
                            @error('jam') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Link Grup</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="link grup" name="linkGroup" value="{{ $sch->linkGroup }}">
                            @error('linkGroup') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <button type="submit" class="btn btn-success float-right mb-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
